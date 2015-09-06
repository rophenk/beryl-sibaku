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
@forelse ($case as $case)
@section('content')
<div class="row">
					<div class="col-md-12">
						<!-- BEGIN Portlet PORTLET-->
						<div class="portlet box red-sunglo">
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
													<li>
														<a href="#portlet_tab_3" data-toggle="tab">
														Pihak </a>
													</li>
													<li>
														<a href="#portlet_tab_2" data-toggle="tab">
														Jadwal Sidang </a>
													</li>
													<li class="active">
														<a href="#portlet_tab_1" data-toggle="tab">
														Status Perkara </a>
													</li>
												</ul>
											</div>
											<div class="portlet-body">
												<div class="tab-content">
													<div class="tab-pane active" id="portlet_tab_1">
														alala
													</div>
													<div class="tab-pane" id="portlet_tab_2">
														<p>
															 Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo.
														</p>
													</div>
													<div class="tab-pane" id="portlet_tab_3">
														<p>
															 Ut wisi enim ad btn-smm veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
														</p>
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
@empty
@endforelse
@endsection