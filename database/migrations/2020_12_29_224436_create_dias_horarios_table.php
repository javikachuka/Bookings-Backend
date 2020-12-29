<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiasHorariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dias_horarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('dia_id') ;
            $table->foreign('dia_id')->references('id')->on('dias') ;
            $table->unsignedBigInteger('horario_id') ;
            $table->foreign('horario_id')->references('id')->on('horarios') ;
            $table->softDeletes() ;
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
        Schema::dropIfExists('dias_horarios');
    }
}
