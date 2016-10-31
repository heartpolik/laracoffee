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
            'name' => 'Vasya-admin',
            'email' => 'vasya@admin.com',
            'password' => bcrypt('admin'),
            'phone'=> '+11(111)1111111',
            'role_id'=> 1,
        ]);
        DB::table('users')->insert([
            'name' => 'Petya-seller',
            'email' => 'petya@seller.com',
            'password' => bcrypt('seller'),
            'phone'=> '+22(222)2222222',
        ]);
        DB::table('users')->insert([
            'name' => 'Sasha-buhgalter',
            'email' => 'sasha@buhgalter.com',
            'password' => bcrypt('buhgalter'),
            'phone'=> '+33(333)3333333',
        ]);
    }
}
