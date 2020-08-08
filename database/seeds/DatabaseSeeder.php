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
        // $this->call(UserSeeder::class);
        DB::table('users')->insert([
            'name' => 'Administrator',
            'email' => 'admin'.'@gmail.com',
            'password' => Hash::make('Midori1969'),
            'phone' => '5865675657'
        ]);
    }
}
