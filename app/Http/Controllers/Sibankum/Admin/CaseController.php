<?php

namespace App\Http\Controllers\Sibankum\Admin;

use Illuminate\Http\Request;
use Rhumsaa\Uuid\Uuid;
use Rhumsaa\Uuid\Exception\UnsatisfiedDependencyException;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Sibankum\CaseModel;
use DB;

class CaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $user       = $request->user();
        // Tampilkan semua data Instansi
        $case = DB::table('case')
                ->select('case.uuid as uuid', 'case.work_unit', 'case.case_number', 'case.principal', 'case.object', 'case.proposal', 'court_type.id as court_type_id' , 'court_type.name as court_type')
                ->join('court_type', 'case.court_type_id', '=', 'court_type.id')
                ->get();
        return view('sibankum.admin.caseTable', ['case' => $case, 'user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
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
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
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
