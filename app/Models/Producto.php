<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $table = 'producto';
    protected $primaryKey = 'codigoProducto';
    public $timestamps = false;

    public function categoria(){
        return $this->belongsTo('App\Models\Categoria', 'codigoCategoria');
    }

    public function pedidos(){
        return $this->hasMany('App\Models\Pedido');
    }
}
