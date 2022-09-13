<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin1',
            'email' => 'admin1@admin.com',
            'telp' => '097869708',
            'role' => '1',
            'password' => bcrypt('12345678'),
        ],
        [
            'name' => 'admin2',
            'email' => 'admin2@admin.com',
            'telp' => '987659',
            'role' => '1',
            'password' => bcrypt('12345678'),
        ],
        [
            'name' => 'resepsionis',
            'email' => 'resepsionis@gmail.com',
            'telp' => '098767890',
            'role' => '2',
            'password' => bcrypt('12345678'),
        ]);
    }
}