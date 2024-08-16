<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        //menambahkan data menggunakan ORM
        // $data=
        // [
        //     'username'=>'Faizah',
        //     'nama'=>'faizah',
        //     'password'=>Hash::make('12345'),
        //     'user_id'=>4,
        //     'level_id'=>1
        // ];
        // UserModel::insert($data);

        //update
        // $data=[
        //     'nama'=>'faiz',
        // ];
        // UserModel::where('username','faizah')->update($data);

        //hapus data
        UserModel::where('username','Faizah')->delete();
        
        //coba akses model UserModel
        $user = UserModel::with('level')->get(); //ambil semua data dari tabel m_user
        return view('user', ['data'=> $user]);
    }
}
