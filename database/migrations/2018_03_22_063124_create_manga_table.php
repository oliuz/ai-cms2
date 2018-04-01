<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMangaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mangas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_uploader')->unsigned();
            $table->string('title', 150);
            $table->string('slug', 150)->unique();
            $table->json('metadata')->nullable();
            $table->timestamps();
        });

        Schema::create('chapters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_manga')->unsigned();
            $table->integer('chapter_order')->unsigned();
            $table->string('chapter_title', 100);
            $table->string('slug', 150)->unique();
            $table->timestamps();
        });

        Schema::create('pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_chapter')->unsigned();
            $table->integer('page_order')->unsigned();
            $table->string('page_path', 100);
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
        Schema::dropIfExists('pages');
        Schema::dropIfExists('chapters');
        Schema::dropIfExists('mangas');
    }
}
