<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categoria', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('nombrecategoria', 45);
            $table->timestamps();
        });

        Schema::create('curso', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('nombrecurso', 45);
            $table->string('descripcion', 100);
            $table->string('fechainicio', 45);
            $table->string('fechafin', 45);
            $table->string('imagen');
            $table->boolean('visible');
            $table->integer('categoria_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('curso', function(Blueprint $table)
        {
            $table->foreign('categoria_id')->references('id')->on('categoria')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categoria');
        Schema::dropIfExists('curso');
    }
};
