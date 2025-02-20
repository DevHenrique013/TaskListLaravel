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
        Schema::create('tb_usuario', function(Blueprint $table){
            $table->id('id_usuario');
            $table->string('nm_usuario', 100);
            $table->string('ds_email', 30);
            $table->string('cd_senha', 30);
            $table->timestamps();
        }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_usuario');
    }
};
