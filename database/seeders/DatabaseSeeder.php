<?php

namespace Database\Seeders;

use App\Models\PaymentStatus;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
            PaymentStatusesTableSeeder::class,
            PaymentMethodsTableSeeder::class,
            CompliancesTableSeeder::class,
            MemberCategoriesTableSeeder::class,
            ProvincesTableSeeder::class,
            CitiesTableSeeder::class,
            IdentificationTypesTableSeeder::class,
            GendersTableSeeder::class,
            TitlesTableSeeder::class,
        ]);
    }
}
