<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin' ,
            'email' => 'admin@app.com',
            'password' =>bcrypt('123'),
            'is_admin' => 1,
            'email_verified_at' => now(),
            'remember_token' => Str::random(20),
        ]);
        User::create([
            'name' => 'user' ,
            'email' => 'user@app.com',
            'password' =>bcrypt('123'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(20),
        ]);
//        $user = factory(App\User::class)->make();

    }

}
