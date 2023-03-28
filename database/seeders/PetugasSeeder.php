<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Petugas;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PetugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $petugas = [
            [
                'nama_petugas' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('12345678'),
                'level' => 'admin',
                'telp' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_petugas' => 'John Doe',
                'email' => 'john@gmail.com',
                'password' => Hash::make('12345678'),
                'level' => 'petugas',
                'telp' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_petugas' => 'Jane Dunn',
                'email' => 'jane@gmail.com',
                'password' => Hash::make('12345678'),
                'level' => 'petugas',
                'telp' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        Petugas::insert($petugas);
    }
}
