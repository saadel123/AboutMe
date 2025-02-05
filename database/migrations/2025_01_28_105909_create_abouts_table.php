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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('title_fr')->nullable();
            $table->string('title_de')->nullable();
            $table->string('title_en')->nullable();
            $table->string('headline_fr')->nullable();
            $table->string('headline_en')->nullable();
            $table->string('headline_de')->nullable();
            $table->string('location_fr')->nullable();
            $table->string('location_en')->nullable();
            $table->string('location_de')->nullable();
            $table->text('description_fr')->nullable();
            $table->text('description_en')->nullable();
            $table->text('description_de')->nullable();
            $table->text('portfolio_description_fr')->nullable();
            $table->text('portfolio_description_en')->nullable();
            $table->text('portfolio_description_de')->nullable();
            $table->text('certificate_description_fr')->nullable();
            $table->text('certificate_description_en')->nullable();
            $table->text('certificate_description_de')->nullable();
            $table->string('diploma_fr')->nullable();
            $table->string('diploma_en')->nullable();
            $table->string('diploma_de')->nullable();
            $table->text('experince_fr')->nullable();
            $table->text('experince_en')->nullable();
            $table->text('experince_de')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('fullname')->nullable();
            $table->integer('age')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('about');
    }
};
