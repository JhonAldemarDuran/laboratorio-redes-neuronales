<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('users')->insert([
            [
                "name" => "jhon",
                "email" => "jadurang@uqvirtual.edu.co",
                "password" =>bcrypt('jhondis27'),
               # "role"=>"2",

            ]

        ]);
    }
}
