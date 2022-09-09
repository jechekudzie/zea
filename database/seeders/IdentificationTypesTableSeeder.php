<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IdentificationTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $identification_types = include __DIR__ . '/IdentificationTypesSeeder.php';
        DB::table('identification_types')->insert($identification_types);
    }
}
