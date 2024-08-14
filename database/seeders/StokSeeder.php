<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'stok_id' => 1,
                'barang_id' => 1,
                'user_id' => 1,
                'stok_tanggal' => '2023-08-11',
                'stok_jumlah' => 150,
            ],
            [
            'stok_id' => 2,
            'barang_id' => 2,
            'user_id' => 2,
            'stok_tanggal' => '2023-09-11',
            'stok_jumlah' => 155,
            ],
            [
                'stok_id' => 3,
                'barang_id' => 3,
                'user_id' => 3,
                'stok_tanggal' => '2023-10-11',
                'stok_jumlah' => 115,
            ],
            [
                'stok_id' => 4,
                'barang_id' => 4,
                'user_id' => 1,
                'stok_tanggal' => '2023-11-11',
                'stok_jumlah' => 150,
            ],
            [
                'stok_id' => 5,
                'barang_id' => 5,
                'user_id' => 2,
                'stok_tanggal' => '2023-12-11',
                'stok_jumlah' => 60,
            ],
            [
                'stok_id' => 6,
                'barang_id' => 6,
                'user_id' => 3,
                'stok_tanggal' => '2024-01-11',
                'stok_jumlah' => 95,
            ],
            [
                'stok_id' => 7,
                'barang_id' => 7,
                'user_id' => 1,
                'stok_tanggal' => '2024-02-11',
                'stok_jumlah' => 90,
            ],
            [
                'stok_id' => 8,
                'barang_id' => 8,
                'user_id' => 2,
                'stok_tanggal' => '2024-03-11',
                'stok_jumlah' => 120,
            ],
            [
                'stok_id' => 9,
                'barang_id' => 9,
                'user_id' => 3,
                'stok_tanggal' => '2024-04-11',
                'stok_jumlah' => 240,
            ],
            [
                'stok_id' => 10,
                'barang_id' => 10,
                'user_id' => 1,
                'stok_tanggal' => '2024-05-11',
                'stok_jumlah' => 170,
            ],
        ];
        DB::table('t_stok')->insert($data);
    }
}