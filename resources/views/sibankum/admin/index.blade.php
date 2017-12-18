@extends('sibankum.admin.master')
@section('title', 'Dashboard' )

@section('pagestyle')

@endsection

@section('breadcrumb')

						<li>
							<a href="/dashboard">Dashboard</a>
						</li>
@endsection

@section('content')
					<div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat2 ">
                                <div class="display">
                                    <div class="number">
                                        <h3 class="font-green-sharp">
                                            <span data-counter="counterup" data-value="{{ $totalCase }}">0</span>
                                            <small class="font-green-sharp"></small>
                                        </h3>
                                        <small>TOTAL PERKARA</small>
                                    </div>
                                    <div class="icon">
                                        <i class="icon-briefcase"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat2 ">
                                <div class="display">
                                    <div class="number">
                                        <h3 class="font-red-haze">
                                            <span data-counter="counterup" data-value="{{ $totalStatus }}">0</span>
                                        </h3>
                                        <small>SUDAH PUTUS</small>
                                    </div>
                                    <div class="icon">
                                        <i class="icon-check"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat2 ">
                                <div class="display">
                                    <div class="number">
                                        <h3 class="font-blue-sharp">
                                            <span data-counter="counterup" data-value="{{ $totalFiles }}">0</span>
                                        </h3>
                                        <small>BERKAS</small>
                                    </div>
                                    <div class="icon">
                                        <i class="icon-docs"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat2 ">
                                <div class="display">
                                    <div class="number">
                                        <h3 class="font-purple-soft">
                                            <span data-counter="counterup" data-value="{{ $totalParty }}">0</span>
                                        </h3>
                                        <small>PIHAK</small>
                                    </div>
                                    <div class="icon">
                                        <i class="icon-user"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="portlet light ">
                                <div class="portlet-title">
                                    <div class="caption ">
                                        <span class="caption-subject font-dark bold uppercase">Perkara</span>
                                        <span class="caption-helper">Jumlah per tahun</span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div id="dashboard_amchart_3" class="CSSAnimationChart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="portlet light ">
                                <div class="portlet-title tabbable-line">
                                    <div class="caption">
                                        <i class="icon-bubbles font-dark hide"></i>
                                        <span class="caption-subject font-dark bold uppercase">Perkara Terbaru</span>
                                    </div>
                                    <ul class="nav nav-tabs">
                                        <li class="active">
                                            <a href="#portlet_comments_1" data-toggle="tab">  </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="portlet-body">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="portlet_comments_1">
                                            <!-- BEGIN: Comments -->
                                            <div class="mt-comments">
                                            	@forelse($latestCase as $case)
                                                <div class="mt-comment">
                                                    <div class="mt-comment-body">
                                                        <div class="mt-comment-info">
                                                            <span class="mt-comment-author">
                                                            	{{ $case->work_unit }}
															</span>
                                                            <span class="mt-comment-date">
                                                            	{{ date("d/m/Y", strtotime($case->date)) }}
                                                            </span>
                                                        </div>
                                                        <div class="mt-comment-text"> 
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
                                                        </div>
                                                        <div class="mt-comment-details">
                                                            <span class="mt-comment-status mt-comment-status-pending">{{ $case->case_type }}</span>
                                                            <ul class="mt-comment-actions">
                                                                <li>
                                                                    <a href="/case/show/{{ $case->uuid }}">DETIL</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                @empty
                                                @endforelse
                                            </div>
                                            <!-- END: Comments -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="portlet light ">
                                <div class="portlet-title tabbable-line">
                                    <div class="caption">
                                        <i class=" icon-social-twitter font-dark hide"></i>
                                        <span class="caption-subject font-dark bold uppercase">Berkas Terbaru</span>
                                    </div>
                                    <ul class="nav nav-tabs">
                                        <li class="active">
                                            <a href="#tab_actions_pending" data-toggle="tab"> </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="portlet-body">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab_actions_pending">
                                            <!-- BEGIN: Actions -->
                                            <div class="mt-actions">
                                            	@forelse($latestFile as $file)
                                                <div class="mt-action">
                                                    <div class="mt-action-body">
                                                        <div class="mt-action-row">
                                                            <div class="mt-action-info ">
                                                                <div class="mt-action-icon ">
                                                                    <i class="icon-paper-clip"></i>
                                                                </div>
                                                                <div class="mt-action-details ">
                                                                    <span class="mt-action-author">{{ $file->name }}</span>
                                                                    <p class="mt-action-desc">{{ $file->description }}</p>
                                                                    <p>{{ $file->filename }}</p>
                                                                </div>
                                                            </div>
                                                            <div class="mt-action-buttons ">
                                                                <div class="btn-group btn-group-circle">
                                                                    <a href="/case/show/{{ $file->case_uuid }}" class="btn btn-outline green btn-sm">Detil</a>
                                                                    <a href="{{ $file->url }}" class="btn btn-outline blue btn-sm">Unduh</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @empty
                                                @endforelse
                                            </div>
                                            <!-- END: Actions -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection

@section('pagescript')
<script type="text/javascript">
var Dashboard = function() {
	return {
		initAmChart3: function() {
            if (typeof(AmCharts) === 'undefined' || $('#dashboard_amchart_3').size() === 0) {
                return;
            }

            var chart = AmCharts.makeChart("dashboard_amchart_3", {
                "type": "serial",
                "addClassNames": true,
                "theme": "light",
                "path": "../assets/global/plugins/amcharts/ammap/images/",
                "autoMargins": false,
                "marginLeft": 30,
                "marginRight": 8,
                "marginTop": 10,
                "marginBottom": 26,
                "balloon": {
                    "adjustBorderColor": false,
                    "horizontalPadding": 10,
                    "verticalPadding": 8,
                    "color": "#ffffff"
                },

                "dataProvider": [{
                    "year": 2015,
                    "income": {{ $case2015 }}
                }, {
                    "year": 2016,
                    "income": {{ $case2016 }}
                }, {
                    "year": 2017,
                    "income": {{ $case2017 }}
                }],
                "valueAxes": [{
                    "axisAlpha": 0,
                    "position": "left"
                }],
                "startDuration": 1,
                "graphs": [{
                    "alphaField": "alpha",
                    "balloonText": "<span style='font-size:12px;'>[[title]] pada [[category]]:<br><span style='font-size:20px;'>[[value]]</span> [[additional]]</span>",
                    "fillAlphas": 1,
                    "title": "Perkara",
                    "type": "column",
                    "valueField": "income",
                    "dashLengthField": "dashLengthColumn"
                }],
                "categoryField": "year",
                "categoryAxis": {
                    "gridPosition": "start",
                    "axisAlpha": 0,
                    "tickLength": 0
                },
                "export": {
                    "enabled": false
                }
            });
        },

        init: function() {
            this.initAmChart3();
        }
	};
}();

if (App.isAngularJsApp() === false) {
    jQuery(document).ready(function() {
        Dashboard.init(); // init metronic core componets
    });
}

</script>
@endsection