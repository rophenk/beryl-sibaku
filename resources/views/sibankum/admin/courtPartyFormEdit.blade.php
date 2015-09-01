@extends('sibankum.admin.master')
@section('title', 'Pihak Pihak' )
@section('pagestyle')
{!! Html::style('sbk/admin/assets/global/css/components-md.css') !!}
{!! Html::style('sbk/admin/assets/global/css/plugins-md.css') !!}
@endsection

@section('breadcrumb')

						<li>
							<a href="/court_party">Pihak Pihak</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="">Form</a>
						</li>
@endsection

@section('settings-active')
active open
@endsection

@section('settings-selected')
<span class="selected"></span>
@endsection


@section('content')



@forelse ($court_party as $court_party)
<br />
<div class="row">
					
						<!-- BEGIN SAMPLE FORM PORTLET-->
						<div class="portlet light">
							<div class="portlet-title">
								<div class="caption font-green">
									<i class="icon-pin font-green"></i>
									<span class="caption-subject bold uppercase"> Data Pihak Pihak</span>
								</div>
							</div>
							<div class="portlet-body form">
								<form role="form" method="post" action="/court_party/update">
									<div class="form-body">
										<div class="form-group form-md-line-input form-md-floating-label">
											<input type="text" class="form-control" id="name" name="name" value="{{ $court_party->name }}">
											<label for="name">Nama</label>
											<span class="help-block">Nama Pihak Pihak... contoh : Pengadilan Agama</span>
										</div>
										<div class="form-group">
											<label>Sisi</label>
											<?php 
											if($court_party->name === 1) {
												$selected1 = ' selected="yes"';
												$selected2 = '';
											} else {
												$selected1 = '';
												$selected2 = ' selected="yes"';
											}
											?>
											<select class="form-control" name="side">
													<option value="1"<?php echo $selected1; ?>>1</option>
													<option value="2"<?php echo $selected2; ?>>2</option>
											</select>
										</div>
									<div class="form-actions noborder">
										<input type="hidden" name="_token" value="{{ csrf_token() }}">
										<input type="hidden" name="uuid" value="{{ $court_party->uuid }}">
										<button type="submit" class="btn blue">Submit</button>
										<button type="button" class="btn default">Cancel</button>
									</div>
								</form>
							</div>
						</div>
						<!-- END SAMPLE FORM PORTLET-->
					
				</div>
@empty
@endforelse

@endsection

@section('pagescript')
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {       
   Metronic.init(); // init metronic core components
   Layout.init(); // init current layout
   Demo.init(); // init demo features
});
</script>
@endsection