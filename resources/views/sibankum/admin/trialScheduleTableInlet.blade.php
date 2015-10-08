<div class="row">
<div class="col-md-12">
						<!-- BEGIN SAMPLE TABLE PORTLET-->
						<div class="portlet box yellow">
							<div class="portlet-title">
								<div class="caption">
									<i class="fa fa-calendar"></i>Jadwal Sidang
								</div>
							</div>
							<div class="portlet-body">
								<p>
									<a class="btn yellow" data-toggle="modal" href="#trial_schedule">
									Tambah</a>
								</p>
								<div class="modal fade" id="trial_schedule" tabindex="-1" role="trial_schedule" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
												<h4 class="modal-title">Tambah Jadwal Sidang</h4>
											</div>
											{!! Form::open(['route' => ['trialschedule.store'], 'method' => 'post', 'role'=> 'form', 'class' => 'form']) !!}

											<div class="modal-body">
												
												<div id="blockui_sample_3_1_element">
													
												    <ul id="link-list3">
												        <!-- append new rows -->
												    </ul>

												    <div id="newlink3" class="form-inline">
												        <div class="form-group">
												            {!! Form::text('date_start', null, ['placeholder' => 'Tgl Mulai', 'class' => 'form-control']) !!}
												        </div>
												        <div class="form-group">
												            {!! Form::text('date_end', null, ['placeholder' => 'Tgl Akhir', 'class' => 'form-control']) !!}
												        </div>
												        <div class="form-group">
												            {!! Form::text('agenda', null, ['placeholder' => 'Agenda', 'class' => 'form-control']) !!}
												        </div>
												        <div class="form-group">
												        	{!! Form::hidden('instansi_id', $user->instansi_id) !!}
												        	{!! Form::hidden('case_id', $case->case_id) !!}
												        	{!! Form::hidden('case_uuid', $case->case_uuid) !!}
												        	{!! Form::hidden('case_number', $case->number) !!}
												            <button class="btn btn-primary submit new-row3" type="button">Add Row</button>
												        </div>
												    </div>
												    <br/>
												    Format Tanggal : YYYY-MM-DD hh:ii:ss
													<br/>
													Contoh : 2015-09-27 10:00:00
												
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
											 Tanggal dan Jam Mulai
										</th>
										<th>
											 Tanggal dan Jam Berakhir
										</th>
										<th>
											 Agenda
										</th>
									</tr>
									</thead>
									<tbody>
										@forelse ($trial_schedule as $trial_schedule)
									<tr>
										<td>
											 {{ $trial_schedule->date_start }}
										</td>
										<td>
											 {{ $trial_schedule->date_end }}
										</td>
										<td>
											 {{ $trial_schedule->agenda }}
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