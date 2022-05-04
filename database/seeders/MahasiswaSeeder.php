<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswas')->insert([
            'nama' => 'Joshua Jevon Irawan',
            'nim' => '2540121562',
            'umur' => '18',
            'tanggal' => '2003-10-05',
            'kota' => 'Surakarta',
            'jurusan' => 'Computer Science'
        ]);

        DB::table('mahasiswas')->insert([
            'nama' => 'Nathanael Juan Gauthama',
            'nim' => '123456789',
            'umur' => '19',
            'tanggal' => '2003-06-10',
            'kota' => 'Jakarta',
            'jurusan' => 'Food Tech'
        ]);

        DB::table('mahasiswas')->insert([
            'nama' => 'Johan Victor Mardianto',
            'nim' => '987654321',
            'umur' => '19',
            'tanggal' => '2003-08-14',
            'kota' => 'Surabaya',
            'jurusan' => 'Dokter Hewan'
        ]);

        DB::table('mahasiswas')->insert([
            'nama' => 'Jason Jonathan Lairenz',
            'nim' => '4312567809',
            'umur' => '19',
            'tanggal' => '2003-05-12',
            'kota' => 'Makassar',
            'jurusan' => 'Information System'
        ]);

        DB::table('mahasiswas')->insert([
            'nama' => 'Ariel Lael Wijaya',
            'nim' => '7869538124',
            'umur' => '20',
            'tanggal' => '2001-02-13',
            'kota' => 'Bali',
            'jurusan' => 'Sastra Inggris'
        ]);

        DB::table('mahasiswas')->insert([
            'nama' => 'Justin Yuwono Suryo',
            'nim' => '3456246426',
            'umur' => '20',
            'tanggal' => '2003-01-10',
            'kota' => 'Bandung',
            'jurusan' => 'Business Math'
        ]);
    }
}
