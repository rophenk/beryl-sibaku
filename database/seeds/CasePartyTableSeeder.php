<?php

use Illuminate\Database\Seeder;

class CasePartyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('case_party')->delete();
        DB::table('case_party')->insert([
            'id'            => 1,
            'case_id'		=> 1,
            'court_party_id' => 1,
            'instansi_id'   => 1,
            'case_number'   => 1,
            'name' 			=> 'Budi Gunawan',
            'description' 	=> 'Pemilik Modal Warnet GO SPEED'
        ]);
        DB::table('case_party')->insert([
            'id'            => 2,
            'case_id'		=> 1,
            'court_party_id' => 2,
            'case_number'   => 1,
            'instansi_id'   => 1,
            'name' 			=> 'Andi Suherman',
            'description' 	=> 'Pengelola Warnet GO SPEED'
        ]);
    }
}
