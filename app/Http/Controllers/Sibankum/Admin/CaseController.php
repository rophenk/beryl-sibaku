<?php

namespace App\Http\Controllers\Sibankum\Admin;

use Illuminate\Http\Request;
use Rhumsaa\Uuid\Uuid;
use Rhumsaa\Uuid\Exception\UnsatisfiedDependencyException;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Sibankum\CaseModel;
use App\Models\Sibankum\CourtType;
use App\Models\Sibankum\CaseParty;
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
        $role_id    = $request->user()->role_id;
        // Tampilkan semua data Instansi
        
        if($role_id <= 2) {

            // Tampilkan semua data Instansi
             $case = DB::table('case')
                ->select('case.uuid as uuid', 'case.work_unit', 'case.case_number', 'case.principal', 'case.object', 'case.proposal', 'court_type.id as court_type_id' , 'court_type.name as court_type')
                ->join('court_type', 'case.court_type_id', '=', 'court_type.id')
                ->get();

        } else {

            $instansi_id = $request->user()->instansi_id;

            // Tampilkan sesuai data Instansi user tersebut
            $case = DB::table('case')
                ->select('case.uuid as uuid', 'case.work_unit', 'case.case_number', 'case.principal', 'case.object', 'case.proposal', 'court_type.id as court_type_id' , 'court_type.name as court_type')
                ->join('court_type', 'case.court_type_id', '=', 'court_type.id')
                ->where('instansi_id', '=', $instansi_id)
                ->get();

        }
        
        return view('sibankum.admin.caseTable', ['case' => $case, 'user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        $user       = $request->user();
        $role_id    = $request->user()->role_id;
        
        if($role_id <= 2) {

            // Tampilkan semua data Server
            $court_type = CourtType::all();

        } else {

            //$instansi_id = $request->user()->instansi_id;

            // Tampilkan data Instansi hanya miliknya
             /*$court_type = CourtType::where('id', $instansi_id)
                         ->get();*/
            $court_type = CourtType::all();

        }

        // Tampilkan Form Server
        return view('sibankum.admin.caseForm', ['court_type_options' => $court_type, 'user' => $user]);
    
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
        $case = new CaseModel;
        $case->court_type_id= $request->court_type_id;
        $case->uuid         = Uuid::uuid4();
        $case->number       = $request->number;
        $case->work_unit    = $request->work_unit;
        $case->case_number  = $request->case_number;
        $case->principal    = $request->principal;
        $case->object       = $request->object;
        $case->proposal     = $request->proposal;
        $case->address      = $request->address;
        $case->instansi_id  = $request->instansi_id;
        $case->save();
        return redirect("/case");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show(Request $request)
    {
        $uuid       = $request->uuid;
        $user       = $request->user();
        $role_id    = $request->user()->role_id;

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

        // Tampilkan Tabel Pihak
        return view('sibankum.admin.caseShow', ['case' => $case, 'party_side1' => $party_side1, 'party_side2' => $party_side2, 'list_party1' => $list_party1, 'list_party2' => $list_party2, 'user' => $user]);
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit(Request $request)
    {
        $uuid       = $request->uuid;
        $user       = $request->user();
        $role_id    = $request->user()->role_id;
        $instansi_id = $request->user()->instansi_id;

        // Tampilka data Perkara
        $case = CaseModel::where('uuid', $uuid)
                                    ->get();
        
        if($role_id <= 2) {

            // Tampilkan semua data Perkara
            $court_type = CourtType::all();

        } else {

            $instansi_id = $request->user()->instansi_id;

            // Tampilkan data Instansi hanya miliknya
            /*$instansi_options = InstansiModel::where('id', $instansi_id)
                         ->get();*/
            $court_type = CourtType::all();

        }

        //Tampilkan Form yang terisi data
        return view('sibankum.admin.caseFormEdit', ['case' => $case, 'court_type_options' => $court_type, 'user' => $user]);
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
        CaseModel::where('uuid' ,$request->uuid)
        ->update([
            'court_type_id' => $request->court_type_id, 
            'number'        => $request->number,
            'work_unit'     => $request->work_unit,
            'case_number'   => $request->case_number,
            'principal'     => $request->principal,
            'object'        => $request->object,
            'proposal'      => $request->proposal,     
            'address'       => $request->address 
            ]);
        return redirect("/case");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($uuid)
    {
        //Menghapus data Server
        DB::table('case')->where('uuid', '=' ,$uuid)->delete();
        return redirect("/case");
    }

    /**
       * Display a listing of the resource.
       * @Post("test", as="home.test")
       * @return Response
       */
      public function test()
      {
          return 'test';
      }
}
