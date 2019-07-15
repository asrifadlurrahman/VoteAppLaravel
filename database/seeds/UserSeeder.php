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
        //
        DB::table('users')->insert([
            'name' => 'user1',
            'email' => 'user1@mail.com',
            'nik' => '19203182981',
            'dpd' => '1'
        ]);

        DB::table('users')->insert([
            'name' => 'user2',
            'email' => 'user2@mail.com',
            'nik' => '19203322981',
            'dpd' => '2'
        ]);

        DB::table('users')->insert([
            'name' => 'user3',
            'email' => 'user3@mail.com',
            'nik' => '19203182981',
            'dpd' => '3'
        ]);

        DB::table('users')->insert([
            'name' => 'user4',
            'email' => 'user4@mail.com',
            'nik' => '19203322981',
            'dpd' => '4'
        ]);

        DB::table('users')->insert([
            'name' => 'admin1',
            'email' => 'admin1@mail.com',
            'nik' => '19203182231',
            'role' => 'admin',
            'dpd' =>'1'
        ]);
    }
}
