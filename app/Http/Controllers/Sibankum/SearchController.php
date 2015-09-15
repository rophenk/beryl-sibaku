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
        $data = DB::table('data')
                    ->where('uuid', $uuid)
                    ->get();

         return view('simapta.template.materialdesign.show', ['data' => $data]);
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
