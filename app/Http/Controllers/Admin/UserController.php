<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\Permission;
use Auth;
use Hash;
use Keygen;
use DB;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index()
    {
        
        return view('admin.users');
    }

    public function generatePassword()
    {
        $id = Keygen::numeric(6)->generate();
        return $id;
    }

    public function store(Request $request)
    {

        $data = $request->all();
        
        
        $data['password'] = bcrypt($data['password']);
        User::create($data);
        notify()->success('Utilisateur créé avec succès', 'Création utilisateur');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('admin.users.users.user-profile',compact('user'));
    }

    public function edit($id)
    {
        
        $user = Auth::user();
        $lims_user_data = User::find($id);
            
        return view('admin.users.users.user-profile-edit', compact('lims_user_data', 'user'));
        
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email',
            'username' => 'required',
            'address' => 'required',
        ]);

        $user = User::findOrFail($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->username = $request->username;
        $user->address = $request->address;
        $user->save();
        
        /*$input = $request->all();
        $lims_user_data = User::find($id);
        $lims_user_data->update($input);*/
        notify()->success('Mise à jour de l\'utilisateur effectuée avec succès', 'Mise à jour utilisateur');
        return redirect()->route('admin.user.index');
    }

    public function destroy($id)
    {
        $lims_user_data = User::find($id);
        $lims_user_data->delete();
        notify()->success('Utilisateur supprimé avec succès', 'Suppression d\'utilisateur');
        return redirect()->back();
    }
}
