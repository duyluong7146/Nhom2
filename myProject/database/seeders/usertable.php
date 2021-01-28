<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class usertable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'username' => 'admin',
            'password' => bcrypt('123456'),
            'email' =>'duong',
            'role' => 'user'
        ];    
        DB::table('user')->insert($data);

    }
}
