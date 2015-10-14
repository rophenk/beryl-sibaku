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
							<a href="">Detail</a>
						</li>
@endsection
@section('case-active')
active open
@endsection

@section('case-selected')
<span class="selected"></span>
@endsection

@section('content')
<div class="row">
					<div class="col-md-12">
						<!-- BEGIN Portlet PORTLET-->
						<div class="portlet box purple">
							<div class="portlet-title">
								<div class="caption">
									<i class="fa fa-gift"></i>Detail Perkara
								</div>
								<div class="tools">
									<a href="javascript:;" class="collapse">
									</a>
									<a href="#portlet-config" data-toggle="modal" class="config">
									</a>
									<a href="javascript:;" class="reload">
									</a>
									<a href="javascript:;" class="fullscreen">
									</a>
									<a href="javascript:;" class="remove">
									</a>
								</div>
							</div>
							<div class="portlet-body">
								<p>
									<h4>Jenis Pengadilan : <strong>{{ $case->court_name }}</strong></h4>
									<h4>Nomor : {{ $case->number }}</h4>
									<h4>Nomor Perkara : {{ $case->case_number }}</h4>
									
										<?php
										if($case->court_type_id === 1) {

											$content = '<h4>Pokok Perkara</h4><hr /><p>'.$case->principal.'</p>';

										}elseif($case->court_type_id === 2) {

											$content = '<h4>Obyek Perkara</h4><hr /><p>'.$case->object.'</p>';

										}if($case->court_type_id === 3) {

											$content = '<h4>Pokok Permohonan</h4><hr /><p>'.$case->proposal.'</p>';

										}if($case->court_type_id === 4) {

											$content = '<h4>Pokok Permohonan</h4><hr /><p>'.$case->proposal.'</p>';

										}
										?>
										<?php echo $content; ?>
									<hr />
									<p><strong>File Dokumen Perkara :</strong> <a href="{{ $case->address }}" target="_blank">{{ $case->address }} </a></p>
								</p>
								<div class="row">
									<div class="col-md-12">
										<div class="portlet box blue tabbable">
											<div class="portlet-title">
												<div class="caption">
													<i class="fa fa-gift"></i>Informasi Perkara
												</div>
												<ul class="nav nav-tabs">
													<li class="active">
														<a href="#pihak" data-toggle="tab">
														Pihak </a>
													</li>
													<li>
														<a href="#jadwal_sidang" data-toggle="tab">
														Jadwal Sidang </a>
													</li>
													<li>
														<a href="#status_perkara" data-toggle="tab">
														Status Perkara </a>
													</li>
												</ul>
											</div>
											<div class="portlet-body">
												<div class="tab-content">
													<div class="tab-pane" id="status_perkara">
														@include('sibankum.admin.caseStatusTableInlet')
													</div>
													<div class="tab-pane" id="jadwal_sidang">
														@include('sibankum.admin.trialScheduleTableInlet')
													</div>
													<div class="tab-pane active" id="pihak">
														@include('sibankum.admin.casePartyTableInlet')
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END Portlet PORTLET-->
					</div>
				</div>
@endsection
@section('pluginscript')
{!! Html::script('sbk/admin/assets/admin/pages/scripts/ui-blockui.js') !!}
{!! Html::script('sbk/admin/assets/global/plugins/select2/select2.min.js') !!}
{!! Html::script('sbk/admin/assets/global/plugins/datatables/media/js/jquery.dataTables.min.js') !!}
{!! Html::script('sbk/admin/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js') !!}
@endsection

@section('pagescript')
{!! Html::script('sbk/admin/assets/admin/pages/scripts/table-managed.js') !!}
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {       
   Metronic.init(); // init metronic core components
   Layout.init(); // init current layout
   Demo.init(); // init demo features
   TableManaged.init();
   UIBlockUI.init();
});
</script>
<script>
var count = 0;

$(document).on('click', '.new-row', function() {

    count++;

    var name = $('#newlink input[name=name]').val();
    var description = $('#newlink input[name=description]').val();
    var court_party_id = $('#newlink select[name=court_party_id]').val();

    if ($('input[name=name]').val().length > 2 && $('input[name=description]').val().length > 2) {

        $('<li class="not-saved">' +
        	 name + ' : ' + description +
            '<input type="hidden" name="rows[' + count + '][name]" value="' + name + '">' +
            '<input type="hidden" name="rows[' + count + '][description]" value="' + description + '">' +
            '<input type="hidden" name="rows[' + count + '][court_party_id]" value="' + court_party_id + '">' +
            '</li>').appendTo('#link-list').hide().fadeIn(280);

        $('input[name=name]').val('');
        $('input[name=description]').val('');
        $('select[name=court_party_id]').val('');

    } else {

        console.log('At least 3 characters for each field required! For Pihak 1');
        console.log('Name :' + $('input[name=name]').val());
        console.log('Description :' + $('input[name=description]').val());

    }

});
</script>
<script>
var count = 0;

$(document).on('click', '.new-row2', function() {

    count++;

    var name2 = $('#newlink2 input[name=name2]').val();
    var description2 = $('#newlink2 input[name=description2]').val();
    var court_party_id2 = $('#newlink2 select[name=court_party_id2]').val();

    if ($('input[name=name2]').val().length > 2 && $('input[name=description2]').val().length > 2) {

        $('<li class="not-saved">' +
        	 name2 + ' : ' + description2 +
            '<input type="hidden" name="rows[' + count + '][name]" value="' + name2 + '">' +
            '<input type="hidden" name="rows[' + count + '][description]" value="' + description2 + '">' +
            '<input type="hidden" name="rows[' + count + '][court_party_id]" value="' + court_party_id2 + '">' +
            '</li>').appendTo('#link-list2').hide().fadeIn(280);

        $('input[name=name2]').val('');
        $('input[name=description2]').val('');
        $('select[name=court_party_id2]').val('');
        console.log('Name : ' + name2);
    } else {

        console.log('At least 3 characters for each field required!');

    }

});
</script>
<script>
var count = 0;

$(document).on('click', '.new-row3', function() {

    count++;

    var date_start = $('#newlink3 input[name=date_start]').val();
    var date_end = $('#newlink3 input[name=date_end]').val();
    var agenda = $('#newlink3 input[name=agenda]').val();

    if ($('input[name=date_start]').val().length > 2 && $('input[name=date_end]').val().length > 2) {

        $('<li class="not-saved">' +
        	 date_start + ' to ' + date_end + ' : ' + agenda +
            '<input type="hidden" name="rows[' + count + '][date_start]" value="' + date_start + '">' +
            '<input type="hidden" name="rows[' + count + '][agenda]" value="' + agenda + '">' +
            '<input type="hidden" name="rows[' + count + '][date_end]" value="' + date_end + '">' +
            '</li>').appendTo('#link-list3').hide().fadeIn(280);

        $('input[name=date_start]').val('');
        $('input[name=date_end]').val('');
        $('input[name=agenda]').val('');
        console.log('Date Start : ' + date_start);
    } else {

        console.log('At least 3 characters for each field required!');

    }

});
</script>
<script>
var count = 0;

$(document).on('click', '.new-row4', function() {

    count++;

    var court_level_id = $('#newlink4 select[name=court_level_id]').val();
    var status = $('#newlink4 select[name=status]').val();
    var description = $('#newlink4 input[name=description_status]').val();
    var verdict = $('#newlink4 input[name=verdict]').val();

        $('<li class="not-saved">' +
        	 court_level_id + ' = ' + status + ' : ' + verdict +
            '<input type="hidden" name="rows[' + count + '][court_level_id]" value="' + court_level_id + '">' +
            '<input type="hidden" name="rows[' + count + '][description_status]" value="' + description + '">' +
            '<input type="hidden" name="rows[' + count + '][verdict]" value="' + verdict + '">' +
            '<input type="hidden" name="rows[' + count + '][status]" value="' + status + '">' +
            '</li>').appendTo('#link-list4').hide().fadeIn(280);

        $('input[name=description_status]').val('');
        $('input[name=verdict]').val('');
        $('select[name=court_level_id]').val('');
        $('select[name=status]').val('');

        console.log('status : ' + status);


});
</script>
@endsection