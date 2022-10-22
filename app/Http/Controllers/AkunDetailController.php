<?php

namespace App\Http\Controllers;

use App\Models\Akun;
use App\Models\AkunDetail;
use Illuminate\Http\Request;

class AkunDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = AkunDetail::get();

        return view('akun_detail.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Akun::get();

        return view('akun_detail.create', ['data' => $data]);
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

            $create = AkunDetail::create($data);

            return redirect()->route('akun-detail.index')->with('success', 'Berhasil Input Data');
        } catch (\Throwable $th) {
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
        $data = AkunDetail::findOrFail($id);
        $akun = Akun::get();

        return view('akun_detail.edit', ['data' => $data, 'akun' => $akun]);
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
            
            $role = AkunDetail::findOrFail($id)->update($data);

            return redirect()->route('akun-detail.index')->with('success', 'Berhasil Ubah Data');
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
            $data = AkunDetail::findOrFail($id)->delete();
    
            return redirect()->back()->with('success', 'Berhasil Hapus Data');
        } catch (\Throwable $th) {
            return redirect()->back()->with('danger', $th);
        }
    }

    public function akunDetailCreate2($id)
    {
        try {
            $data = Akun::findOrFail($id);
    
            return view('ruhBelanja.createAkunDetail', ['data' => $data]);
        } catch (\Throwable $th) {
            return redirect()->back()->with('danger', $th);
        }
    }

    public function akunDetailStore2(Request $request)
    {
        $data = $request->all();
        foreach ($data['akun_id'] as $key => $id) {
            try {
                $datas['akun_id'] = $id;
                $datas['name'] = $data['name'][$key];
                $datas['price'] = $data['price'][$key];
                $datas['qty'] = $data['qty'][$key];
                $datas['category'] = $data['category'][$key];
                $datas['uom'] = $data['uom'][$key];
                $datas['address'] = $data['address'][$key];
                $subKomponen = AkunDetail::create($datas);
            } catch (\Throwable $th) {
                continue;
            }
        }
        
        return redirect()->back()->with('success', 'Berhasil Input Komponen');
        // try {
        // } catch (\Throwable $th) {
        //     return redirect()->back()->with('danger', $th);
        // }
    }
}
