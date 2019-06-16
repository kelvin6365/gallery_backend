<?php

use Illuminate\Database\Seeder;
use App\UserFavourite;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

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
        factory(App\User::class, 9)->create()->each(function ($user) {
            $user->userFavourite()->save(factory(UserFavourite::class)->make());
         
        });
    }
}
