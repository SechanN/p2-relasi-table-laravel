<?php

namespace Database\Seeders;

use App\Models\Jabatan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $data = [
            [
                'jabatan' => 'Manager',
            ],
            [
                'jabatan' => 'Direktur',
            ],
            [
                'jabatan' => 'Sekretaris',
            ],
            [
                'jabatan' => 'HRD',
            ],
        ];

        foreach($data as $key ) {
            Jabatan::insert($key);
        }
    }
}
