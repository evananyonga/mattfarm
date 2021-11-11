<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->char('house_id', 50)->unique();
            $table->char('name', 100);
            $table->date('date_of_birth')->nullable();
            $table->date('date_of_purchase')->nullable();
            $table->char('gender')->nullable();
            $table->char('source', 100)->nullable();
            $table->char('primary_colour', 50)->nullable();
            $table->char('secondary_colour', 50)->nullable();
            $table->char('status', 50)->nullable();
            $table->text('breed', 100)->nullable();
            $table->longText('medical_notes')->nullable();
            $table->date('last_deworming_date')->nullable();
            $table->text('unique_markings')->nullable();
            // $table->foreign('owner_id')->references('id')->on('owner');
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
        Schema::dropIfExists('animals');
    }
}
