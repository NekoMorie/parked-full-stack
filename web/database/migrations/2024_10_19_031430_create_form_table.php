<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('form', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('file_diagnosa1')->nullable();
            $table->string('file_diagnosa2')->nullable();
            $table->string('file_diagnosa3')->nullable();
            $table->boolean('hasil_diagnosa1')->nullable();
            $table->boolean('hasil_diagnosa2')->nullable();
            $table->boolean('hasil_diagnosa3')->nullable();
            $table->enum('reminder_interval', ['weekly', 'monthly'])->nullable()->comment('Interval waktu pengingat: weekly atau monthly');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('form', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
        });
        Schema::dropIfExists('form');
    }
};
