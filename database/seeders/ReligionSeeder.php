<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReligionSeeder extends Seeder
{
    public function run()
    {
        //
        $users = [
            [
                'religion' => 'Islam'
            ],
            [
                'religion' => 'Kristen'
            ],
            [
                'religion' => 'Katolik'
            ],
            [
                'religion' => 'Hindu'
            ],
            [
                'religion' => 'Budha'
            ],
        ];

        DB::table('religions')->insert($users);
    }
}
