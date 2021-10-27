<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori_Donasi;
use App\Ruang_Donasi;
class DonasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // sisi admin
    public function admin_index()
    {
        return view('admin.donasi.kategori');
    }

    public function admin_store(Request $request)
    {
        $file = $request->file('upload');
        $ext = $file->getClientOriginalName();
        
        $foto_name = date('YmdHis') . '.jpg';
        $upload_path = 'img/kategori';
        $file->move($upload_path, $foto_name);
        $store = Kategori_Donasi::insert([
            'nama_kategori' => $request->nama,
            'upload' => $foto_name,
        ]);
        return redirect('/admin/donasi/kategori')->with(['success' => 'Pesan Berhasil']);

    }

    public function admin_ruang()
    {
        $kategori = Kategori_Donasi::all();
        return view('admin.donasi.ruang_donasi', compact('kategori'));
    }
}
