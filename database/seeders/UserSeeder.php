<?php

namespace Database\Seeders;


use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
               
                'name' => 'admin',
                'group' => 'admin',
              
                'password' =>  Hash::make('secret')
            ],
        ];

        DB::table('users')->insert($users);
    }
}
