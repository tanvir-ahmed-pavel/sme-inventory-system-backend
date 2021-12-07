<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customer_group')->insert([
            [
                'customer_group_name' => 'Individual',
                'customer_group_status' => '1',
                'created_by' => '1',
            ],
            [
                'customer_group_name' => 'Company',
                'customer_group_status' => '1',
                'created_by' => '1',
            ]
        ]);
    }
}
