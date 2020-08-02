<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Site;
use Auth;
use App\Snack;
use App\User;
use DB;

class SiteController extends Controller
{
    public function index()
    {
        return view('admin.sites.sites');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:sites',
            'email' => 'email|required',
            'phone1' => 'required|min:200000000|max:999999999|numeric|unique:sites',
            'town' => 'required',
            'street' => 'required'
        ]);

        $site = new Site();
        $site->company_id = Auth::user()->companies()->first()->id;
        $site->name = $request->name;
        $site->slug= $this->makeSlug($request->name);
        $site->email = $request->email;
        $site->phone1 = $request->phone1;
        $site->phone2 = $request->phone2;
        $site->town = $request->town;
        $site->street = $request->street;

        if($site->save()){
            return 'success';
        } else {
            return 'error';
        }
    }

    public function users($site_slug){

        $site = Site::whereSlug($site_slug)->first();
        return view('admin.sites.users', compact('site'));
    }


    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'email|required',
            'phone1' => 'required|min:200000000|max:999999999|numeric',
            'town' => 'required',
            'street' => 'required'
        ]);

        $site = Site::find($request->site_id);

        $site->name = $request->name;
        $site->email = $request->email;
        $site->phone1 = $request->phone1;
        $site->phone2 = $request->phone2;
        $site->town = $request->town;
        $site->street = $request->street;

        if($site->save()){
            return 'success';
        } else {
            return 'error';
        }
    }


    public function edit($id)
    {
        $lims_site_data = Site::find($id);
        return $lims_site_data;
    }

    public function destroy($id)
    {
        $lims_site_data = Site::find($id);
        $lims_site_data->delete();
        notify()->success('Site supprimé avec succès', 'Suppression de site');
        return redirect()->back();
    }
}
