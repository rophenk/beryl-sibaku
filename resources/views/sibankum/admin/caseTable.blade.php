@extends('sibankum.admin.master')
@section('title', 'Perkara' )
@section('pagestyle')
{!! Html::style('sbk/admin/assets/global/plugins/select2/select2.css') !!}
{!! Html::style('sbk/admin/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css') !!}
@endsection

@section('breadcrumb')

						<li>
							<a href="/case">Perkara</a>
							<i class="fa fa-angle-right"></i>
						</li>

						<li>
							Perkara Terdaftar
						</li>
@endsection

@section('case-active')
active open
@endsection

@section('case-selected')
<span class="selected"></span>
@endsection
<?php

$addbutton = '<div class="row">
										<div class="col-md-6">
											<div class="btn-group">
												<a href="/case/create">
													<button id="sample_editable_1_new" class="btn green">
													Add New <i class="fa fa-plus"></i>
													</button>
												</a>
											</div>
										</div>
									</div>';


?>
@section('content')
				<br />
				<div class="row">
					<div class="col-md-12">
						<!-- BEGInsiN EXAMPLE TABLE PORTLET-->
						<div class="portlet box grey-cascade">
							<div class="portlet-title">
								<div class="caption">
									<i class="fa fa-globe"></i>Perkara Terdaftar
								</div>
								<div class="tools">
									<a href="javascript:;" class="collapse">
									</a>
									<a href="#portlet-config" data-toggle="modal" class="config">
									</a>
									<a href="javascript:;" class="reload">
									</a>
									<a href="javascript:;" class="remove">
									</a>
								</div>
							</div>
							<div class="portlet-body">
								<div class="table-toolbar">
									<?php echo  $addbutton; ?>
								</div>
								<table class="table table-striped table-bordered table-hover" id="case">
								<thead>
								<tr>
									<th class="table-checkbox">
										<input type="checkbox" class="group-checkable" data-set="#case .checkboxes"/>
									</th>
									<th>
										Jenis Perkara
									</th>
									<th>
										Jenis Pengadilan
									</th>
									<th>
										Unit Kerja
									</th>
									<th>
										 Nomor Perkara
									</th>
									<th>
										 Materi
									</th>
									<th align="right" width="25%">
										 Option
									</th>
								</tr>
								</thead>
								<tbody>
								@forelse ($case as $case)
								<?php
								
								$uuid = $case->uuid;
								$optionbutton = '<a href="/case/edit/'.$uuid.'">
																			<button id="editbuton" class="btn green">
																			Edit <i class="fa fa-edit"></i>
																			</button>
																		</a>
																		<a href="/case/destroy/'.$uuid.'" onclick="if(!confirm(\'Anda yakin akan menghapus data ini ?\')){return false;};">
																			<button id="editbuton" class="btn green">
																			Delete <i class="fa fa-close"></i>
																			</button>
																		</a>';
								
								?>
									<tr class="odd gradeX">
									<td>
										<input type="checkbox" class="checkboxes" value="1"/>
									</td>
									<td>
										 {{ $case->case_type }}
									</td>
									<td>
										 {{ $case->court_type }}
									</td>
									<td>
										 {{ $case->work_unit }}
									</td>
									<td>
										{{ $case->case_number }}
									</td>
									<td>
										<?php
										switch ($case->court_type_id) {
										    case 1:
										        echo $case->principal;
										        break;
										    case 2:
										        echo $case->object;
										        break;
										    case 3:
										        echo $case->proposal;
										        break;
										    case 4:
										        echo $case->proposal;
										        break;
										}
										?>
									</td>
									<td align="right">
										<?php /*echo  $optionbutton;*/ ?>
										<select id="caseoption" onchange="showOptions(this)" class="table-group-action-input form-control input-inline input-small input-sm">
											<option value="">Pilih...</option>
											<option id="detail" value="/case/show/<?php echo $uuid; ?>">Detail</option>
											<option id="edit" value="/case/edit/<?php echo $uuid; ?>">Edit</option>
											<option id="delete" value="/case/destroy/<?php echo $uuid; ?>">Hapus</option>
											<!--<option value="/case/party/<?php echo $uuid; ?>">Tambah Pihak</option>
											<option value="/case/trial-schedule/<?php echo $uuid; ?>">Jadwal Sidang</option>
											<option value="/case/status/<?php echo $uuid; ?>">Status Perkara</option>-->
										</select>

									</td>
								</tr>
								@empty
								<tr class="odd gradeX">
									<td colspan="7">
										<center><strong>Belum ada Data</strong></center>
									</td>
								</tr>
								@endforelse
								
								</tbody>
								</table>
							</div>
						</div>
						<!-- END EXAMPLE TABLE PORTLET-->
					</div>
				</div>
@endsection

@section('pluginscript')
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
});
</script>
@endsection