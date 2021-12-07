<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('country')->insert([
            [
                'country_name' => 'Bangladesh',
                'country_short_name' => 'BD',
                'country_status' => '1',
                'created_by' => '1',
            ],
            [
                'country_name' => 'India',
                'country_short_name' => 'IND',
                'country_status' => '1',
                'created_by' => '1',
            ],
            [
                'country_name' => 'Bhutan',
                'country_short_name' => 'BTN',
                'country_status' => '1',
                'created_by' => '1',
            ]
        ]);
    }
}
