<?php

namespace Database\Seeders;

use App\Models\Ppdb;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class seed_ppdb extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ppdb::create([
            'id' => Uuid::uuid4()->toString(),
            'code' => rand(10, 5000),
            'nama' => 'Sifulan',
            'jenis_kelamin' => 'Laki - Laki',
            'tempat_lahir' => 'Indramayu',
            'Tanggal_lahir' => Carbon::create(2000, 02, 25),
            'asal_sekolah' => 'SMP N Losarang',
            'no_hp_siswa' => '08129005000',
            'no_hp_wali' => '08120003000',
            'alamat' => 'JL Raya Losarang No 11 Losarang Indramayu',
            'program_keahlian' => 'TPFL',
            'referensi' => 'Maman',
            'tapel' => '2022'
        ]);
        Ppdb::create([
            'id' => Uuid::uuid4()->toString(),
            'code' => rand(10, 5000),
            'nama' => 'pitri',
            'jenis_kelamin' => 'Perempuan',
            'tempat_lahir' => 'Indramayu',
            'Tanggal_lahir' => Carbon::create(1999, 02, 25),
            'asal_sekolah' => 'SMP N Gabuswetan',
            'no_hp_siswa' => '081280009000',
            'no_hp_wali' => '081250007000',
            'alamat' => 'JL Raya Gabuswetan No 17 Kandanghaur Indramayu',
            'program_keahlian' => 'TBSM',
            'referensi' => 'Lukman',
            'tapel' => '2022'
        ]);
    }
}
