<?php

use Illuminate\Database\Seeder;

class CaseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // kosongkan data tabel Server
        DB::table('case')->delete();

        //
        DB:: table('case') -> insert([
        'court_type_id' => '1',
		'uuid' => '2c500087-a6c7-4e93-8276-46f3c1f0e133',
		'number' => '1',
        'work_unit' => 'Tes Unit Kerja',
        'case_number' => '2304/PDT/CPA/2015' ,
		'principal' => 'Tes Pokok Perkara',
        'object' => 'Tes Object Perkara',
        'proposal' => 'Tes Pokok Permohonan'
		]);
    }
}
