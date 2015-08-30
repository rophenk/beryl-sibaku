<?php

use Illuminate\Database\Seeder;

class CourtLevelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('court_level')->delete();
        DB::table('court_level')->insert([
            'id'            => 1,
            'uuid'			=> '33dd5535-ef5a-42a5-9375-dbae35c7bf04',
            'name'          => 'Pengadilan Negeri'
        ]);
        DB::table('court_level')->insert([
            'id'            => 2,
            'uuid'			=> '004d016a-511f-456a-afca-85460db59f5e',
            'name'          => 'Pengadilan Tinggi (Banding)'
        ]);
        DB::table('court_level')->insert([
            'id'            => 3,
            'uuid'			=> '7bb23305-cd50-4ad5-a04a-2a1c2695aaf5',
            'name'          => 'Mahkamah Agung (Kasasi)'
        ]);
        DB::table('court_level')->insert([
            'id'            => 4,
            'uuid'			=> 'c579afe3-5213-433f-9919-5d2728da6501',
            'name'          => 'Mahkamah Agung (Peninjauan Kembali)'
        ]);
    }
}
