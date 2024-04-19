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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('age');
            $table->string('address')->nullable();
            $table->string('mobile');
            $table->string('appointment_date');
            $table->enum('gender',['male','female','others']);
            $table->enum('appointment_type',['video','clinic']);
            $table->enum('payment_status', ['pending', 'paid'])->default('pending');
            $table->foreignId('doctor_id')->constrained()->onDelete("cascade");
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
        Schema::dropIfExists('appointments');
    }
};
