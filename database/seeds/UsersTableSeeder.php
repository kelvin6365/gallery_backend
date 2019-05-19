<?php

use Illuminate\Database\Seeder;
use App\UserFavourite;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\User::class, 10)->create()->each(function ($user) {
            $user->userFavourite()->save(factory(UserFavourite::class)->make());
        });
    }
}
