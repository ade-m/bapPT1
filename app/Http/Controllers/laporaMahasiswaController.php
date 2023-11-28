<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mahasiswa;
use App\Models\Item;
use App\Models\matakuliah;
use PDF;

class laporaMahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //tarik data mahasiswa
        $mahasiswa = mahasiswa::all();
        return view('laporan/mahasiswa',['mahasiswa'=>$mahasiswa]);
    }
    public function cetak_pdf()
    {
        //tarik data mahasiswa
        $mahasiswa = mahasiswa::all();
        $item = Item::all();
        $matakuliah = matakuliah::all();
        $pdf = PDF::loadview('laporan/mahasiswapdf',['mahasiswa'=>$mahasiswa,'item'=>$item, 'matakuliah'=>$matakuliah]);
        return $pdf->download('laporan-mahasiswa-pdf');
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
}
