@extends('sibankum.admin.master')
@section('title', 'Grafik Statistik Perkara' )

@section('pagestyle')

@endsection

@section('breadcrumb')

						<li>
							<a href="/case_statistics">Grafik Statistik Perkara</a>
						</li>
@endsection

@section('statistic-active')
active open
@endsection

@section('content')
					<div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="portlet light ">
                                <div class="portlet-title">
                                    <div class="caption ">
                                        <span class="caption-subject font-dark bold uppercase">Perkara</span>
                                        <span class="caption-helper">{{ $title }}</span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                	@if($countData > 0)
                                    <div id="dashboard_amchart_3" class="CSSAnimationChart"></div>
                                    @else
                                    <h2> Tidak Ada Data</h2>
                                    @endif
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

                "dataProvider": [
                @forelse($data as $item)
                {
                    "year": {{ $item->xAxis }},
                    "income": {{ $item->total_case }}
                },
                @empty
                @endforelse
                ],
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