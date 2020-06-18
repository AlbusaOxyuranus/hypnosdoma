<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSEOPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('s_e_o_pages', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->text('page_url')->nullable();

            $table->text('page_title')->nullable();
            $table->integer('page_title_length')->nullable();
            $table->string('page_description')->nullable();
            $table->integer('page_description_length')->nullable();
            $table->string('page_h1')->nullable();
            $table->integer('page_h1_length')->nullable();

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
        Schema::dropIfExists('s_e_o_pages');
    }
}
