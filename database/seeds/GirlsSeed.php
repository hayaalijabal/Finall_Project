<?php

use Illuminate\Database\Seeder;

class GirlsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Girls::class,3)->create();
    }
}
