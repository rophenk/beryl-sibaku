@extends('sibankum.admin.master')
@section('title', 'Statistik Perkara' )

@section('pagestyle')

@endsection

@section('breadcrumb')

						<li>
							<a href="/case_statistics">Statistik Perkara</a>
						</li>
@endsection

@section('statistic-active')
active open
@endsection

@section('content')
<!-- BEGIN ACCORDION PORTLET-->
                            <div class="portlet box yellow">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-gift"></i>Statistik Perkara </div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse"> </a>
                                        <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                        <a href="javascript:;" class="reload"> </a>
                                        <a href="javascript:;" class="remove"> </a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="panel-group accordion" id="accordion3">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse" data-parent="#accordion3" href="#collapse_3_1"> Data Per Tahun </a>
                                                </h4>
                                            </div>
                                            <div id="collapse_3_1" class="panel-collapse in">
                                                <div class="panel-body">
                                                    <div class="portlet light ">
						                                <div class="portlet-title">
						                                    <div class="caption font-red-sunglo">
						                                        <i class="icon-calendar font-red-sunglo"></i>
						                                        <span class="caption-subject bold uppercase"> Pilih Tahun </span>
						                                    </div>
						                                </div>
						                                <div class="portlet-body form">
						                                    <form role="form" method="post" action="/case_statistics_yearly">
						                                    	{!! csrf_field() !!}
						                                        <div class="form-body">
						                                            <div class="form-group">
						                                                <label>Tahun Awal</label>
						                                                <select class="form-control" name="startYear">
						                                                    <option>2015</option>
						                                                    <option>2016</option>
						                                                    <option>2017</option>
						                                                    <option>2018</option>
						                                                </select>
						                                            </div>
						                                            <div class="form-group">
						                                                <label>Tahun Akhir</label>
						                                                <select class="form-control" name="endYear">
						                                                    <option>2015</option>
						                                                    <option>2016</option>
						                                                    <option>2017</option>
						                                                    <option>2018</option>
						                                                </select>
						                                            </div>
						                                        </div>
						                                        <div class="form-actions">
						                                            <button type="submit" class="btn blue">Submit</button>
						                                            <button type="button" class="btn default">Cancel</button>
						                                        </div>
						                                    </form>
						                                </div>
						                            </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion3" href="#collapse_3_2"> Data Per Bulan </a>
                                                </h4>
                                            </div>
                                            <div id="collapse_3_2" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <div class="portlet light ">
						                                <div class="portlet-title">
						                                    <div class="caption font-red-sunglo">
						                                        <i class="icon-calendar font-red-sunglo"></i>
						                                        <span class="caption-subject bold uppercase"> Pilih Tahun </span>
						                                    </div>
						                                </div>
						                                <div class="portlet-body form">
						                                    <form role="form" method="post" action="/case_statistics_monthly">
						                                    	{!! csrf_field() !!}
						                                        <div class="form-body">
						                                            <div class="form-group">
						                                                <label>Pilih Tahun</label>
						                                                <select class="form-control" name="year">
						                                                    <option>2015</option>
						                                                    <option>2016</option>
						                                                    <option>2017</option>
						                                                    <option>2018</option>
						                                                </select>
						                                            </div>
						                                            <div class="form-group">
						                                                <label>Bulan Awal</label>
						                                                <select class="form-control" name="startMonth">
						                                                    <option value="01">Januari</option>
						                                                    <option value="02">Februari</option>
						                                                    <option value="03">Maret</option>
						                                                    <option value="04">April</option>
						                                                    <option value="05">Mei</option>
						                                                    <option value="06">Juni</option>
						                                                    <option value="07">Juli</option>
						                                                    <option value="08">Agustus</option>
						                                                    <option value="09">September</option>
						                                                    <option value="10">Oktober</option>
						                                                    <option value="11">November</option>
						                                                    <option value="12">Desember</option>
						                                                </select>
						                                            </div>
						                                            <div class="form-group">
						                                                <label>Bulan Akhir</label>
						                                                <select class="form-control" name="endMonth">
						                                                    <option value="01">Januari</option>
						                                                    <option value="02">Februari</option>
						                                                    <option value="03">Maret</option>
						                                                    <option value="04">April</option>
						                                                    <option value="05">Mei</option>
						                                                    <option value="06">Juni</option>
						                                                    <option value="07">Juli</option>
						                                                    <option value="08">Agustus</option>
						                                                    <option value="09">September</option>
						                                                    <option value="10">Oktober</option>
						                                                    <option value="11">November</option>
						                                                    <option value="12">Desember</option>
						                                                </select>
						                                            </div>
						                                        </div>
						                                        <div class="form-actions">
						                                            <button type="submit" class="btn blue">Submit</button>
						                                            <button type="button" class="btn default">Cancel</button>
						                                        </div>
						                                    </form>
						                                </div>
						                            </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--<div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion3" href="#collapse_3_3"> Data Per Hari </a>
                                                </h4>
                                            </div>
                                            <div id="collapse_3_3" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <div class="portlet light ">
						                                <div class="portlet-title">
						                                    <div class="caption font-red-sunglo">
						                                        <i class="icon-calendar font-red-sunglo"></i>
						                                        <span class="caption-subject bold uppercase"> Pilih Tahun </span>
						                                    </div>
						                                </div>
						                                <div class="portlet-body form">
						                                    <form role="form" method="post" action="/case_statistics_daily">
						                                    	{!! csrf_field() !!}
						                                        <div class="form-body">
						                                            <div class="form-group">
						                                                <label>Pilih Tahun</label>
						                                                <select class="form-control" name="year">
						                                                    <option>2015</option>
						                                                    <option>2016</option>
						                                                    <option>2017</option>
						                                                    <option>2018</option>
						                                                </select>
						                                            </div>
						                                            <div class="form-group">
						                                                <label>Pilih Bulan</label>
						                                                <select class="form-control" name="month">
						                                                    <option value="01">Januari</option>
						                                                    <option value="02">Februari</option>
						                                                    <option value="03">Maret</option>
						                                                    <option value="04">April</option>
						                                                    <option value="05">Mei</option>
						                                                    <option value="06">Juni</option>
						                                                    <option value="07">Juli</option>
						                                                    <option value="08">Agustus</option>
						                                                    <option value="09">September</option>
						                                                    <option value="10">Oktober</option>
						                                                    <option value="11">November</option>
						                                                    <option value="12">Desember</option>
						                                                </select>
						                                            </div>
						                                            <div class="form-group">
						                                                <label>Tanggal Awal</label>
						                                                <select class="form-control" name="startDate">
						                                                    <?php
						                                                    for ($i=1; $i <=31 ; $i++) { 
						                                                    	echo "<option>".$i."</option>";
						                                                    }
						                                                    ?>
						                                                </select>
						                                            </div>
						                                            <div class="form-group">
						                                                <label>Tanggal Akhir</label>
						                                                <select class="form-control" name="endDate">
						                                                    <?php
						                                                    for ($i=1; $i <=31 ; $i++) { 
						                                                    	echo "<option>".$i."</option>";
						                                                    }
						                                                    ?>
						                                                </select>
						                                            </div>
						                                        </div>
						                                        <div class="form-actions">
						                                            <button type="submit" class="btn blue">Submit</button>
						                                            <button type="button" class="btn default">Cancel</button>
						                                        </div>
						                                    </form>
						                                </div>
						                            </div>
                                                </div>
                                            </div>
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                            <!-- END ACCORDION PORTLET-->
@endsection