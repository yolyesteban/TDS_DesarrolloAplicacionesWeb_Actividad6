<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
    protected $table = 'pedido';
    protected $primaryKey = 'codigoPedido';
    public $timestamps = false;

    public function producto(){
        return $this->belongsTo('App\Models\Producto', 'codigoProducto');
    }

    public function empleado(){
        return $this->belongsTo('App\Models\Empleado', 'codigoEmpleado');
    }
}
