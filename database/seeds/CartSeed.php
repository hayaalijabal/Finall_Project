<?php

use Illuminate\Database\Seeder;

class CartSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Cart::class,3)->create();
    }
}
