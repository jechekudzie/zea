<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberCategoryFeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_category_fees', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('member_category_id');
            $table->double('application_fee',10,2)->default(0);
            $table->double('registration_fee',10,2)->default(0);
            $table->double('subscription_fee',10,2)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('member_category_fees');
    }
}
