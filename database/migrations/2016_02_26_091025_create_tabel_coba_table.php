<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabelCobaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_coba', function (Blueprint $table) {
          $table->increments('id_coba');
          $table->string('nama_coba');
          $table->integer('jumlah_coba');
          $table->timestamp('created_at');
          $table->timestamp('updated_at');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tabel_coba');
    }
}
