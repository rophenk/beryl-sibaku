<?php

namespace App\Http\Controllers\Sibankum\Admin;

use Illuminate\Http\Request;
use Rhumsaa\Uuid\Uuid;
use Rhumsaa\Uuid\Exception\UnsatisfiedDependencyException;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Sibankum\CaseParty;
use DB;

class CasePartyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
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
        
        $input = $request->all();
        /*var_dump($input);die();*/
        $rows = $input['rows'];
        if($input["side"] === '1') {
            $case_uuid = $input["case_uuid"];
            foreach ($input['rows'] as $row) {
                DB::table('case_party')->insert([
                    'case_id' => $input["case_id"],
                    'court_party_id' => $row["court_party_id"],
                    'name' => $row["name"],
                    'description' => $row["description"],
                    'case_number' => $input["case_number"],
                    'instansi_id' => $input["instansi_id"],
                ]);
            }
        }elseif($input["side"] === '2') {
            $case_uuid = $input["case_uuid2"];
            foreach ($input['rows'] as $row) {
                DB::table('case_party')->insert([
                    'case_id' => $input["case_id2"],
                    'court_party_id' => $row["court_party_id"],
                    'name' => $row["name"],
                    'description' => $row["description"],
                    'case_number' => $input["case_number2"],
                    'instansi_id' => $input["instansi_id2"],
                ]);
            }
        }
        
        return redirect("/case/show/".$case_uuid);
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
