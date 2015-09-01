<?php

namespace App\Http\Controllers\Sibankum\Admin;

use Illuminate\Http\Request;
use Rhumsaa\Uuid\Uuid;
use Rhumsaa\Uuid\Exception\UnsatisfiedDependencyException;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Sibankum\CourtParty;
use DB;


class CourtPartyController extends Controller
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
        $courtParty = CourtParty::all();
        return view('sibankum.admin.courtPartyTable', ['court_party' => $courtParty, 'user' => $user]);
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
        return view('sibankum.admin.courtPartyForm', ['user' => $user]);
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
        $court_party = new CourtParty;
        $court_party->uuid = Uuid::uuid4();
        $court_party->name = $request->name;
        $court_party->side = $request->side;
        $court_party->save();
        return redirect("/court_party");
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
        $court_party = CourtParty::where('uuid', $request->uuid)
                                    ->get();

        //Tampilkan Form yang terisi data
        return view('sibankum.admin.courtPartyFormEdit', ['court_party' => $court_party, 'user' => $user]);
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
        CourtParty::where('uuid' ,$request->uuid)
        ->update([
            'name' => $request->name, 
            'side' => $request->side 
            ]);
        return redirect("/court_party");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($uuid)
    {
        // Menghapus data
        DB::table('court_party')->where('uuid', '=' ,$uuid)->delete();
        return redirect("/court_party");    
    }
}
