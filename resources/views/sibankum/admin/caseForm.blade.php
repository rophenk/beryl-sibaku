@extends('sibankum.admin.master')
@section('title', 'Perkara' )
@section('pagestyle')
{!! Html::style('sbk/admin/assets/global/css/components-md.css') !!}
{!! Html::style('sbk/admin/assets/global/css/plugins-md.css') !!}
@endsection

@section('breadcrumb')

						<li>
							<a href="/case">Perkara</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="">Form</a>
						</li>
@endsection

@section('case-active')
active open
@endsection

@section('case-selected')
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
									<span class="caption-subject bold uppercase"> Data Perkara</span>
								</div>
							</div>
							<div class="portlet-body form">
								<form role="form" method="post" action="/case/store">
									{!! csrf_field() !!}
									<div class="form-body">
										<div class="form-group">
											<label>Jenis Perkara</label>
											<select class="form-control" id="case_type_id" name="case_type_id">
												<option>=== PILIH JENIS PERKARA ===</option>
												@forelse ($case_type_options as $case_type)
												<option value="{{ $case_type->id }}">{{ $case_type->name }}</option>
												@empty
												<option>Belum ada Jenis Perkara</option>
												@endforelse
											</select>
										</div>
										<div class="form-group">
											<label>Jenis Pengadilan</label>
											<select class="form-control" id="court_type_id" name="court_type_id">
												<option>=== PILIH JENIS PENGADILAN ===</option>
												@forelse ($court_type_options as $court_type)
												<!--<option value="{{ $court_type->id }}">{{ $court_type->name }}</option>-->
												@empty
												<option>Belum ada data Jenis Pengadilan</option>
												@endforelse
											</select>
										</div>
										
										<div class="form-group form-md-line-input form-md-floating-label">
											<input type="text" class="form-control" id="number" name="number">
											<label for="number">Nomor</label>
											<span class="help-block">Nomor urut, contoh : 91</span>
										</div>
										<div class="form-group form-md-line-input form-md-floating-label">
											<input type="text" class="form-control" id="work_unit" name="work_unit">
											<label for="work_unit">Unit Kerja</label>
											<span class="help-block">Unit Kerja, contoh : </span>
										</div>
										<div class="form-group form-md-line-input form-md-floating-label">
											<input type="text" class="form-control" id="case_number" name="case_number">
											<label for="case_number">Nomor Perkara</label>
											<span class="help-block">Nomor Perkara, contoh : </span>
										</div>
										<div id="principal" class="form-group form-md-line-input form-md-floating-label">
											<input type="text" class="form-control" id="principal" name="principal">
											<label for="principal">Pokok Perkara</label>
											<span class="help-block">Pokok Perkara, contoh : </span>
										</div>
										<div id="object" class="form-group form-md-line-input form-md-floating-label">
											<input type="text" class="form-control" id="object" name="object">
											<label for="object">Objek Perkara</label>
											<span class="help-block">Objek Perkara, contoh : </span>
										</div>
										<div id="proposal1" class="form-group form-md-line-input form-md-floating-label">
											<input type="text" class="form-control" id="object" name="proposal">
											<label for="proposal">Pokok Permohonan</label>
											<span class="help-block">Pokok Permohonan, contoh : </span>
										</div>

										<div id="proposal2" class="form-group form-md-line-input form-md-floating-label">
											<input type="text" class="form-control" id="object" name="proposal">
											<label for="proposal">Pokok Permohonan</label>
											<span class="help-block">Pokok Permohonan, contoh : </span>
										</div>
										<div class="form-group form-md-line-input form-md-floating-label">
											<input type="text" class="form-control" id="address" name="address">
											<label for="alias">Address</label>
											<span class="help-block">Alamat File, contoh : http://sibankum.pertanian.go.id/file/perkara-1.pdf</span>
										</div>
										<div class="form-group form-md-line-input form-md-floating-label">
											<a href="/file" class="btn green" target="_blank">Upload File</a>
											<label for="upload">Upload File terlebih dahulu, lalu salin tautan (copy paste) lokasi file pada kolom : <strong>Address</strong></label>
										</div>
									<div class="form-actions noborder">
										<input type="hidden" name="instansi_id" value="{{ $user->instansi_id }}">
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
<script>
$(function() {
    $('#principal').hide();
    $('#object').hide();
    $('#proposal1').hide();
    $('#proposal2').hide();  
    $('#court_type_id').change(function(){
        if($('#court_type_id').val() == '1') {
            $('#principal').show(); 
        } else {
            $('#principal').hide(); 
        }
        if($('#court_type_id').val() == '2') {
            $('#object').show(); 
        } else {
            $('#object').hide(); 
        }
        if($('#court_type_id').val() == '3') {
            $('#proposal1').show(); 
        } else {
            $('#proposal1').hide(); 
        }
        if($('#court_type_id').val() == '4') {
            $('#proposal2').show(); 
        } else {
            $('#proposal2').hide(); 
        }
        if($('#court_type_id').val() == '5') {
            $('#object').show(); 
        } else {
            $('#object').hide(); 
        }
        if($('#court_type_id').val() == '6') {
            $('#object').show(); 
        } else {
            $('#object').hide(); 
        }
        if($('#court_type_id').val() == '7') {
            $('#object').show(); 
        } else {
            $('#object').hide(); 
        }
        if($('#court_type_id').val() == '8') {
            $('#object').show(); 
        } else {
            $('#object').hide(); 
        }
        if($('#court_type_id').val() == '9') {
            $('#object').show(); 
        } else {
            $('#object').hide(); 
        }
        if($('#court_type_id').val() == '10') {
            $('#object').show(); 
        } else {
            $('#object').hide(); 
        }
        if($('#court_type_id').val() == '11') {
            $('#object').show(); 
        } else {
            $('#object').hide(); 
        }
        if($('#court_type_id').val() == '12') {
            $('#object').show(); 
        } else {
            $('#object').hide(); 
        }
        if($('#court_type_id').val() == '13') {
            $('#object').show(); 
        } else {
            $('#object').hide(); 
        }
        if($('#court_type_id').val() == '14') {
            $('#object').show(); 
        } else {
            $('#object').hide(); 
        }
        if($('#court_type_id').val() == '15') {
            $('#object').show(); 
        } else {
            $('#object').hide(); 
        }
    });
});
</script>
@endsection