<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students
{
    private static $students = [
        [
            'id'     => '1',
            'nis'    => '038079',
            'nama'   => 'Fio Reyman',
            'kelas'  => '11 PPLG 2',
            'alamat' => 'jl. Durian Raya II',
        ],
        [
            'id'     => '2',
            'nis'    => '054161',
            'nama'   => 'Nori Gorwe',
            'kelas'  => '11 PPLG 2',
            'alamat' => 'jl. Semangka Selatan III ',
        ],
        [
            'id'     => '3',
            'nis'    => '024179',
            'nama'   => 'Mori Homori',
            'kelas'  => '11 PPLG 2',
            'alamat' => 'jl. Melon Utara I',
        ],
        [
            'id'     => '4',
            'nis'    => '018262',
            'nama'   => 'Yuta Pino',
            'kelas'  => '11 PPLG 2',
            'alamat' => 'jl. Salak Wetan II',
        ],
        [
            'id'     => '5',
            'nis'    => '038124',
            'nama'   => 'Reyhan Wota',
            'kelas'  => '11 PPLG 2',
            'alamat' => 'jl. Apel Raya IV',
        ],
    ];

    public static function all()
    {
        return self::$students;
    }
}
