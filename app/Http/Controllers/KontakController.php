<?php

namespace App\Http\Controllers;

use App\Models\kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = kontak::all();
        return view('tampil',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //menampilkan form baru
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kontak = new kontak();
        $kontak->nama=$request->name;
        $kontak->nim=$request->nim;
        $kontak->gender=$request->gender;
        $kontak->email=$request->email;
        $kontak->agama=$request->agama;
        $kontak->prodi=$request->prodi;
        $kontak->hobi=implode(',',$request->hobi);
        $kontak->alamat=$request->alamat;
        $kontak->save();
        return redirect('kontak');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kontak  $kontak
     * @return \Illuminate\Http\Response
     */
    public function show(kontak $kontak)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kontak  $kontak
     * @return \Illuminate\Http\Response
     */
    public function edit(kontak $kontak)
    {
        return view('update', compact('kontak'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kontak  $kontak
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kontak $kontak)
    {
        $kontak->nama=$request->nama;
        $kontak->nim=$request->nim;
        $kontak->gender=$request->gender;
        $kontak->email=$request->email;
        $kontak->agama=$request->agama;
        $kontak->prodi=$request->prodi;
        $kontak->hobi=implode(',',$request->hobi);
        $kontak->alamat=$request->alamat;
        $kontak->save();
        return redirect('kontak');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kontak  $kontak
     * @return \Illuminate\Http\Response
     */
    public function destroy(kontak $kontak)
    {
          $kontak->delete();
          return redirect('kontak');
    }
}
