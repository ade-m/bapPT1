<?php
use App\Models\mahasiswa;
?>
@extends('layouts.app')

@section('title','Mahasiswa')
@section('content')
    <div>
        <p style="text-align:center; font-size: 48px; margin-top:36px; font-weight: bold">DATA MAHASISWA</p>    
        <div class="d-flex justify-content-center">
            <table style="width:70%; margin-bottom: 24px">
                <tr>
                    <th>ID</th>
                    <th>StudentID</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                    <th>Tahun Masuk</th>
                </tr>
                <tr>
                    <?php
                        $mahasiswas = mahasiswa::all();
                        foreach ($mahasiswas as $mahasiswa ) {
                            echo '<tr>';
                            echo '<td>';
                            echo $mahasiswa->id;
                            echo '</td>';
                            echo '<td>';
                            echo $mahasiswa->studentID;
                            echo '</td>';
                            echo '<td>';
                            echo $mahasiswa->nama;
                            echo '</td>';
                            echo '<td>';
                            echo $mahasiswa->jurusan;
                            echo '</td>';
                            echo '<td>';
                            echo $mahasiswa->tahunMasuk;
                            echo '</td>';
                            echo '</tr>';
                        }
                    ?>
                    
                </tr>
               
            </table>
        </div>
    </div>

@endsection



