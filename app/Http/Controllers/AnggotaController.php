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
        $anggota->nip='1232341';
        $anggota->nama='faiz';
        $anggota->tanggal_lahir='2003-06-21';
        $anggota->nilai='3.4';
        $anggota->save();
        echo "data berhasil disimpan";
    }
    public function update(){
        $anggota = Anggota::find(5);
        $anggota->nama= 'siti';
        $anggota->nilai='3.0';
        $anggota->save();
        echo "data berhasil diupdate";
    }

    public function delete(){
        $anggota = Anggota::find(5);
        $anggota->delete();
        echo " data berhasil di hapus";
    }

    public function all(){
        $result= Anggota::all();
        return view('tampilkan_anggota',['anggotas'=>$result]);
    }

    public function find(){
        $result= Anggota::find(9);
        return view('tampilkan_anggota',['anggotas'=>[$result]]);
    }
}
