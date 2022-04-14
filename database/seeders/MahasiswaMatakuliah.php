<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class MahasiswaMatakuliah extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $matkulmhs = [
            [   'mahasiswa_id' => 1,
                'matakuliah_id'=>2,
                'nilai'=>'A',
            ],
            [   'mahasiswa_id' => 2,
                'matakuliah_id'=>1,
                'nilai'=>'C',
            ],
            [   'mahasiswa_id' => 4,
                'matakuliah_id'=>1,
                'nilai'=>'A',
            ],
            [   'mahasiswa_id' => 6,
                'matakuliah_id'=>3,
                'nilai'=>'B',
            ],
            [   'mahasiswa_id' => 7,
                'matakuliah_id'=>3,
                'nilai'=>'A',
            ],
            [   'mahasiswa_id' => 8,
                'matakuliah_id'=>4,
                'nilai'=>'B',
            ],
            [   'mahasiswa_id' => 9,
                'matakuliah_id'=>2,
                'nilai'=>'B',
            ],
            [   'mahasiswa_id' => 10,
                'matakuliah_id'=>3,
                'nilai'=>'C',
            ],
            [   'mahasiswa_id' => 11,
                'matakuliah_id'=>4,
                'nilai'=>'A',
            ],
        ];

        DB::table('mahasiswa_matakuliah')->insert($matkulmhs);
    }
}
