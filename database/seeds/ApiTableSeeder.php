<?php

use Illuminate\Database\Seeder;

class ApiTableSeeder extends Seeder
{
    

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // kosongkan data tabel API
        DB::table('api')->delete();
    
        //
        DB::table('api')->insert([
		'uuid' => 'de06c432-1b58-11e5-b92a-0800270088c7',
		'server_id' => '1',
		'name' => 'Contoh Sibankum' ,
		'type' => 'CSV',
		'address' => 'http://sibankum.pertanian.go.id/api/contohsibankum.csv'
		]);
    }
}
