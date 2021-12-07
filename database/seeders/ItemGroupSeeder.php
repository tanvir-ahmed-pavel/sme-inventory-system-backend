<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('item_group')->insert([
            [
                'item_group_name' => 'Item Group 1',
                'item_group_status' => '1',
                'created_by' => '1',
            ],
            [
                'item_group_name' => 'Item Group 2',
                'item_group_status' => '1',
                'created_by' => '1',
            ],
            [
                'item_group_name' => 'Item Group 3',
                'item_group_status' => '1',
                'created_by' => '1',
            ],
            [
                'item_group_name' => 'Item Group 4',
                'item_group_status' => '1',
                'created_by' => '1',
            ]
        ]);
    }
}
