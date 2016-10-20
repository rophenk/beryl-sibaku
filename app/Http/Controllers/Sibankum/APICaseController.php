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
