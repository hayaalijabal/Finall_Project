<?php

use Illuminate\Database\Seeder;

class RolsUserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<100; $i++ ){
            \Illuminate\Support\Facades\DB::table('role_user')->insert([
                'User_id'=>\App\User::all()->random()->id,
                 'Rols_id'=>\App\Roles::all()->random()->id,

                ]

            );
        }
    }
}
