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
        Schema::create('dependents', function (Blueprint $table) {
            $table->id();

            // foreign key
            $table->integer('employee_id')->nullable(); 

            $table->string('mothers_name')->nullable();
            $table->string('father_name')->nullable();

            $table->string('mothers_in_law_name')->nullable();
            $table->string('father_in_law_name')->nullable();

            $table->string('couple_name')->nullable();
            $table->string('child1_name')->nullable();
            $table->string('child2_name')->nullable();
            $table->string('child3_name')->nullable();

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
        Schema::dropIfExists('dependents');
    }
};
