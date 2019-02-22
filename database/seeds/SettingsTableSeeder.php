<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \App\Setting::create([
        'site_name' => 'Laravel Blog',
        'contact_email'=> 'ad@admin.me',
        'contact_number' => '9952056265',
        'address'=> '46,moorthinagar,chennai'
      ]);
    }
}
