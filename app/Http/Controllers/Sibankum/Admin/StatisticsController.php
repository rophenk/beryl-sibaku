<?php

namespace App\Http\Controllers\Sibankum\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use DB;

class StatisticsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user       = $request->user();

        return view('sibankum.admin.caseStatistics', ['user' => $user]);
    }

    /**
     * Show yearly statistics.
     *
     * @return \Illuminate\Http\Response
     */
    public function showYearly(Request $request)
    {
        $user       = $request->user();
        $startYear  = $request->startYear;
        $endYear    = $request->endYear;

        $data = DB::table("case")
                ->select(DB::raw("YEAR(created_at) as xAxis") , DB::raw("(COUNT(*)) as total_case"))
                ->whereBetween('created_at', [''.$startYear.'-01-01 00:00:00', ''.$endYear.'-12-31 23:59:59'])
                ->orderBy('created_at')
                ->groupBy(DB::raw("YEAR(created_at)"))
                ->get();

        return view('sibankum.admin.caseStatisticsCharts', [
            'user' => $user,
            'title' => 'Jumlah Perkara perTahun',
            'countData' => count($data),
            'data' => $data
        ]);
    }

    /**
     * Show Monthly statistics.
     *
     * @return \Illuminate\Http\Response
     */
    public function showMonthly(Request $request)
    {
        $user       = $request->user();
        $year       = $request->year;
        $startMonth = $request->startMonth;
        $endMonth   = $request->endMonth;

        $data = DB::table("case")
                ->select(DB::raw("MONTH(created_at) as xAxis") , DB::raw("(COUNT(*)) as total_case"))
                ->whereBetween('created_at', [''.$year.'-'.$startMonth.'-01 00:00:00', ''.$year.'-'.$endMonth.'-31 23:59:59'])
                ->orderBy('created_at')
                ->groupBy(DB::raw("MONTH(created_at)"))
                ->get();
        return view('sibankum.admin.caseStatisticsCharts', [
            'user'      => $user,
            'title'     => 'Jumlah Perkara perBulan Tahun '.$year,
            'countData' => count($data),
            'data'      => $data
        ]);
    }

    /**
     * Show Daily statistics.
     *
     * @return \Illuminate\Http\Response
     */
    public function showDaily(Request $request)
    {
        $user       = $request->user();
        $year       = $request->year;
        $month      = $request->month;
        $startDate  = $request->startDate;
        $endDate   = $request->endDate;

        $data = DB::table("case")
                ->select(DB::raw("DATE(created_at) as xAxis") , DB::raw("(COUNT(*)) as total_case"))
                ->whereBetween('created_at', [''.$year.'-'.$month.'-'.$startDate.' 00:00:00', ''.$year.'-'.$month.'-'.$endDate.' 23:59:59'])
                ->orderBy('created_at')
                ->groupBy(DB::raw("DATE(created_at)"))
                ->get();
        //return $data;
        return view('sibankum.admin.caseStatisticsCharts', [
            'user'      => $user,
            'title'     => 'Jumlah Perkara per Hari Bulan '.$month.' Tahun '.$year.'' ,
            'countData' => count($data),
            'data'      => $data
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
