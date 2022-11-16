<?php

namespace App\Http\Controllers;

use App\Models\Kro;
use Illuminate\Http\Request;

class KROController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Kro::orderBy('id', 'desc')->get();

        return view('kro.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kro.create');
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
            $role = Kro::create($data);

            return redirect()->route('kro.index')->with('success', 'Berhasil Input Data');
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
        $data = Kro::findOrFail($id);

        return view('kro.edit', ['data' => $data]);
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
            $role = Kro::findOrFail($id)->update($data);

            return redirect()->route('kro.index')->with('success', 'Berhasil Input Data');
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
            $data = Kro::findOrFail($id)->delete();
    
            return redirect()->back()->with('success', 'Berhasil Hapus Data');
        } catch (\Throwable $th) {
            return redirect()->back()->with('danger', $th);
        }
    }
}
