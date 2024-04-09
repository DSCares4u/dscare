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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('image')->nullable();
            $table->integer('age');
            $table->integer('mobile');
            $table->enum('gender',['male','female','others']);
            $table->string('specialization');
            $table->string('experience');
            $table->string('qualification');
            $table->integer('visiting_charge');
            $table->integer('online_charge');
            $table->json('preferred_day')->nullable();
            $table->string('landmark');
            $table->string('city');
            $table->string('state');
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
        Schema::dropIfExists('doctors');
    }
};
