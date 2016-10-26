<?php

namespace App\Http\Controllers\Sibankum;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class APICaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return response()->json([
            'success' => 'Test Success'
            ]);
    }
    /**
     * Display a Search Result
     *
     * @return \Illuminate\Http\Response
     */
    public function result(Request $request)
    {
        // Menampilkan 6 Data Terbaru
        $data = DB::table('case')
                    ->select('case.uuid as uuid', 'case.work_unit', 'case.case_number', 'case.principal', 'case.object', 'case.proposal', 'case.court_type_id' , 'case.court_type_id as id_jenis_perkara' , 'court_type.name as court_type')
                    ->leftjoin('court_type', 'case.court_type_id', '=', 'court_type.id')
                    ->where('principal' , 'LIKE' , "%{$request->keyword}%")
                    ->orWhere('object', 'LIKE' , "%{$request->keyword}%" )
                    ->orWhere('proposal', 'LIKE' , "%{$request->keyword}%")
                    ->orWhere('case_number', 'LIKE' , "%{$request->keyword}%")
                    ->orWhere('work_unit', 'LIKE' , "%{$request->keyword}%")
                    ->get();
        return response()->json([
            'status' => '200', 
            'success' => 'Record Found',
            'data' => $data
            ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getLatestCase()
    {
        // Menampilkan 6 Data Terbaru
        $data = DB::table('case')
                    ->select('case.uuid as uuid', 'case.work_unit', 'case.case_number', 'case.principal', 'case.object', 'case.proposal', 'case.court_type_id' , 'case.court_type_id as id_jenis_perkara' , 'court_type.name as court_type')
                    ->leftjoin('court_type', 'case.court_type_id', '=', 'court_type.id')
                    ->orderBy('case.id', 'desc')
                    ->take(5)
                    ->get();

        return response()->json([
            'status' => '200', 
            'success' => 'Record Found',
            'data' => $data
            ], 200);
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $uuid       = $request->uuid;

        $case = DB::table('case')
                ->select('case.id as case_id', 'case.uuid as case_uuid', 'court_type.name as court_name', 'case_type.name as case_type', 'case.court_type_id', 'case.number', 'case.case_number', 'case.work_unit', 'case.principal', 'case.object', 'case.proposal', 'case.address')
                ->leftJoin('court_type', 'case.court_type_id', '=', 'court_type.id')
                ->leftJoin('case_type', 'case.case_type_id', '=', 'case_type.id')
                ->where('case.uuid', '=' ,$uuid)
                ->first();

        $detailcase = DB::table('case')
                ->select('case.id as case_id', 'case.uuid as case_uuid', 'court_type.name as court_name', 'case_type.name as case_type', 'case.court_type_id', 'case.number', 'case.case_number', 'case.work_unit', 'case.principal', 'case.object', 'case.proposal', 'case.address')
                ->leftJoin('court_type', 'case.court_type_id', '=', 'court_type.id')
                ->leftJoin('case_type', 'case.case_type_id', '=', 'case_type.id')
                ->where('case.uuid', '=' ,$uuid)
                ->get();

        $party_side1 = DB::table('case_party')
                ->select('case_party.name as case_party_name', 'case_party.description', 'court_party.name as court_party_name')
                ->leftJoin('court_party', 'case_party.court_party_id', '=', 'court_party.id')
                ->where('case_party.case_id', '=' , $case->case_id)
                ->where('court_party.side', '=' , '1')
                ->get();
        
        $party_side2 = DB::table('case_party')
                ->select('case_party.name as case_party_name', 'case_party.description', 'court_party.name as court_party_name')
                ->leftJoin('court_party', 'case_party.court_party_id', '=', 'court_party.id')
                ->where('case_party.case_id', '=' , $case->case_id)
                ->where('court_party.side', '=' , '2')
                ->get();
                
        $list_party1 = DB::table('court_party')
                ->select('id', 'name')
                ->where('side', '=', '1')
                ->get();

        $list_party2 = DB::table('court_party')
                ->select('id', 'name')
                ->where('side', '=', '2')
                ->get();

        $trial_schedule = DB::table('trial_schedule')
                ->select('id', 'date_start', 'date_end', 'agenda')
                ->where('case_id', '=', $case->case_id)
                ->get();

        $case_status = DB::table('case_status')
                ->select('case_status.id', 'court_level_id', 'status', 'verdict', 'description', 'court_level.name')
                ->leftJoin('court_level', 'court_level.id', '=', 'case_status.court_level_id')
                ->where('case_id', '=', $case->case_id)
                ->get();

        $list_court_level = DB::table('court_level')
                ->select('id', 'name')
                ->get();

        $case_files = DB::table('files')
                ->select('files.id', 'name', 'description', 'url', 'uuid')
                ->where('case_id', '=', $case->case_id)
                ->get();

        return response()->json([
            'status' => '200', 
            'success' => 'Record Found',
            'data' => $detailcase
            ], 200);
    
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
