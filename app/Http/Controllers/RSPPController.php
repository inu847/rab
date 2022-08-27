<?php

namespace App\Http\Controllers;

use App\Models\Rspp;
use Illuminate\Http\Request;

class RSPPController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Rspp::orderBy('id', 'desc')->get();

        return view('rspp.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rspp.create');
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
            $role = Rspp::create($data);

            return redirect()->route('rspp.index')->with('success', 'Berhasil Input Data');
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
        $data = Rspp::findOrFail($id);

        return view('rspp.edit', ['data' => $data]);
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
            $role = Rspp::findOrFail($id)->update($data);

            return redirect()->route('rspp.index')->with('success', 'Berhasil Input Data');
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
            $data = Rspp::findOrFail($id)->delete();
    
            return redirect()->back()->with('success', 'Berhasil Hapus Data');
        } catch (\Throwable $th) {
            return redirect()->back()->with('danger', $th);
        }
    }
}
