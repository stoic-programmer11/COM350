<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
  use HasFactory;
  //Decirle que campos son llenables
  protected $fillable = ['titulo', 'editorial_id', 'edicion', 'pais', 'precio'];
  //Relacion/llave foranea
  public function editorial()
  {
    return $this->belongsTo(Editorial::class, 'editorial_id', 'id');
  }
}
