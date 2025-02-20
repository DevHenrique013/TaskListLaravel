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
        Schema::create('tb_tag', function(Blueprint $table){
            $table->id('id_tag');
            $table->string('nm_tag', 45);
            $table->foreignId('id_usuario')->references('id_usuario')->on('tb_usuario')->onDelete('cascade');
        });
        Schema::create('tb_task', function(Blueprint $table){
            $table->id('id_task');
            $table->string('nm_task', 45);
            $table->longtext('nm_task', 500);
            $table->boolean('ic_done');
            $table->foreignId('id_tag')->references('id_tag')->on('tb_tag')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_tag');
        Schema::dropIfExists('tb_task');
    }
};
