<div class="row">
<div class="col-md-12">
						<!-- BEGIN SAMPLE TABLE PORTLET-->
						<div class="portlet box yellow">
							<div class="portlet-title">
								<div class="caption">
									<i class="fa fa-bank"></i>Status Perkara
								</div>
							</div>
							<div class="portlet-body">
								<p>
									<a class="btn yellow" data-toggle="modal" href="#case_status">
									Tambah</a>
								</p>
								<div class="modal fade" id="case_status" tabindex="-1" role="case_status" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
												<h4 class="modal-title">Tambah Status Perkara</h4>
											</div>
											{!! Form::open(['route' => ['casestatus.store'], 'method' => 'post', 'role'=> 'form', 'class' => 'form']) !!}

											<div class="modal-body">
												
												<div id="blockui_sample_3_1_element">
													
												    <ul id="link-list4">
												        <!-- append new rows -->
												    </ul>

												    <div id="newlink4" class="form-inline">
												    	<div class="form-group">
														  <select class="form-control" name="court_level_id" id="court_level_id">
														    @foreach($list_court_level as $list_court_level)
														      <option value="{{ $list_court_level->id }}">{{ $list_court_level->name }}</option>
														    @endforeach
														  </select>
														</div>
												        <div class="form-group">
												        	<select class="form-control" name="status" id="status">
												        		<option value="DALAM PROSES">DALAM PROSES</option>
												        		<option value="SUDAH PUTUS">SUDAH PUTUS</option>
												        	</select>
												        </div>
												        <div class="form-group">
												            {!! Form::text('verdict', null, ['placeholder' => 'Isi Putusan', 'class' => 'form-control']) !!}
												        </div>
												        <div class="form-group">
												            {!! Form::text('description_status', null, ['placeholder' => 'Keterangan', 'class' => 'form-control']) !!}
												        </div>
												        <div class="form-group">
												        	{!! Form::hidden('instansi_id', $user->instansi_id) !!}
												        	{!! Form::hidden('case_id', $case->case_id) !!}
												        	{!! Form::hidden('case_uuid', $case->case_uuid) !!}
												        	{!! Form::hidden('case_number', $case->number) !!}
												            <button class="btn btn-primary submit new-row4" type="button">Add Row</button>
												        </div>
												    </div>
												    <br/>
												    
													<br/>
												
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn default" data-dismiss="modal">Close</button>
												<button type="submit" class="btn blue">Save changes</button>
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
											 Tingkatan Pengadilan
										</th>
										<th>
											 Status Perkara
										</th>
										<th>
											 Isi Putusan
										</th>
										<th>
											 Keterangan
										</th>
									</tr>
									</thead>
									<tbody>
										@forelse ($case_status as $case_status)
									<tr>
										<td>
											 {{ $case_status->name }}
										</td>
										<td>
											 {{ $case_status->status }}
										</td>
										<td>
											 {{ $case_status->verdict }}
										</td>
										<td>
											 {{ $case_status->description }}
										</td>
									</tr>
									@empty
									<tr>
										<td> Belum ada data </td>
										<td>&nbsp; </td>
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