<?php

use Illuminate\Database\Seeder;

class CourtTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('court_type')->delete();
        DB::table('court_type')->insert([
            'id'            => 1,
            'uuid'			=> '4b2d877f-1289-41e1-bc42-d6752017f386',
            'name'          => 'Perdata',
            'alias'   		=> 'Perdata'
        ]);
        DB::table('court_type')->insert([
            'id'            => 2,
            'uuid'			=> '89c8eb4d-9c5e-438e-82a5-3cdcedee63a0',
            'name'          => 'Tata Usaha Negara',
            'alias'   		=> 'TUN'
        ]);
        DB::table('court_type')->insert([
            'id'            => 3,
            'uuid'			=> '3c4481e3-0a6e-4d97-a1a6-7bdbff3f5428',
            'name'          => 'Mahkamah Agung',
            'alias'   		=> 'MA'
        ]);
        DB::table('court_type')->insert([
            'id'            => 4,
            'uuid'			=> '3c4481e3-0a6e-4d97-a1a6-7bdbff3f5428',
            'name'          => 'Mahkamah Konstitusi',
            'alias'   		=> 'MK'
        ]);
    }
}
