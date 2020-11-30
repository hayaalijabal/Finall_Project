<?php

use Illuminate\Database\Seeder;

class IntelligentGamesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Inelligentgames::class,3)->create();
    }
}
