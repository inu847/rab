<?php

namespace App\Http\Controllers;

use App\Models\Komponen;
use App\Models\Rspp;
use App\Models\RuhBelanja;
use Illuminate\Http\Request;

class RuhBelanjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = RuhBelanja::orderBy('id', 'desc')->get();

        return view('ruhBelanja.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ruhBelanja.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $data = $request->all();
            $role = RuhBelanja::create($data);

            return redirect()->route('ruhBelanja.index')->with('success', 'Berhasil Input Data');
        } catch (\Throwable $th) {
            dd($th);
            return redirect()->back()->with('danger', $th);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        dd('asd');
        $data = RuhBelanja::findOrFail($id);

        return view('ruhBelanja.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $data = $request->all();
            $role = RuhBelanja::findOrFail($id)->update($data);

            return redirect()->route('ruhBelanja.index')->with('success', 'Berhasil Input Data');
        } catch (\Throwable $th) {
            return redirect()->back()->with('danger', $th);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $data = RuhBelanja::findOrFail($id)->delete();
    
            return redirect()->back()->with('success', 'Berhasil Hapus Data');
        } catch (\Throwable $th) {
            return redirect()->back()->with('danger', $th);
        }
    }

    public function createRspp($id)
    {
        $data = RuhBelanja::findOrFail($id);
        $komponen = Komponen::where('rspp_id', $data->id)->get();
        
        return view('ruhBelanja.createRspp', ['data' => $data, 'komponen' => $komponen]);
    }

    public function storeRspp(Request $request, $id)
    {
        try {
            $data = $request->all();
            $data['ruh_belanja_id'] = $id;
            $rspp = Rspp::create($data);

            return redirect()->back()->with('success', 'Berhasil Input RSPP');
        } catch (\Throwable $th) {
            return redirect()->back()->with('danger', $th);
        }
    }
}
