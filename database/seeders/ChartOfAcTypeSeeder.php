<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChartOfAcTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chart_of_account_type')->insert([
            [
                'account_type_name' => 'Current',
                'account_type_status' => '1',
                'created_by' => '1',
            ],
            [
                'account_type_name' => 'Saving',
                'account_type_status' => '1',
                'created_by' => '1',
            ]
        ]);
    }
}
