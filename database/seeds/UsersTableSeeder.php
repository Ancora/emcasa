<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // criar 3 usuários para testes
        // factory(\App\User::class, 3)->create();

        // gera 20 stores para cada user
        $users = \App\User::all();
        foreach ($users as $user) {
            $stores = factory(\App\Store::class, 10)->make();

            $user->stores()->saveMany($stores);
        }
    }
}
