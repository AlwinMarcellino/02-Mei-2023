<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControllerBimbingan extends Controller
{
    public function listbimbingan(){

        $hasil = DB::SELECT("SELECT mahasiswa.nama, mahasiswa.npm, mahasiswa.no_hp, bimbingan.jenis_bimbingan, bimbingan.materi_bimbingan, bimbingan.tanggal_bimbingan, dosen.kode_dosen, dosen.nama_dosen FROM mahasiswa inner join bimbingan on mahasiswa.id = bimbingan.mahasiswa_id inner join dosen on dosen.id = bimbingan.dosen_id" );
        return view('listbimbingan', ['allbimbingan' => $hasil]);

    }
}
