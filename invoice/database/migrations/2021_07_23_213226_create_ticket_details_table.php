<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket_details', function (Blueprint $table) {
            $table->id();
            $table->decimal('total_amount',10,2);
            $table->decimal('number_miles',10,2);
            $table->decimal('gas_price',10,2);
            $table->decimal('toll_garage_parking',10,2);
            $table->decimal('tip',10,2);
            $table->decimal('total_expense',10,2);
            $table->decimal('employee_wage_pre_tax',10,2)->nullable();
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
        Schema::dropIfExists('ticket_details');
    }
}
