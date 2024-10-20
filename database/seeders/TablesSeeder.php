<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 225; $i++) {
            DB::table('tables')->insert([
                'id'      => $i,           // Setting ID explicitly
                'active'  => 0,            // Default active value
                'name1'   => null,         // name1 is nullable
                'phone1'  => null,         // phone1 is nullable
                't1'      => 8,            // Default value for t1
                'name2'   => null,         // name2 is nullable
                'phone2'  => null,         // phone2 is nullable
                't2'      => null,         // t2 is nullable
            ]);
        }
    }
}
