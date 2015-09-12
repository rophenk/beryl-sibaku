<?php

namespace App\Http\Controllers\Sibankum\Admin;

use Illuminate\Http\Request;
use Rhumsaa\Uuid\Uuid;
use Rhumsaa\Uuid\Exception\UnsatisfiedDependencyException;
use App\AuthTraits\RedirectsUsers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Sibankum\UserModel;
use App\Models\Sibankum\InstansiModel;
use App\Role;
use DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
         // Tampilkan data Users
        $userInfo = DB::table('users')
                ->select('users.name as name', 'roles.name as role', 'users.id as id', 'users.email as email')
                ->leftJoin('roles', 'users.role_id', '=', 'roles.id')
                ->get();

        $role_id = $request->user()->role_id;
        $user       = $request->user();
        return view('sibankum.admin.userTable', ['user_info' => $userInfo, 'role_id' => $role_id, 'user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        $user       = $request->user();

        //Populasi dropdown Instansi
        $instansi_options = InstansiModel::all();

        //Populasi dropdown Role
        $role_options = Role::all();

        // Tampilkan Form User
        return view('sibankum.admin.userForm', ['instansi_options' => $instansi_options, 'role_options' => $role_options, 'user' => $user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        // Simpan data ke database
        $user = new UserModel;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->instansi_id = $request->instansi_id;
        $user->role_id = $request->role_id;
        $user->save();
        return redirect("/users");
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

        // Tampilka data User Database
        $userdb = UserModel::where('id', $request->id)
                                    ->get();

        //Populasi dropdown Instansi
        $instansi_options = InstansiModel::all();

        //Populasi dropdown Role
        $role_options = Role::all();

        // Tampilkan Form User
        return view('sibankum.admin.userFormEdit', ['instansi_options' => $instansi_options, 'role_options' => $role_options, 'user' => $user, 'userdb' => $userdb]);

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
        
        // Check if password change
        if(strlen($request->newpassword) > 0){
            // Validate the request...
            //var_dump("Password Change"); die();
            UserModel::where('id',$request->id)
            ->update([
                'name' => $request->name, 
                'email' => $request->email,
                'password' => bcrypt($request->newpassword),
                'role_id' => $request->role_id, 
                'instansi_id' => $request->instansi_id
                ]);

        } else {

            //var_dump("Password Not Change"); die();
            // Validate the request...
            UserModel::where('id' ,$request->id)
            ->update([
                'name' => $request->name, 
                'email' => $request->email,
                'role_id' => $request->role_id, 
                'instansi_id' => $request->instansi_id 
                ]);
        }
        
        return redirect("/users");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //Menghapus data User
        DB::table('users')->where('id', '=' ,$id)->delete();
        return redirect("/users");
    }
}
