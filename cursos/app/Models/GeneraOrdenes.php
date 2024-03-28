<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class GeneraOrdenes extends Model
{
    use HasFactory;
    protected $table='ordenes_generadas';
    protected $primarykey='ord_id';
    public $timelaps=false;
    protected $fillable=[
        'mat_id',
        'codigo',
        'fecha_registro',
        'valor_pagar',
        'fecha_pago',
        'valor_pagado',
        'estado',
        'mes',
        'responsable',
        'secuencial',
        'documento',
    ];
    public function matricula()
{
return $this->belongsTo(Matricula::class,'mat_id','id');
}
}
