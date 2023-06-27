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
    Schema::create('libros', function (Blueprint $table) {
      $table->id();
      // Añadimos los campos de la tabla
      $table->string('titulo', 100);
      $table->unsignedBigInteger('editorial_id');
      $table->smallInteger('edicion');
      $table->string('pais', 50);
      $table->decimal('precio', 10, 2);
      //Relacion un libro tiene muchas editoriales
      $table->foreign('editorial_id')->references('id')->on('editoriales')->name('fk_editorial');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('libros');
  }
};
