<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LevelController extends Controller
{
    public function index()
    {
        // //Tambah data
        //DB::insert('insert into m_level(level_kode, level_nama, created_at) values(?, ?, ?)', ['cus', 'pelanggan', now()]);
        //return 'Insert data baru berhasil';

        // //Update data
        //$row = DB::update('updatem_level set level_nama = ? where level_kode = ?', ['customer', 'CUS']);
        //return 'Update data berhasil. Jumlah data yang diupdate: ' . $row. 'baris';

        // //Delete data
        //$row = DB::delete('delete from m_level where level_kode=?',['cus']);
        //return 'delete data berhasil, jumlah data yang dihapus' .$row. 'baris';

       $data = DB::select('select * from m_level');
        return view( 'level',['data'=>$data]);
    }
}
