<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Veri Iswanto',
            'email' => 'veriiswanto@outlook.com',
            'password' => bcrypt('Veriiswant0'),
            'role' => 'admin'
        ]);
    }
}
