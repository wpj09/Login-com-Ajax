<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Str;

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
            'name' => 'Willian',
            'email' => 'wpjwpj09@gmail.com',
            'password' => bcrypt('admin'),
            'remember_token' => Str::random(100)
        ]);
        \Illuminate\Support\Facades\DB::table('users')->insert([
            'name' => 'Michael',
            'email' => 'michaalvesreino@gmail.com',
            'password' => bcrypt('admin'),
            'remember_token' => Str::random(100)
        ]);
        \Illuminate\Support\Facades\DB::table('users')->insert([
            'name' => 'Rodrigo',
            'email' => 'rodrigollrdglucas@gmail.com',
            'password' => bcrypt('admin'),
            'remember_token' => Str::random(100)
        ]);
        \Illuminate\Support\Facades\DB::table('users')->insert([
            'name' => 'Pedro',
            'email' => 'pedrohenriquegd2016@gmail.com',
            'password' => bcrypt('admin'),
            'remember_token' => Str::random(100)
        ]);
    }
}
