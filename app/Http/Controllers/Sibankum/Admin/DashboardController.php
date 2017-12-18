<?php namespace App\Http\Controllers\Sibankum\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;

class DashboardController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
        $user       = $request->user();
        $totalCase 	= DB::table('case')->count();
        $totalStatus = DB::table('case_status')->where('status', '=', 'SUDAH PUTUS')->count();
        $totalFiles = DB::table('files')->count();
        $totalParty = DB::table('case_party')->count();

        $case2015 = DB::table('case')->whereBetween('created_at', ['2015-01-01 00:00:00', '2015-12-31 23:59:50'])->count();
        $case2016 = DB::table('case')->whereBetween('created_at', ['2016-01-01 00:00:00', '2016-12-31 23:59:50'])->count();
        $case2017 = DB::table('case')->whereBetween('created_at', ['2017-01-01 00:00:00', '2017-12-31 23:59:50'])->count();

        $latestCase = DB::table('case')
        		->select('case.uuid as uuid', 'case.work_unit', 'case.case_number', 'case.principal', 'case.object', 'case.proposal', 'case.created_at as date', 'court_type.id as court_type_id' , 'court_type.name as court_type', 'case_type.name as case_type')
                ->join('case_type', 'case.case_type_id', '=', 'case_type.id')
                ->join('court_type', 'case.court_type_id', '=', 'court_type.id')
                ->orderBy('case.created_at', 'desc')
                ->take(5)
                ->get();

        $latestFile = DB::table('files')
        		->select('files.uuid as uuid', 'files.case_uuid as case_uuid', 'files.name as name', 'files.description as description', 'files.url as url', 'files.filename as filename')
        		->leftJoin('case', 'files.case_id', '=', 'case.id')
        		->leftJoin('case_type', 'case.case_type_id', '=', 'case_type.id')
                ->leftJoin('court_type', 'case.court_type_id', '=', 'court_type.id')
        		->orderBy('files.created_at', 'desc')
                ->take(5)
                ->get();

		return view("sibankum.admin.index", [
			'totalCase' => $totalCase,
			'totalStatus' => $totalStatus,
			'totalFiles' => $totalFiles,
			'totalParty' => $totalParty,
			'case2015' => $case2015,
			'case2016' => $case2016,
			'case2017' => $case2017,
			'latestCase' => $latestCase,
			'latestFile' => $latestFile,
			'user' => $user
		]);
	}

	public function dashboard()
	{
		return view("sibankum.admin.index");
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function totalCase()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
