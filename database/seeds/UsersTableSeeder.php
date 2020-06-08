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
          "name"=>'manager',
          "email"=>'manager@gmail.com',
          "password"=>bcrypt('12345678'),
          "role_id"=>1,
          "phone"=>'123456',
          "location"=>'dhaka'
        ]);


        DB::table('users')->insert([
          "name"=>'employee',
          "email"=>'employee@gmail.com',
          "password"=>bcrypt('12345678'),
          "role_id"=>2,
          "phone"=>'123456',
          "location"=>'dhaka'
        ]);
    }
}
