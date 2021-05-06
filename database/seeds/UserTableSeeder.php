<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('users')->insert([
            'name' => 'Willian Pereira de Jesus',
            'email' => 'wpjwpj09@gmail.com',
            'password' => bcrypt('admin')
        ]);
    }
}
