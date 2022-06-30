<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoiceInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice_infos', function (Blueprint $table) {
            $table->id();
            $table->integer('invoice_id')->index('invoice_id');
            $table->string('charge_for',256)->nullable();
            $table->string('charge_to',256)->nullable();
            $table->string('send_to',256)->nullable();
            $table->string('send_copy_to',256)->nullable();
            $table->string('charge_phone',256)->nullable();
            $table->string('invoice_no',256)->nullable();
            $table->string('payment_method',256)->nullable();
            $table->date('start_date')->nullable();
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
        Schema::dropIfExists('invoice_infos');
    }
}
