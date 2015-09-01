<?php

namespace App\Http\Controllers\Sibankum\Admin;

use Illuminate\Http\Request;
use Rhumsaa\Uuid\Uuid;
use Rhumsaa\Uuid\Exception\UnsatisfiedDependencyException;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Sibankum\CourtLevel;
use DB;

class CourtLevelController extends Controller
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
        $courtLevel = CourtLevel::all();
        return view('sibankum.admin.courtLevelTable', ['court_level' => $courtLevel, 'user' => $user]);
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
        return view('sibankum.admin.courtLevelForm', ['user' => $user]);
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
        $court_level = new CourtLevel;
        $court_level->uuid = Uuid::uuid4();
        $court_level->name = $request->name;
        $court_level->save();
        return redirect("/court_level");
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
        $court_level = CourtLevel::where('uuid', $request->uuid)
                                    ->get();

        //Tampilkan Form yang terisi data
        return view('sibankum.admin.courtLevelFormEdit', ['court_level' => $court_level, 'user' => $user]);
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
        CourtLevel::where('uuid' ,$request->uuid)
        ->update([
            'name' => $request->name,
            ]);
        return redirect("/court_level");
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
        DB::table('court_level')->where('uuid', '=' ,$uuid)->delete();
        return redirect("/court_level");    
    }
}
