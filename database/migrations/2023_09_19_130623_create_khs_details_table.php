<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKhsDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khs_details', function (Blueprint $table) {
            $table->id();
            $table->char('kode_khs_detail', 8);
            $table->char('kode_khs', 8);
            $table->integer('nilai');
            $table->timestamps();

          //  $table->foreign('kode_khs')->references('kode_khs')->on('khs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('khs_details');
    }
}
