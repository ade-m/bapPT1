<?php
use App\Models\mahasiswa;
?>
@extends('layouts.app2')

@section('brd1','Mahasiswa')
@section('brd2','Mahasiswa')
@section('title','Mahasiswa')
@section('content')
    <div>
        <p style="text-align:center; font-size: 48px; margin-top:36px; font-weight: bold">DATA MAHASISWA</p>    
        <div class="d-flex justify-content-center">
            <table class="table table-bordered table-hover">
                <tr>
                    <th>ID</th>
                    <th>StudentID</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                    <th>Tahun Masuk</th>
                </tr>
                <tr>
         
                    @foreach ($mahasiswas as $mahasiswa )
                        <tr>
                            <td>{{ $mahasiswa->id }}</td>
                            <td>{{ $mahasiswa->studentID }}</td>
                            <td>{{ $mahasiswa->nama }}</td>
                            <td>{{ $mahasiswa->jurusan }}</td>
                            <td>{{ $mahasiswa->tahunMasuk }}</td>
                        </tr>
                    @endforeach
                
                    
                </tr>
               
            </table>
        </div>
    </div>

@endsection



