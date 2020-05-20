<?php

use Illuminate\Database\Seeder;

class UsersEverlisttypesmastersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('everlistmasters')->delete();
        \DB::table('everlisttypes')->delete();
        \DB::table('users')->delete();

        factory(App\User::class, 5)->create()->each(function($u){
            $u->everlisttypes()
            ->saveMany(factory(App\Everlisttype::class, rand(1,3))->make()
        )
            ->each(function($m){
                $m->everlistmasters()->saveMany(factory(App\Everlistmaster::class, rand(1,4))->make());
            });
        

        });
    }
}
