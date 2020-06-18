<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpecialistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specialists', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('surname')->nullable();          // Фамилия
            $table->string('name');                         // Имя
            $table->string('patronymic')->nullable();       // Отчество

            $table->text('description')->nullable();

            $table->string('img')->nullable();              // Фото

            $table->string('slug')->nullable()->index();

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
        Schema::dropIfExists('specialists');
    }
}
