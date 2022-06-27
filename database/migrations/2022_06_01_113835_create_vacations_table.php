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
        Schema::create('vacations', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('vacation_categories')->onDelete('cascade');
            $table->string('name_uz')->nullable();
            $table->string('name_ru')->nullable();
            $table->string('name_en')->nullable();
            $table->string('company')->nullable();
            $table->string('photo')->nullable();
            $table->text('duty_uz')->nullable();
            $table->text('duty_ru')->nullable();
            $table->text('duty_en')->nullable();
            $table->text('requirements_uz')->nullable();
            $table->text('requirements_ru')->nullable();
            $table->text('requirements_en')->nullable();
            $table->text('condition_uz')->nullable();
            $table->text('condition_ru')->nullable();
            $table->text('condition_en')->nullable();
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
        Schema::dropIfExists('vacations');
    }
};
