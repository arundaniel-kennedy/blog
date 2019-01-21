<?php

use Illuminate\Database\Seeder;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $user = App\User::create([
        'name' => 'AD',
        'email'=> 'ad@admin.me',
        'password' => bcrypt('password'),
        'admin'=> 1
      ]);

      App\Profile::create([
        'user_id' => $user->id,
        'about' => 'Controlling admin',
        'facebook' => 'nothing',
        'youtube' => 'nothing',
        'avatar' => '/uploads/avatars/1.png'
      ]);
    }
}
