<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChuyenBay extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chuyenbay', function (Blueprint $table) {
            $table->increments('id');
            $table->string('hang');
            $table->string('loai ve');
            $table->string('khoi hanh');
            $table->string('ha canh');
            $table->date('ngay di');
            $table->time('gio bay');
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
        Schema::dropIfExists('chuyenbay');
    }
}
