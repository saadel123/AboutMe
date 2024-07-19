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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title_fr')->nullable();
            $table->string('title_en')->nullable();
            $table->string('title_de')->nullable();
            $table->string('description_fr')->nullable();
            $table->longText('description_en')->nullable();
            $table->longText('description_de')->nullable();
            $table->string('image')->nullable();
            $table->string('link')->nullable();
            $table->string('github_link')->nullable();
            $table->string('video')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
};
