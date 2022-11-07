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
        Schema::create('mensagen', function (Blueprint $table) {
            $table->id();
            $table->string('send_from',50);
            $table->string('send_to',50);
            $table->string('mensagen',250);
            $table->string('purl_confirmation',100)->nullable();
            $table->dateTime('purl_confirmation_sent');
            $table->string('purl_read',100)->nullable();
            $table->dateTime('purl_read_sent')->nullable();
            $table->dateTime('mensagen_readed')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mensagen');
    }
};