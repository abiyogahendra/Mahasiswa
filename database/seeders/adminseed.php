<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class adminseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin')->insert([
            'email' => 'admin@sasuka.com',
            'username' => 'admin sasuka',
            'password' => bcrypt('sasuka')
        ]);
    }
}
