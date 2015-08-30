<?php

namespace App\Http\Controllers\Sibankum\Admin;

use Illuminate\Http\Request;
use Rhumsaa\Uuid\Uuid;
use Rhumsaa\Uuid\Exception\UnsatisfiedDependencyException;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Sibankum\CourtType;
use DB;

class CourtTypeController extends Controller
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
        $courtType = CourtType::all();
        return view('sibankum.admin.courtTypeTable', ['court_type' => $courtType, 'user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(Request $request)
    {
         $user       = $request->user();
        // Tampilkan Form Instansi
        return view('sibankum.admin.courtTypeForm', ['user' => $user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        // Validate the request...
        $court_type = new CourtType;
        $court_type->uuid = Uuid::uuid4();
        $court_type->name = $request->name;
        $court_type->alias = $request->alias;
        $court_type->save();
        return redirect("/court_type");
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
    public function edit(Request $request)
    {
        $user       = $request->user();
        // Tampilka data Instansi
        $court_type = CourtType::where('uuid', $request->uuid)
                                    ->get();

        //Tampilkan Form yang terisi data
        return view('sibankum.admin.courtTypeFormEdit', ['court_type' => $court_type, 'user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request)
    {
        //Validate the request...
        CourtType::where('uuid' ,$request->uuid)
        ->update([
            'name' => $request->name, 
            'alias' => $request->alias 
            ]);
        return redirect("/court_type");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($uuid)
    {
        // Menghapus data Instansi
        DB::table('court_type')->where('uuid', '=' ,$uuid)->delete();
        return redirect("/court_type");    }
}
