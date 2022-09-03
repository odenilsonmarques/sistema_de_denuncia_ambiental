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
            $table->string('number')->nullable();
            $table->string('reference_point')->nullable();
            $table->string('violator')->nullable();
            $table->string('annex_one');
            $table->string('annex_two')->nullable();
            $table->string('annex_three')->nullable();
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
