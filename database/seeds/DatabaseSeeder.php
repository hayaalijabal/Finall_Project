<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategorySeed::class);
         $this->call(GirlsSeed::class);
        $this->call(BoysSeeder::class);
        $this->call(IntelligentGamesSeed::class);
        $this->call(CustomerSeed::class);
        $this->call(CartSeed::class);

    }
}
