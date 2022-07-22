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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();

            // foreign key
            $table->integer('people_id')->nullable();
            $table->integer('position_id')->nullable();
            $table->integer('department_id')->nullable();

            $table->integer('POH')->nullable();//dalam kabupaten, luar kabupaten, luar pulau

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
        Schema::dropIfExists('employees');
    }
};
