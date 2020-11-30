<?php

use Illuminate\Database\Seeder;

class BoysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Boys::class,3)->create();
    }
}
