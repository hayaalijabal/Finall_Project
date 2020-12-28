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
        $this->call(UserSeed::class);
        $this->call(CategorySeed::class);
         $this->call(GirlsSeed::class);
        $this->call(BoysSeeder::class);
        $this->call(IntelligentGamesSeed::class);
        $this->call(CartSeed::class);
        $this->call(ProductSeed::class);
        $this->call(RolsSeed::class);
        $this->call(RolsUserSeed::class);
        $this->call(ImageSeeder::class);


    }
}
