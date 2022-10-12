<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_subscriptions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('member_id');
            $table->unsignedBigInteger('member_category_id');
            $table->unsignedBigInteger('compliance_status_id')->default(1);
            $table->string('period');
            $table->boolean('certificate_issued')->default(0);//0 is no 1 is  yes
            $table->boolean('invoice_sent')->default(0);//0 is no 1 is  yes
            $table->timestamp('activation_date')->nullable();//0 is no 1 is  yes
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
        Schema::dropIfExists('member_subscriptions');
    }
}
