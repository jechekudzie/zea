<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user_categories = include __DIR__.'/UserCategoriesSeeder.php';
        DB::table('user_categories')->insert($user_categories);
    }
}
