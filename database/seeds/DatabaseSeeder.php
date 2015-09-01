<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(InstansiTableSeeder::class);
        $this->call(ServerTableSeeder::class);
        $this->call(ApiTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(CourtTypeTableSeeder::class);
        $this->call(CourtLevelTableSeeder::class);
        $this->call(CourtPartyTableSeeder::class);

        Model::reguard();
    }
}
