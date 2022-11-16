<?php

namespace App\Http\Controllers;

use App\Models\Akun;
use App\Models\AkunDetail;
use App\Models\AkunRuhBelanja;
use App\Models\Komponen;
use App\Models\Kro;
use App\Models\Ro;
use App\Models\Rspp;
use App\Models\RuhBelanja;
use App\Models\SubKomponen;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

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

            $dataRspp['code'] = "RAB-".now()->format('YmdHis').rand(10, 99);
            $rspp = Rspp::create($dataRspp);

            $data['rspp_id'] = $rspp->id;
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
            $data = RuhBelanja::findOrFail($id);
            $data->rspp->delete();
            $data->delete();
            Rspp::where('ruh_belanja_id', $id)->delete();
            AkunRuhBelanja::where('ruh_belanja_id', $id)->delete();
            
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
            $rspp = Rspp::findOrFail($id)->update($data);

            return redirect()->back()->with('success', 'Berhasil Input Program');
        } catch (\Throwable $th) {
            return redirect()->back()->with('danger', $th);
        }
    }

    public function insertAkun($id)
    {
        $data = RuhBelanja::findOrFail($id);
        $akun = Akun::get();

        return view('ruhBelanja.createAkun', ['data' => $data, 'akun' => $akun]);
    }

    public function exportPdf($id)
    {
        $document = RuhBelanja::findOrFail($id);

        $document['total'] = 0;
        foreach ($document->akunDetail as $ckey => $cvalue) {
            $qty = $cvalue->qty ?? 1;
            $qty2 = $cvalue->qty2 ?? 1;
            $qty3 = $cvalue->qty3 ?? 1;
            $price = $cvalue->price ?? 1;
            $document['total'] += $qty * $qty2 * $qty3 * $price;
        }

        $akunDetail = AkunDetail::where('ruh_belanja_id', $id)->get();
        // dd($akunDetail);

        // $pdf = PDF::loadView('exportpdf.full', ['document' => $document])->setOptions(['defaultFont' => 'sans-serif']);
        // return $pdf->setPaper('A4', 'horizontal')->download($document->pegawai->nama.'.pdf');
        return view('ruhBelanja.pdf', ['document' => $document]);
    }

    public function delAkunRuhBelanja($id)
    {
        try {
            $data = AkunRuhBelanja::findOrFail($id)->delete();
    
            return redirect()->back()->with('success', 'Berhasil Hapus Data');
        } catch (\Throwable $th) {
            return redirect()->back()->with('danger', $th);
        }
    }
}
