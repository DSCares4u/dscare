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
        Schema::create('book_plans', function (Blueprint $table) {
            $table->id();
            $table->string('patient_name');
            $table->string('guardian_name');
            $table->string('mobile');
            $table->string('email');
            $table->enum('gender',['male','female','others']);
            $table->string('address');
            $table->foreignId('plan_id')->constrained()->onDelete("cascade");
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
        Schema::dropIfExists('book_plans');
    }
};
