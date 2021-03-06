@extends('sibankum.admin.master')
@section('title', 'User' )
@section('pagestyle')
{!! Html::style('sbk/assets/global/css/components-md.css') !!}
{!! Html::style('sbk/assets/global/css/plugins-md.css') !!}
@endsection

@section('breadcrumb')

						<li>
							<a href="/users">User</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="">Form</a>
						</li>
@endsection

@section('user-active')
active open
@endsection

@section('user-selected')
<span class="selected"></span>
@endsection

@section('content')
<br />
<div class="row">
					
						<!-- BEGIN SAMPLE FORM PORTLET-->
						<div class="portlet light">
							<div class="portlet-title">
								<div class="caption font-green">
									<i class="icon-pin font-green"></i>
									<span class="caption-subject bold uppercase"> Data User</span>
								</div>
							</div>
							<div class="portlet-body form">
								<form role="form" method="post" action="/user/store">
									{!! csrf_field() !!}
									<div class="form-body">
										<div class="form-group form-md-line-input form-md-floating-label">
											<input type="text" class="form-control" id="name" name="name">
											<label for="name">Nama</label>
											<span class="help-block">Nama User</span>
										</div>
										<div class="form-group form-md-line-input form-md-floating-label">
											<input type="text" class="form-control" id="email" name="email">
											<label for="alias">Email</label>
											<span class="help-block">Alamat Email, contoh : nama@email.com</span>
										</div>
										<div class="form-group">
											<label>Role</label>
											<select class="form-control" name="role_id">
												@forelse ($role_options as $role)
													<option value="{{ $role->id }}">{{ $role->name }}</option>
												@empty
													<option>Belum ada data Role</option>
												@endforelse
											</select>
										</div>
										
										<div class="form-group">
											<label>Instansi</label>
											<select class="form-control" name="instansi_id">
												@forelse ($instansi_options as $instansi)
													<option value="{{ $instansi->id }}">{{ $instansi->name }}</option>
												@empty
													<option>Belum ada data Instansi</option>
												@endforelse
											</select>
										</div>
										<div class="form-group form-md-line-input form-md-floating-label">
											<input type="password" class="form-control" id="password" name="password">
											<label for="password">Password</label>
											<span class="help-block">Password</span>
										</div>
									<div class="form-actions noborder">
										<button type="submit" class="btn blue">Submit</button>
										<button type="button" class="btn default">Cancel</button>
									</div>
								</form>
							</div>
						</div>
						<!-- END SAMPLE FORM PORTLET-->
					
				</div>
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