<?php

namespace App\Http\Controllers\Sibankum\Admin;

use Validator;
use Session;
use Redirect;
use Input;
use Rhumsaa\Uuid\Uuid;
use Rhumsaa\Uuid\Exception\UnsatisfiedDependencyException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Sibankum\FileModel;
use DB;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $user = $request->user();
        $case_uuid = $request->uuid;
        return view('sibankum.admin.uploadForm2', ['case_uuid' => $case_uuid, 'user' => $user]);
    }

    public function upload(Request $request) {
        $case_uuid = $request->case_uuid;
        if(!empty($case_uuid)){
            $prefix = $case_uuid.'-';
        } else {
            $prefix = '';
        }
      // getting all of the post data
      $file = array('file' => $request->file('file'));
      // setting up rules
      $rules = array('file' => 'required', 'mime' => 'pdf'); //mimes:jpeg,bmp,png and for max size max:10000
      // doing the validation, passing post data, rules and the messages
      $validator = Validator::make($file, $rules);
      if ($validator->fails()) {
        // send back to the page with the input data and errors
        return Redirect::to('upload')->withInput()->withErrors($validator);
      }
      else {
        // checking file is valid.
        if ($request->file('file')->isValid()) {
          $destinationPath = 'uploads'; // upload path
          $extension = $request->file('file')->getClientOriginalExtension(); // getting file extension
          //$fileName = rand(11111,99999).'.'.$extension; // renameing file
          $filename = $prefix.$request->file('file')->getClientOriginalName();
          $request->file('file')->move($destinationPath, $filename); // uploading file to given path
          // sending back with message
          Session::flash('success', '<h2>Upload successfully</h2> File Path : <p id="p1">http://sibankum.pertanian.go.id/uploads/'.$filename.'</p>&nbsp;<button onclick="copyToClipboard(\'p1\')">Copy To Clipboard</button>'); 
          //return Redirect::to('upload');
          return Redirect::to('file/'.$case_uuid);
        }
        else {
          // sending back with error message.
          Session::flash('error', 'uploaded file is not valid');
          return Redirect::to('file');
        }
      }
    }

    public function uploadCaseFile(Request $request) {
        $case_uuid = $request->case_uuid;
        if(!empty($case_uuid)){
            $prefix = $case_uuid.'-';
        } else {
            $prefix = '';
        }
      // getting all of the post data
      $file = array('file' => $request->file('file'));
      // setting up rules
      $rules = array('file' => 'required', 'mime' => 'pdf'); //mimes:jpeg,bmp,png and for max size max:10000
      // doing the validation, passing post data, rules and the messages
      $validator = Validator::make($file, $rules);
      if ($validator->fails()) {
        // send back to the page with the input data and errors
        return Redirect::to('/case/show/'.$case_uuid.'#berkas')->withInput()->withErrors($validator);
      }
      else {
        // checking file is valid.
        if ($request->file('file')->isValid()) {
          $destinationPath = 'uploads/'.$case_uuid.'/'; // upload path
          $extension = $request->file('file')->getClientOriginalExtension(); // getting file extension
          //$fileName = rand(11111,99999).'.'.$extension; // renameing file
          $filename = $request->file('file')->getClientOriginalName();
          $request->file('file')->move($destinationPath, $filename); // uploading file to given path

          // Input ke database
          $file = new FileModel;
          $file->uuid        = Uuid::uuid4();
          $file->case_id     = $request->case_id;
          $file->case_uuid   = $request->case_uuid;
          $file->name        = $request->name;
          $file->url         = 'http://sibankum.pertanian.go.id/'.$destinationPath.$filename.'';
          $file->description = $request->description;
          $file->filename    = $filename;
          $file->save();

          // sending back with message
          Session::flash('success', '<h2>Upload successfully</h2> File Path : <p id="p1">http://sibankum.pertanian.go.id/uploads/'.$filename.'</p>&nbsp;<button onclick="copyToClipboard(\'p1\')">Copy To Clipboard</button>'); 
          //return Redirect::to('upload');
          return Redirect::to('/case/show/'.$case_uuid.'#berkas');
        }
        else {
          // sending back with error message.
          Session::flash('error', 'uploaded file is not valid');
          return Redirect::to('/case/show/'.$case_uuid.'#berkas');
        }
      }
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
    public function destroy(Request $request)
    {
       $uuid = $request->uuid;

       // Tampilka data Perkara
        $file = FileModel::where('uuid', $uuid)->first();

        $case_uuid = $file->case_uuid;

        Storage::disk('sibankum')->delete('/'.$case_uuid.'/'.$file->filename);

        //Menghapus data berkas dari databse
        DB::table('files')->where('uuid', '=' ,$uuid)->delete();
        return redirect("/case/show/".$case_uuid."#berkas");
    }
}
