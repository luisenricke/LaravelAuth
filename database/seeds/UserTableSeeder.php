<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Luis Villalobos';
        $user->email = 'luis.villalobos@prueba.com';
        $user->password = bcrypt('password');
        $user->email_verified_at = now();
        $user->remember_token = Str::random(10);
        $user->save();

        factory(User::class, 4)->create();
    }
}
