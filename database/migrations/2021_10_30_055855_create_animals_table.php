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
            $table->string('animal_name')->nullable(false);
            $table->string('tag_id');
            $table->enum('gender', ['male', 'female'])->nullable(false);
            $table->string('tag_id');
            $table->date('arrival_date');
            $table->text('unique_descriptors');
            $table->foreignId('owned_by')->constrained('owners')->onDelete('cascade');
            $table->foreignId('animal_type')->constrained('species')->onDelete('cascade');
            $table->foreignId('status_id')->constrained()->onDelete('cascade');
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
