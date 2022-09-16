<?php

namespace App\Http\Controllers;

use App\Models\Komponen;
use App\Models\Kro;
use App\Models\Ro;
use App\Models\Rspp;
use App\Models\RuhBelanja;
use App\Models\SubKomponen;
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
        $rspp = Rspp::where('ruh_belanja_id', $id)->get();
        $komponen = Komponen::where('rspp_id', $data->id)->get();
        $rspp = Rspp::get();
        $kro = Kro::get();
        $ro = Ro::get();
        
        return view('ruhBelanja.createRspp', ['data' => $data, 'rspp' => $rspp, 'komponen' => $komponen, 'rspp' => $rspp, 'kro' => $kro, 'ro' => $ro]);
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

    public function storeKro(Request $request)
    {
        try {
            $data = $request->all();
            foreach ($data['rspp_id'] as $key => $id) {
                $datas['rspp_id'] = $id;
                $datas['code_kro'] = $data['code_kro'][$key];
                $datas['kro'] = $data['kro'][$key];
                $kro = Kro::create($datas);
            }

            return redirect()->back()->with('success', 'Berhasil Input KRO');
        } catch (\Throwable $th) {
            return redirect()->back()->with('danger', $th);
        }
    }

    public function storeRo(Request $request)
    {
        try {
            $data = $request->all();
            foreach ($data['kro_id'] as $key => $id) {
                // dd($data['ro'][1]);
                $datas['rspp_id'] = Kro::findOrFail($id)->rspp_id;
                $datas['kro_id'] = $id;
                $datas['code_ro'] = $data['code_ro'][$key];
                $datas['ro'] = $data['ro'][$key];
                $ro = Ro::create($datas);
            }

            return redirect()->back()->with('success', 'Berhasil Input RO');
        } catch (\Throwable $th) {
            return redirect()->back()->with('danger', $th);
        }
    }

    public function storekomponen(Request $request)
    {
        try {
            $data = $request->all();
            foreach ($data['ro_id'] as $key => $id) {
                // dd($data['ro'][1]);
                $datas['ro_id'] = $id;
                $datas['rspp_id'] = Ro::findOrFail($id)->rspp_id;
                $datas['code'] = $data['code'][$key];
                $datas['name'] = $data['name'][$key];
                $komponen = Komponen::create($datas);
            }
            
            return redirect()->back()->with('success', 'Berhasil Input Komponen');
        } catch (\Throwable $th) {
            return redirect()->back()->with('danger', $th);
        }
    }

    public function storeSubKomponen(Request $request)
    {
        $data = $request->all();
        foreach ($data['komponen_id'] as $key => $id) {
            // dd($data['ro'][1]);
            $datas['komponen_id'] = $id;
            $datas['rspp_id'] = Komponen::findOrFail($id)->rspp_id;
            $datas['name'] = $data['name'][$key];
            $datas['qty'] = $data['qty'][$key];
            $datas['uom'] = $data['uom'][$key];
            $datas['price'] = $data['price'][$key];
            $datas['amount'] = $data['amount'][$key];
            $subKomponen = SubKomponen::create($datas);
        }
        
        return redirect()->back()->with('success', 'Berhasil Input Komponen');
        try {
        } catch (\Throwable $th) {
            return redirect()->back()->with('danger', $th);
        }
    }
}
