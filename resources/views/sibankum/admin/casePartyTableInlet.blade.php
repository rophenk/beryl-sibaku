<div class="row">
					<div class="col-md-6">
						<!-- BEGIN SAMPLE TABLE PORTLET-->
						<div class="portlet box yellow">
							<div class="portlet-title">
								<div class="caption">
									<i class="fa fa-cogs"></i>Pihak Pertama
								</div>
							</div>
							<div class="portlet-body">
								<p>
									<a class="btn yellow" data-toggle="modal" href="#pihak1">
									Tambah</a>
								</p>
								<div class="modal fade" id="pihak1" tabindex="-1" role="pihak1" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
												<h4 class="modal-title">Tambah Pihak Pertama</h4>
											</div>
											{!! Form::open([
												'route' => ['caseparty.store'], 
												'method' => 'post', 
												'role'=> 'form', 
												'class' => 'form'
											]) !!}

											<div class="modal-body">
												
												<div id="blockui_sample_3_1_element">
													
												    <ul id="link-list">
												        <!-- append new rows -->
												    </ul>

												    <div id="newlink" class="form-inline">
												    	<div class="form-group">
														  <select class="form-control" name="court_party_id" id="court_party_id">
														    @foreach($list_party1 as $list_party1)
														      <option value="{{ $list_party1->id }}">{{ $list_party1->name }}</option>
														    @endforeach
														  </select>
														</div>
												        <div class="form-group">
												            {!! Form::text('name', null, ['placeholder' => 'Nama', 'class' => 'form-control']) !!}
												        </div>
												        <div class="form-group">
												            {!! Form::text('description', null, ['placeholder' => 'Deskripsi', 'class' => 'form-control']) !!}
												        </div>
												        <div class="form-group">
												        	{!! Form::hidden('instansi_id', $user->instansi_id) !!}
												        	{!! Form::hidden('case_id', $case->case_id) !!}
												        	{!! Form::hidden('case_uuid', $case->case_uuid) !!}
												        	{!! Form::hidden('case_number', $case->number) !!}
												        	{!! Form::hidden('side', '1') !!}
												            <button class="btn btn-primary submit new-row" type="button">Add Row</button>
												        </div>
												    </div>

												    <br/><br/>

													
												
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
											 Status
										</th>
										<th>
											 Nama
										</th>
										<th>
											 Keterangan
										</th>
									</tr>
									</thead>
									<tbody>
										@forelse ($party_side1 as $party_side1)
									<tr>
										<td>
											 {{ $party_side1->court_party_name }}
										</td>
										<td>
											 {{ $party_side1->case_party_name }}
										</td>
										<td>
											 {{ $party_side1->description }}
										</td>
									</tr>
									@empty
									<tr>
										<td colspan="3"> Belum ada data </td>
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
					<div class="col-md-6">
						<!-- BEGIN BORDERED TABLE PORTLET-->
						<div class="portlet box red">
							<div class="portlet-title">
								<div class="caption">
									<i class="fa fa-coffee"></i>Pihak Kedua
								</div>
							</div>
							<div class="portlet-body">
								<p>
									<a class="btn red" data-toggle="modal" href="#pihak2">
									Tambah</a>
								</p>
								<div class="modal fade" id="pihak2" tabindex="-1" role="pihak2" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
												<h4 class="modal-title">Tambah Pihak Kedua</h4>
											</div>
											{!! Form::open([
												'route' => ['caseparty.store'], 
												'method' => 'post', 
												'role'=> 'form', 
												'class' => 'form'
											]) !!}

											<div class="modal-body">
												
												<div id="blockui_sample_3_1_element">
													
												    <ul id="link-list2">
												        <!-- append new rows -->
												    </ul>

												    <div id="newlink2" class="form-inline">
												    	<div class="form-group">
														  <select class="form-control" name="court_party_id2" id="court_party_id">
														    @foreach($list_party2 as $list_party2)
														      <option value="{{ $list_party2->id }}">{{ $list_party2->name }}</option>
														    @endforeach
														  </select>
														</div>
												        <div class="form-group">
												            {!! Form::text('name2', null, ['placeholder' => 'Nama', 'class' => 'form-control']) !!}
												        </div>
												        <div class="form-group">
												            {!! Form::text('description2', null, ['placeholder' => 'Deskripsi', 'class' => 'form-control']) !!}
												        </div>
												        <div class="form-group">
												        	{!! Form::hidden('instansi_id2', $user->instansi_id) !!}
												        	{!! Form::hidden('case_id2', $case->case_id) !!}
												        	{!! Form::hidden('case_uuid2', $case->case_uuid) !!}
												        	{!! Form::hidden('case_number2', $case->number) !!}
												        	{!! Form::hidden('side', '2') !!}
												            <button class="btn btn-primary submit new-row2" type="button">Add Row</button>
												        </div>
												    </div>

												    <br/><br/>

													
												
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
											 Status
										</th>
										<th>
											 Nama
										</th>
										<th>
											 Keterangan
										</th>
									</tr>
									</thead>
									<tbody>
										@forelse ($party_side2 as $party_side2)
									<tr>
										<td>
											 {{ $party_side2->court_party_name }}
										</td>
										<td>
											 {{ $party_side2->case_party_name }}
										</td>
										<td>
											 {{ $party_side2->description }}
										</td>
									</tr>
									@empty
									<tr>
										<td colspan="3"> Belum ada data </td>
									</tr>
									@endforelse
									</tbody>
									</table>
								</div>
							</div>
						</div>
						<!-- END BORDERED TABLE PORTLET-->
					</div>
				</div>