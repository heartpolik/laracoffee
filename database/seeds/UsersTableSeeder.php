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
            'name' => str_random(10).' '.str_random(15),
            'login'=> str_random(7),
            'email' => str_random(10).'@'.str_random(5).'.'.str_random(3),
            'password' => bcrypt('secret'),
            'phone'=> '+00(000)000000',
        ]);
        DB::table('users')->insert([
            'name' => str_random(10).' '.str_random(15),
            'login'=> str_random(7),
            'email' => str_random(10).'@'.str_random(5).'.'.str_random(3),
            'password' => bcrypt('secret'),
            'phone'=> '+00(000)000000',
        ]);
        DB::table('users')->insert([
            'name' => str_random(10).' '.str_random(15),
            'login'=> str_random(7),
            'email' => str_random(10).'@'.str_random(5).'.'.str_random(3),
            'password' => bcrypt('secret'),
            'phone'=> '+00(000)000000',
        ]);
    }
}
