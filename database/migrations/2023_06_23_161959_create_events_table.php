<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('title');
            $table->double('price')->unsigned();
            $table->date('date');
            $table->time('time');
            $table->double('duration')->unsigned();
            $table->text('location');
            $table->string('organiser_id');
            $table->bigInteger('category_id')->unsigned();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('organiser_id')
                ->references('id')
                ->on('organisers')
                ->cascadeOnUpdate();

            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
