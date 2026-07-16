<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model

{
    protected $fillable = ['nombre', 'descripcion', 'precio', 'stock', 'categoria_id', 'subcategoria_id'];

    public function categria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function subcategria()
    {
        return $this->belongsTo(Subcategoria::class);
    }
}
