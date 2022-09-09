<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemberCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user_categories = include __DIR__ . '/MemberCategoriesSeeder.php';
        DB::table('member_categories')->insert($user_categories);
    }
}
