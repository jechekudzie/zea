<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('member_id');
            $table->unsignedBigInteger('member_subscription_id')->nullable();
            $table->string('period')->nullable();
            $table->double('amount_invoiced',8,2)->nullable();
            $table->double('amount_paid',8,2)->nullable();
            $table->double('balance',8,2)->nullable();
            $table->unsignedBigInteger('payment_method_id')->nullable();
            $table->string('reference_number')->nullable();
            $table->string('proof_of_payment')->nullable();
            $table->string('poll_url')->nullable();
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
        Schema::dropIfExists('payments');
    }
}
