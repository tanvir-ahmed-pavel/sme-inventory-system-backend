<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('supplier_group')->insert([
            [
                'supplier_group_name' => 'Individual',
                'supplier_group_status' => '1',
                'created_by' => '1',
            ],
            [
                'supplier_group_name' => 'Company',
                'supplier_group_status' => '1',
                'created_by' => '1',
            ]
        ]);
    }
}
