<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WarehouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('warehouse')->insert([
            [
                'warehouse_name' => 'Main Warehouse',
                'parent_id' => null,
                'warehouse_phone_no' => '0123456789',
                'warehouse_mobile_no' => '0123456789',
                'warehouse_address' => 'House No. #, Road No. #, Area, Dhaka, Bangladesh',
                'warehouse_city' => 'Dhaka',
                'warehouse_state' => 'Bangladesh',
                'warehouse_status' => '1',
                'created_by' => '1',
            ]
        ]);
    }
}
