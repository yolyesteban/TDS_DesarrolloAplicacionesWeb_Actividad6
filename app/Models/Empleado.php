<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;
    protected $table = 'empleado';
    protected $primaryKey = 'codigoEmpleado';
    public $timestamps = false;

    public function pedidos(){
        return $this->hasMany('App\Models\Pedido');
    }
}
