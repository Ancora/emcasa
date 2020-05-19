<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            /* $table->unsignedBigInteger('user_id'); */                      // id do usuário logado

            $table->string('name')->unique();
            $table->string('description')->nullable();
            $table->string('slug');

            $table->timestamps();

            /* $table->foreign('user_id')->references('id')->on('users'); */  // chave estrangeira (stores_user_id_foreign)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
