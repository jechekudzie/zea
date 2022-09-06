<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompliancesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $compliance_statuses = include __DIR__.'/ComplianceSeeder.php';
        DB::table('compliance_statuses')->insert($compliance_statuses);
    }
}
