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
    Schema::create('postingan_users', function (Blueprint $table) {
        $table->id();
        $table->string('judul');
        $table->text('konten');
        $table->unsignedBigInteger('user_id'); // Relasi ke user
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
        Schema::dropIfExists('postingan_users');
    }
};
