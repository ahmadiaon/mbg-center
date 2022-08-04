<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_contracts', function (Blueprint $table) {
            $table->id();

            // foreign key
            $table->integer('employee_id')->nullable();

            $table->integer('contract_status')->nullable();//pkwt-pkwtt
            $table->string('date_start_contract')->nullable();
            $table->string('date_end_contract')->nullable();
            $table->integer('long_contract')->nullable();
            $table->string('employee_status')->nullable();  //training - professional
            $table->string('employee_group')->nullable();    //worker - staff - mekanik   

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
        Schema::dropIfExists('employee_contracts');
    }
};
