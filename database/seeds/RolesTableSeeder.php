<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'Admin',
            'alias' => 'Адміністратор',
        ]);
        DB::table('roles')->insert([
            'name' => 'Seller',
            'alias' => 'Продавець',
        ]);
        DB::table('roles')->insert([
            'name' => 'Booker',
            'alias' => 'Бухгалтер',
        ]);
    }
}
