@extends('sibankum.admin.master')
@section('title', 'Jenis Pengadilan' )
@section('pagestyle')
{!! Html::style('sbk/admin/assets/global/plugins/select2/select2.css') !!}
{!! Html::style('sbk/admin/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css') !!}
@endsection

@section('breadcrumb')

						<li>
							<a href="/court_type">Jenis Pengadilan</a>
							<i class="fa fa-angle-right"></i>
						</li>

						<li>
							Jenis Pengadilan Terdaftar
						</li>
@endsection

@section('settings-active')
active open
@endsection

@section('settings-selected')
<span class="selected"></span>
@endsection
<?php

$addbutton = '<div class="row">
										<div class="col-md-6">
											<div class="btn-group">
												<a href="/court_type/create">
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
									<i class="fa fa-globe"></i>Jenis Pengadilan Terdaftar
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
								<table class="table table-striped table-bordered table-hover" id="court_type">
								<thead>
								<tr>
									<th class="table-checkbox">
										<input type="checkbox" class="group-checkable" data-set="#court_type .checkboxes"/>
									</th>

									<th>
										 Jenis Perkara
									</th>
									<th>
										 Nama Jenis Pengadilan
									</th>
									<th>
										 Alias
									</th>
									<th align="right" width="25%">
										 Option
									</th>
								</tr>
								</thead>
								<tbody>
								@forelse ($court_type as $court_type)
								<?php
								
								$uuid = $court_type->uuid;
								$optionbutton = '<a href="/court_type/edit/'.$uuid.'">
																			<button id="editbuton" class="btn green">
																			Edit <i class="fa fa-edit"></i>
																			</button>
																		</a>
																		<a href="/court_type/destroy/'.$uuid.'" onclick="if(!confirm(\'Anda yakin akan menghapus data ini ?\')){return false;};">
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
										 {{ $court_type->case_type->name }}
									</td>
									<td>
										 {{ $court_type->name }}
									</td>
									<td>
										{{ $court_type->alias }}
									</td>
									<td align="right">
										<?php echo  $optionbutton; ?>
									</td>
								</tr>
								@empty
								<tr class="odd gradeX">
									<td colspan="6">
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