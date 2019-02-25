<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*\DB::table('users')->insert(array(
            'name' => "Alejandro",
            'email' => "alejo.mateus.ud@gmail.com",
            'password' => Hash::make("123456789")
        ));*/
        \DB::table('users')->insert(array(
            'name' => "Yojhan Rodriguez",
            'email' => "yojhanr95@gmail.com",
            'password' => Hash::make("123456789")
        ));
    }
}
