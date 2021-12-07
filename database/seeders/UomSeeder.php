<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('umo')->insert([
            [
                'uom_name' => 'Ton',
                'uom_short_name' => 'Ton',
                'uom_status' => '1',
                'created_by' => '1',
            ],
            [
                'uom_name' => 'CFT.',
                'uom_short_name' => 'CFT.',
                'uom_status' => '1',
                'created_by' => '1',
            ]
        ]);
    }
}
