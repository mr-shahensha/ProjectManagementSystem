<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMainQueryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main_query', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('source');
            $table->string('consultant');
            $table->string('custNm');
            $table->string('custNo');
            $table->string('dt');
            $table->string('projectTyp');
            $table->string('projectDtls');
            $table->string('cost');
            $table->string('stat')->default('0');
            $table->string('edt')->nullable();
            $table->string('edtm')->nullable();
            $table->string('eby')->nullable();
            $table->string('udt')->nullable();
            $table->string('udtm')->nullable();
            $table->string('uby')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('main_query');
    }
}
