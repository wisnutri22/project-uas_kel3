<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Tamuseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('tamu')->insert([
            'nama_tamu' => 'Aji',
            'alamat' => 'Cimahi',
            'email' => 'aji4@gmail.com',
            'telepon' => '086152612',
            'tujuan' => 'kunjungan',
            'tanggal' => '',
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
