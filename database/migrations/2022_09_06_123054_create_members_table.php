<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('name');//full name or institution name
            $table->unsignedBigInteger('member_category_id')->nullable();
            $table->unsignedBigInteger('identification_type_id')->nullable();
            $table->string('identification')->nullable();//ID number or Company reg number
            $table->string('member_registration_number')->nullable();
            $table->string('dob')->nullable();//date of birth or incorporation date
            $table->unsignedBigInteger('title_id')->nullable();
            $table->unsignedBigInteger('gender_id')->nullable();
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
        Schema::dropIfExists('members');
    }
}
