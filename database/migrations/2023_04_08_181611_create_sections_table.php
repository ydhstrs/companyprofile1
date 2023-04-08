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
        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            $table->string('typelanding');
            $table->integer('typesection');
            $table->string('title1')->nullable();
            $table->string('title2')->nullable();
            $table->string('title3')->nullable();
            $table->text('desc1')->nullable();
            $table->text('desc2')->nullable();
            $table->text('desc3')->nullable();
            $table->string('subtitle1')->nullable();
            $table->string('subtitle2')->nullable();
            $table->string('subtitle3')->nullable();
            $table->text('subdesc1')->nullable();
            $table->text('subdesc2')->nullable();
            $table->text('subdesc3')->nullable();
            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            $table->tinyInteger('withlist')->default(0);
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
        Schema::dropIfExists('sections');
    }
};
