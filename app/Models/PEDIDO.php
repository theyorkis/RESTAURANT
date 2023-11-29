<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = 'pedidos';
    protected $primaryKey = 'Id_pedido';
    public $timestamps = false;

    // Define las relaciones si las hay
    // Ejemplo: 
    // public function cliente()
    // {
    //     return $this->belongsTo(Cliente::class, 'Id_cliente');
    // }
}
