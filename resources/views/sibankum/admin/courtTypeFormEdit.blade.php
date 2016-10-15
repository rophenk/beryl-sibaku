@extends('sibankum.admin.master')
@section('title', 'Jenis Pengadilan' )
@section('pagestyle')
{!! Html::style('sbk/admin/assets/global/css/components-md.css') !!}
{!! Html::style('sbk/admin/assets/global/css/plugins-md.css') !!}
@endsection

@section('breadcrumb')

						<li>
							<a href="/court_type">Jenis Pengadilan</a>
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



@forelse ($court_type as $court_type)
<br />
<div class="row">
					
						<!-- BEGIN SAMPLE FORM PORTLET-->
						<div class="portlet light">
							<div class="portlet-title">
								<div class="caption font-green">
									<i class="icon-pin font-green"></i>
									<span class="caption-subject bold uppercase"> Data Jenis Pengadilan</span>
								</div>
							</div>
							<div class="portlet-body form">
								<form role="form" method="post" action="/court_type/update">
									<div class="form-group">
										<label>Jenis Perkara</label>
										<select class="form-control" id="case_type_id" name="case_type_id">
											<option>=== PILIH JENIS PERKARA ===</option>
											@forelse ($case_type_options as $case_type)
											<?php
												if($case_type->id === $court_type->case_type_id) {

													$selected_type = ' selected="yes"';

												} else {

													$selected_type = '';

												}
												?>
											<option value="{{ $case_type->id }}"<?php echo $selected_type; ?>>{{ $case_type->name }}</option>
											@empty
											<option>Belum ada Jenis Perkara</option>
											@endforelse
										</select>
									</div>
									<div class="form-body">
										<div class="form-group form-md-line-input form-md-floating-label">
											<input type="text" class="form-control" id="name" name="name" value="{{ $court_type->name }}">
											<label for="name">Nama</label>
											<span class="help-block">Nama Jenis Pengadilan... contoh : Pengadilan Agama</span>
										</div>
										<div class="form-group form-md-line-input form-md-floating-label">
											<input type="text" class="form-control" id="alias" name="alias"  value="{{ $court_type->alias }}">
											<label for="alias">Alias</label>
											<span class="help-block">Sebutan singkat dari Jenis Pengadilan, contoh : PA</span>
										</div>
									<div class="form-actions noborder">
										<input type="hidden" name="_token" value="{{ csrf_token() }}">
										<input type="hidden" name="uuid" value="{{ $court_type->uuid }}">
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