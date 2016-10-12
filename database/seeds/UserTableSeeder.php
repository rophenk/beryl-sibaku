<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seed data untuk table users
        DB::table('users')->insert([
        'name' => 'Administrator',
        'email' => 'admin@sibankum.com',
        'password' => bcrypt('rahasia'),
        'instansi_id' => '1',
        'role_id' => '1',
        'api_token' => str_random(60)
        ]);
    }
}
