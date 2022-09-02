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
        Schema::create('denunciation_anonymous', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->string('distric');
            $table->string('road');
            $table->string('number');
            $table->string('reference_point');
            $table->string('violator');
            $table->string('annex_one');
            $table->string('annex_two');
            $table->string('annex_three');
            $table->string('description');
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
        Schema::dropIfExists('denunciation_anonymous');
    }
};
