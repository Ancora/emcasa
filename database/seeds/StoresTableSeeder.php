<?php

use Illuminate\Database\Seeder;

class StoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stores = \App\Store::all();

        // Adiciona 5 produtos para cada loja já existente no banco
        foreach ($stores as $store) {
            $products = factory(\App\Product::class, 5)->make();

            $store->products()->saveMany($products);
        }
    }
}
