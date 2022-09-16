<?php

namespace App\Http\Controllers;

use App\Models\ManageAccess;
use App\Models\Role;
use Illuminate\Http\Request;

class ManageAccessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role = Role::get();

        return view('manageAccess.index', ['role' => $role]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $role = Role::findOrFail($request->role_id);
        // $data = ManageAccess::where('role_id', $role)->get();
        $data['ruh'] = ManageAccess::where('role_id', $role->id)->where('slug', 'ruh')->first()->status ?? null;
        $data['rspp'] = ManageAccess::where('role_id', $role->id)->where('slug', 'rspp')->first()->status ?? null;
        $data['kro'] = ManageAccess::where('role_id', $role->id)->where('slug', 'kro')->first()->status ?? null;
        $data['ro'] = ManageAccess::where('role_id', $role->id)->where('slug', 'ro')->first()->status ?? null;
        $data['komponen'] = ManageAccess::where('role_id', $role->id)->where('slug', 'komponen')->first()->status ?? null;

        // dd($data);
        return view('manageAccess.create', ['role' => $role, 'data' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        // dd($data);

        $role = Role::findOrFail($request->role_id);
        $data['d_ruh'] = ManageAccess::where('role_id', $role->id)->where('slug', 'ruh')->first() ?? null;
        $data['d_rspp'] = ManageAccess::where('role_id', $role->id)->where('slug', 'rspp')->first() ?? null;
        $data['d_kro'] = ManageAccess::where('role_id', $role->id)->where('slug', 'kro')->first() ?? null;
        $data['d_ro'] = ManageAccess::where('role_id', $role->id)->where('slug', 'ro')->first() ?? null;
        $data['d_komponen'] = ManageAccess::where('role_id', $role->id)->where('slug', 'komponen')->first() ?? null;

        if ($data['d_ruh']) {
            $datas['status'] = $data['ruh'];
            ManageAccess::findOrFail($data['d_ruh']->id)->update($datas);
        }else{
            $datas['status'] = $data['ruh'];
            $datas['slug'] = 'ruh';
            $datas['route'] = 'ruhBelanja.store';
            $datas['role_id'] = $data['role_id'];
            ManageAccess::create($datas);
        }

        if ($data['d_rspp']) {
            $datas['status'] = $data['rspp'];
            ManageAccess::findOrFail($data['d_rspp']->id)->update($datas);
        }else{
            $datas['status'] = $data['rspp'];
            $datas['slug'] = 'rspp';
            $datas['route'] = 'rspp.storeRspp';
            $datas['role_id'] = $data['role_id'];
            ManageAccess::create($datas);
        }

        if ($data['d_kro']) {
            $datas['status'] = $data['kro'];
            ManageAccess::findOrFail($data['d_kro']->id)->update($datas);
        }else{
            $datas['status'] = $data['kro'];
            $datas['slug'] = 'kro';
            $datas['route'] = 'rspp.storeKro';
            $datas['role_id'] = $data['role_id'];
            ManageAccess::create($datas);
        }

        if ($data['d_ro']) {
            $datas['status'] = $data['ro'];
            ManageAccess::findOrFail($data['d_ro']->id)->update($datas);
        }else{
            $datas['status'] = $data['ro'];
            $datas['slug'] = 'ro';
            $datas['route'] = 'rspp.storeRo';
            $datas['role_id'] = $data['role_id'];
            ManageAccess::create($datas);
        }

        if ($data['d_komponen']) {
            $datas['status'] = $data['komponen'];
            ManageAccess::findOrFail($data['d_komponen']->id)->update($datas);
        }else{
            $datas['status'] = $data['komponen'];
            $datas['slug'] = 'komponen';
            $datas['route'] = 'rspp.storekomponen';
            $datas['role_id'] = $data['role_id'];
            ManageAccess::create($datas);
        }
        

        return redirect()->route('manage-access.index')->with('succcess', 'Berhasil Update Manage Access');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ManageAccess  $manageAccess
     * @return \Illuminate\Http\Response
     */
    public function show(ManageAccess $manageAccess)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ManageAccess  $manageAccess
     * @return \Illuminate\Http\Response
     */
    public function edit(ManageAccess $manageAccess)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ManageAccess  $manageAccess
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ManageAccess  $manageAccess
     * @return \Illuminate\Http\Response
     */
    public function destroy(ManageAccess $manageAccess)
    {
        //
    }
}
