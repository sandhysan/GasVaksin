<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id()->unsignedBigInteger();
            $table->string('nama', 100);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->date('tgl_lahir');
            $table->string('alamat', 100);
            $table->bigInteger('no_hp');
            $table->string('password',100);
            $table->string('foto')->nullable();
            $table->string('level_user');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
