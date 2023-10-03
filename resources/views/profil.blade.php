@extends('layouts.app')

@section('title','Profil')
@section('content')
    <div>
        <p style="text-align:center; font-size: 48px; margin-top:36px; font-weight: bold">BIODATA</p>
        <div class="container" style="max-width:70%">
            <div class="row bold-font">
                <div class="col-3">
                    Nama
                </div>
                <div class="col-9">
                    : Jacky Angelo
                </div>
            </div>
            <div class="row bold-font">
                <div class="col-3">
                    Kelas
                </div>
                <div class="col-9">
                    : 21SI2
                </div>
            </div>
            <div class="row bold-font">
                <div class="col-3">
                    Tempat/Tanggal Lahir
                </div>
                <div class="col-9">
                    : Medan, 24 Desember 2002
                </div>
            </div>
            <div class="row bold-font">
                <div class="col-3">
                    NIM
                </div>
                <div class="col-9">
                    : 03081210013
                </div>
            </div>
            <div class="row bold-font">
                <div class="col-3">
                    Fakultas
                </div>
                <div class="col-9">
                    : Ilmu Komputer
                </div>
            </div>
            <div class="row bold-font" style="margin-bottom: 24px">
                <div class="col-3">
                    Prodi
                </div>
                <div class="col-9">
                    : Sistem Informasi
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <table style="width:70%; margin-bottom: 24px">
                <tr>
                    <th>Mata Kuliah</th>
                    <th>SKS</th>
                </tr>
                <tr>
                    <td>Dasar Manajemen Keuangan Perusahaan</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>Pemrograman Aplikasi Bisnis</td>
                    <td>4</td>
                </tr>
                <tr>
                    <td>Pemasaran Digital</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>Audit & control Sistem Informasi</td>
                    <td>4</td>
                </tr>
                <tr>
                    <td>Manajemen Strategis Perusahaan</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>Sistem Informasi Perusahaan</td>
                    <td>3</td>
                </tr>
            </table>
        </div>
    </div>

@endsection



