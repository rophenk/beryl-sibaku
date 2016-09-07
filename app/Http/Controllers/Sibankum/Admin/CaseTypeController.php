<?php

namespace App\Http\Controllers\Sibankum\Admin;

use Illuminate\Http\Request;
use Rhumsaa\Uuid\Uuid;
use Rhumsaa\Uuid\Exception\UnsatisfiedDependencyException;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Sibankum\CaseType;
use DB;

class CaseTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user       = $request->user();
        // Tampilkan semua data Instansi
        $caseType = CaseType::all();
        return view('sibankum.admin.caseTypeTable', ['case_type' => $caseType, 'user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $user       = $request->user();
        // Tampilkan Form Instansi
        return view('sibankum.admin.caseTypeForm', ['user' => $user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the request...
        $case_type = new CaseType;
        $case_type->uuid = Uuid::uuid4();
        $case_type->name = $request->name;
        $case_type->save();
        return redirect("/case_type");
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
    public function edit(Request $request)
    {
        $user       = $request->user();
        // Tampilka data Instansi
        $case_type = CaseType::where('uuid', $request->uuid)
                                    ->get();

        //Tampilkan Form yang terisi data
        return view('sibankum.admin.caseTypeFormEdit', ['case_type' => $case_type, 'user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //Validate the request...
        CaseType::where('uuid' ,$request->uuid)
        ->update([
            'name' => $request->name
            ]);
        return redirect("/case_type");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($uuid)
    {
        // Menghapus data
        DB::table('case_type')->where('uuid', '=' ,$uuid)->delete();
        return redirect("/case_type");    
    }
}
