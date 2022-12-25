<?php

use App\District;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('districts')->insertOrIgnore(
            json_decode(file_get_contents(storage_path('app/districts-and-codes.json')), true)
        );
    }
}
