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