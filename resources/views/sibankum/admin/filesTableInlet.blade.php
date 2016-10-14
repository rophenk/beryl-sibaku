<div class="row">
<div class="col-md-12">
						<!-- BEGIN SAMPLE TABLE PORTLET-->
						<div class="portlet box yellow">
							<div class="portlet-title">
								<div class="caption">
									<i class="fa fa-paperclip"></i>Berkas
								</div>
							</div>
							<div class="portlet-body">
								<p>
									<a class="btn yellow" data-toggle="modal" href="#files">
									Tambah</a>
								</p>
								<div class="modal fade" id="files" tabindex="-1" role="files" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
												<h4 class="modal-title">Tambah Berkas</h4>
											</div>
											{!! Form::open([
												'route'  => ['file.store'], 
												'method' => 'post', 
												'role'	 => 'form', 
												'class'  => 'form',
												'files'=>true
											]) !!}

											<div class="modal-body">
												
												<div id="blockui_sample_3_1_element">
													
												    <ul id="link-list5">
												        <!-- append new rows -->
												    </ul>

												    <div class="form-inline">
												        <div class="form-group">
  															{!! Form::file('file','',array('id'=>'','class'=>'form-control')) !!}
												        </div>
												        <hr />
												        <div class="form-group">
												            {!! Form::text('name', null, ['placeholder' => 'Nama', 'class' => 'form-control']) !!}
												        </div>
												        <hr />
												        <div class="form-group">
												            {!! Form::textarea('description', null, ['placeholder' => 'Deskripsi', 'class' => 'form-control']) !!}
												        </div>
												        <div class="form-group">
												        	{!! Form::hidden('instansi_id', $user->instansi_id) !!}
												        	{!! Form::hidden('case_id', $case->case_id) !!}
												        	{!! Form::hidden('case_uuid', $case->case_uuid) !!}
												        	{!! Form::hidden('case_number', $case->number) !!}
												        </div>
												    </div>
												    <br/>
												
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn default" data-dismiss="modal">Close</button>
												<button type="submit" class="btn blue">Upload</button>
											</div>
											{!! Form::close() !!}
										</div>
										<!-- /.modal-content -->
									</div>
									<!-- /.modal-dialog -->
								</div>
								<div class="table-scrollable">
									<table class="table table-hover">
									<thead>
									<tr>
										<th>
											 Nama Berkas
										</th>
										<th>
											 Keterangan
										</th>
										<th>
											 Unduh
										</th>
										<th>
											 Tindakan
										</th>
									</tr>
									</thead>
									<tbody>
										@forelse ($case_files as $case_files)
									<tr>
										<td>
											 {{ $case_files->name}}
										</td>
										<td>
											 {{ $case_files->description}}
										</td>
										<td>
											 <a href="{{ $case_files->url }}" target="_blank" class="btn blue">UNDUH BERKAS</a>
										</td>
										<td>
											 <a href="/file/destroy/{{ $case_files->uuid }}" class="btn red" onclick="return confirmDelete();">Hapus</a>
										</td>
									</tr>
									@empty
									<tr>
										<td> Belum ada data </td>
										<td>&nbsp; </td>
										<td>&nbsp; </td>
									</tr>
									@endforelse
									</tr>
									</tbody>
									</table>
								</div>
							</div>
						</div>
						<!-- END SAMPLE TABLE PORTLET-->
					</div>
</div>