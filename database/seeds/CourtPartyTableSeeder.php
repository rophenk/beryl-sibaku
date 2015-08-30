<?php

use Illuminate\Database\Seeder;

class CourtPartyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('court_party')->delete();
        DB::table('court_party')->insert([
            'id'            => 1,
            'uuid'			=> 'f031dc16-f961-425f-94f2-ca6fb686e633',
            'name'          => 'Penggugat',
            'side'   		=> 1
        ]);
        DB::table('court_party')->insert([
            'id'            => 2,
            'uuid'			=> '65bc3dce-69eb-436c-b21e-7f6ad5aed3b0',
            'name'          => 'Tergugat',
            'side'   		=> 2
        ]);
        DB::table('court_party')->insert([
            'id'            => 3,
            'uuid'			=> '5bff5239-816c-4a64-b49d-89db3a41e5a9',
            'name'          => 'Para Penggugat',
            'side'   		=> 1
        ]);
        DB::table('court_party')->insert([
            'id'            => 4,
            'uuid'			=> '01a0ca34-4b3a-4c35-aaa7-1d64dd0f67e7',
            'name'          => 'Turut Tergugat',
            'side'   		=> 2
        ]);
        DB::table('court_party')->insert([
            'id'            => 5,
            'uuid'			=> 'dfe47da3-1355-4533-9fa8-e71097bbe13e',
            'name'          => 'Penggugat Intervensi',
            'side'   		=> 1
        ]);
        DB::table('court_party')->insert([
            'id'            => 6,
            'uuid'			=> 'b7f69609-0697-4345-ab6b-f9be20b3125a',
            'name'          => 'Tergugat Intervensi',
            'side'   		=> 2
        ]);
        DB::table('court_party')->insert([
            'id'            => 7,
            'uuid'			=> '31b86ba7-382e-40b9-9c88-1761c1957719',
            'name'          => 'Pelawan',
            'side'   		=> 1
        ]);
        DB::table('court_party')->insert([
            'id'            => 8,
            'uuid'			=> '21660789-df2c-4396-ae57-6534a36b539c',
            'name'          => 'Terlawan',
            'side'   		=> 2
        ]);
        DB::table('court_party')->insert([
            'id'            => 9,
            'uuid'			=> '02494e0a-4c09-4329-bb02-8d8dcbff898f',
            'name'          => 'Turut Terlawan',
            'side'   		=> 2
        ]);
        DB::table('court_party')->insert([
            'id'            => 10,
            'uuid'			=> 'c2f8b9f9-28b7-4b76-ad13-921a2cf203f8',
            'name'          => 'Pemohon',
            'side'   		=> 1
        ]);
        DB::table('court_party')->insert([
            'id'            => 11,
            'uuid'			=> '3251f735-030e-4135-97a8-562a19434c19',
            'name'          => 'Termohon',
            'side'   		=> 2
        ]);
    }
}
