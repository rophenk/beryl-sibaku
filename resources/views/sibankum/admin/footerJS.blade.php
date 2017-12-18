<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="sbk/admin/assets/global/plugins/respond.min.js"></script>
<script src="sbk/admin/assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<!--{!! Html::script('sbk/admin/assets/global/plugins/jquery.min.js') !!}-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
{!! Html::script('sbk/admin/assets/global/plugins/jquery-migrate.min.js') !!}
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
{!! Html::script('sbk/admin/assets/global/plugins/jquery-ui/jquery-ui.min.js') !!}
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<!--{!! Html::script('sbk/admin/assets/global/plugins/bootstrap/js/bootstrap.min.js') !!}-->
{!! Html::script('sbk/admin/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') !!}
{!! Html::script('sbk/admin/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') !!}
{!! Html::script('sbk/admin/assets/global/plugins/jquery.blockui.min.js') !!}
{!! Html::script('sbk/admin/assets/global/plugins/jquery.cokie.min.js') !!}
{!! Html::script('sbk/admin/assets/global/plugins/uniform/jquery.uniform.min.js') !!}
{!! Html::script('sbk/admin/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') !!}
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
{!! Html::script('sbk/admin/assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js') !!}
{!! Html::script('sbk/admin/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js') !!}
{!! Html::script('sbk/admin/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js') !!}
{!! Html::script('sbk/admin/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js') !!}
{!! Html::script('sbk/admin/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js') !!}
{!! Html::script('sbk/admin/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js') !!}
{!! Html::script('sbk/admin/assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js') !!}
{!! Html::script('sbk/admin/assets/global/plugins/flot/jquery.flot.min.js') !!}
{!! Html::script('sbk/admin/assets/global/plugins/flot/jquery.flot.resize.min.js') !!}
{!! Html::script('sbk/admin/assets/global/plugins/flot/jquery.flot.categories.min.js') !!}
{!! Html::script('sbk/admin/assets/global/plugins/jquery.pulsate.min.js') !!}
{!! Html::script('sbk/admin/assets/global/plugins/bootstrap-daterangepicker/moment.min.js') !!}
{!! Html::script('sbk/admin/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.js') !!}
{!! Html::script('sbk/admin/assets/global/plugins/morris/morris.min.js') !!}
{!! Html::script('sbk/admin/assets/global/plugins/morris/raphael-min.js') !!}
{!! Html::script('sbk/admin/assets/global/plugins/counterup/jquery.waypoints.min.js') !!}
{!! Html::script('sbk/admin/assets/global/plugins/counterup/jquery.counterup.min.js') !!}
{!! Html::script('sbk/admin/assets/global/plugins/amcharts/amcharts/amcharts.js') !!}
{!! Html::script('sbk/admin/assets/global/plugins/amcharts/amcharts/serial.js') !!}
<!-- IMPORTANT! fullcalendar depends on jquery-ui.min.js for drag & drop support -->
{!! Html::script('sbk/admin/assets/global/plugins/fullcalendar/fullcalendar.min.js') !!}
{!! Html::script('sbk/admin/assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js') !!}
{!! Html::script('sbk/admin/assets/global/plugins/jquery.sparkline.min.js') !!}
<!-- END PAGE LEVEL PLUGINS -->
{!! Html::script('sbk/admin/assets/global/scripts/app.min.js') !!}
<!-- BEGIN PAGE LEVEL SCRIPTS -->
{!! Html::script('sbk/admin/assets/global/scripts/metronic.js') !!}
{!! Html::script('sbk/admin/assets/admin/layout2/scripts/layout.js') !!}
{!! Html::script('sbk/admin/assets/admin/layout2/scripts/quick-sidebar.js') !!}
{!! Html::script('sbk/admin/assets/admin/layout2/scripts/demo.js') !!}
<!-- {!! Html::script('sbk/admin/assets/admin/pages/scripts/index.js') !!} -->
{!! Html::script('sbk/admin/assets/admin/pages/scripts/tasks.js') !!}
<script type="text/javascript">
	$('#case_type_id').change(function()
		{
			console.log('case_type selected');
		    $.get('/court_type/list_options/' + this.value + '', function(court_types)
		    {
		        var $state = $('#court_type_id');

		        $state.find('option').remove().end();

		        $.each(court_types, function(index, court_type) {
		            $state.append('<option value="' + court_type.id + '">' + court_type.name + '</option>');
		        });
		    });
		});
</script>