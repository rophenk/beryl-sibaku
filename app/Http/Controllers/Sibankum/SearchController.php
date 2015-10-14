<?php

namespace App\Http\Controllers\Sibankum;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Sibankum\CaseModel;
use DB;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        // Menampilkan Halaman Index
        // Menampilkan 3 Data Terbaru
        $data = DB::table('data')
                    ->orderBy('id', 'desc' )
                    ->skip(0)
                    ->take(3)
                    ->get();

        $instansi = DB::table('instansi')
                    ->get();
        return view('simapta.template.materialdesign.index', ['data' => $data, 'instansi' => $instansi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function latest()
    {
        // Menampilkan 3 Data Terbaru
        $data = DB::table('data')
                    ->orderBy('id', 'desc')
                    ->skip(0)
                    ->take(3)
                    ->get();
        return view('simapta.template.materialdesign.latest', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
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
        return view('sibankum.result', ['data' => $data]);
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
    public function show($uuid)
    {
        // Menampilkan Detail data
        $case = DB::table('case')
                ->select('case.id as case_id', 'case.uuid as case_uuid', 'court_type.name as court_name', 'case.court_type_id', 'case.number', 'case.case_number', 'case.work_unit', 'case.principal', 'case.object', 'case.proposal', 'case.address')
                ->leftJoin('court_type', 'case.court_type_id', '=', 'court_type.id')
                ->where('case.uuid', '=' ,$uuid)
                ->first();

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
                ->select('date_start', 'date_end', 'agenda')
                ->where('case_id', '=' , $case->case_id)
                ->get();

        $case_status = DB::table('case_status')
                ->select('court_level.name', 'case_status.status', 'verdict', 'description')
                ->leftJoin('court_level', 'case_status.court_level_id', '=', 'court_level.id')
                ->where('case_id', '=' , $case->case_id)
                ->get();

         return view('sibankum.detail', ['case' => $case, 'party_side1' => $party_side1, 'party_side2' => $party_side2, 'list_party1' => $list_party1, 'list_party2' => $list_party2, 'trial_schedule' => $trial_schedule, 'case_status' => $case_status]);
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
