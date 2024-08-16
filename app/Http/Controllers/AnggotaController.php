<?php

namespace App\Http\Controllers;
use App\Models\Anggota;

use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    //
    public function cekObject(){
        $anggota = new Anggota;
       
        dump($anggota);
    }
    public function insert(){
        $anggota = new Anggota;
        $anggota->nip='1234231';
        $anggota->nama='faizah';
        $anggota->tanggal_lahir='2002-06-21';
        $anggota->nilai='3.2';
        $anggota->save();
        echo "data berhasil disimpan";
    }
}
