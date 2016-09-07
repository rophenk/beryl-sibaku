<?php

use Illuminate\Database\Seeder;

class CaseTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('case_type')->delete();
        DB::table('case_type')->insert([
            'id'            => 1,
            'uuid'			=> 'bc42877f-1289-41e1-4b2d-d6752017f386',
            'name'          => 'Pidana'
        ]);
        DB::table('case_type')->insert([
            'id'            => 2,
            'uuid'			=> '82a5eb4d-9c5e-438e-89c8-3cdcedee63a0',
            'name'          => 'Perdata'
        ]);
    }
}
