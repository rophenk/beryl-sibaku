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
        'case_type_id' => '2',
        'court_type_id' => '1',
		'uuid' => '2c500087-a6c7-4e93-8276-46f3c1f0e133',
        'api_id' => '1',
		'number' => '1',
        'work_unit' => 'Tes Unit Kerja',
        'case_number' => '2304/PDT/CPA/2015' ,
		'principal' => 'Utang Piutang Modal Usaha',
        'object' => 'Tes Object Perkara',
        'proposal' => 'Tes Pokok Permohonan',
        'address' => 'http://sibankum.pertanian.go.id/sample/case1.pdf',
        'instansi_id' => '1',
        'availability' => 'available'
		]);
    }
}
