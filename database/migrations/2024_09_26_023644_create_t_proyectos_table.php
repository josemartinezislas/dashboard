<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('t_proyectos', function (Blueprint $table) {
            $table->id();
            $table->string('proy_nom'); 
            $table->integer('proy_sect'); 
            $table->integer('proy_tipo'); 
            $table->integer('proy_mpio'); 
            $table->integer('proy_fase'); 
            $table->integer('proy_stat'); 
            $table->integer('proy_seg'); 
            $table->text('proy_desc'); 
            $table->integer('proy_inver');
            $table->integer('proy_e_dir'); 
            $table->integer('proy_e_ind'); 
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_proyectos');
    }
};
