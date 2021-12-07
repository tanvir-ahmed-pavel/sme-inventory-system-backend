<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        Call All the Seeder

        //        User Seed

        $this->call(UserSeeder::class);

        //        Item Group Seed

//        $this->call(ItemGroupSeeder::class);

        //        Supplier Group Seed

//        $this->call(SupplierGroupSeeder::class);

        //        Customer Group Seed

//        $this->call(CustomerGroupSeeder::class);

        //        Country Seed

//        $this->call(CountrySeeder::class);

        //        Chart of Account Type Seed

//        $this->call(ChartOfAcTypeSeeder::class);

        //        Warehouse Seed

//        $this->call(WarehouseSeeder::class);

        //        UOM Seed

//        $this->call(UomSeeder::class);

    }
}
