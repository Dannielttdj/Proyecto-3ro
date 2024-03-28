<?php

namespace App\Http\Controllers;

use App\Models\GeneraOrdenes;
use Illuminate\Http\Request;

use DB;
use Auth;

class GeneraOrdenesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $rq)
    {
        $periodos=DB::select("SELECT * FROM aniolectivo");
        $jornadas=DB::select("SELECT * FROM jornadas");
        $ordenes=DB::select("SELECT * FROM o.secuencial,o.fecha_registro,j.jor_id,o.mes,a.anl_descripcion

       FROM ordenes_generadas o
        JOIN matriculas m ON m.id=o.mat_id
        JOIN jornadas j ON j.id=m.jor_id
        JOIN aniolectivo j ON a.id=m.anl_id
        GROUP BY o especial,0.fecha,J.jor_descripcion,o.mes,a.anl_descripcion");

 $meses=$this->meses();
        return view('GeneraOrdenes.index')
        ->with('periodos', $periodos)
        ->with('jornadas', $jornadas)
        ->with('meses',$meses)
        ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function meses()
    {
        return[
            '1'=>'ENERO',
            '2'=>'FEBRERO',
            '3'=>'MARZO',
            '4'=>'ABRIL',
            '5'=>'MAYO',
            '6'=>'JUNIO',
            '7'=>'JULIO',
            '8'=>'AGOSTO',
            '9'=>'SEPTIEMBRE',
            '10'=>'OCTUBRE',
            '11'=>'NOVIEMBRE',
            '12'=>'DICIEMBRE',
    
        ];  
    }
    public function mesesLetra($nmes) {
        $result="";
        switch ($nmes) {
            case 1: $result = "E"; break;           
    }       
        return $result; 
    }
    public function generarOrdenes(Request $rq){
        $datos=$rq->all();
        $anl_id=$datos['anl_id'];
        $jor_id=$datos['jor_id'];
        $mes=$datos['mes'];
        $nmes=$this->mesesLetra($mes);
        $campus="G";
    $secuenciales=DB::selectone("SELECT max(secuencial)as secuencial from ordenes_generadas");
    dd($secuenciales->$secuencial+1);

        $estudiantes=DB::select("SELECT * FROM matriculas m
                    JOIN estudiantes e ON m.est_id=e.id
                    JOIN jornadas j ON m.est_id=j.id
                    JOIN cursos  ON m.est_id=c.id
                    WHERE m.anl_id=$anl_id
                    AND m .jor_id=$jor_id
                    AND m.mat_estado=1;
                    WHERE m.anl_id=anl_id;
                    AND m,m,"
                    );
          $valor_pagar=75;
    
         foreach($estudiantes as $e)
                                            {
                $input['mat_id']=$e->mat_id; 
                $input['codigo']=$mes.$campus.$e->jor_obs;
                $input['fecha_registro']=date('y-m-d');
                $input['valor_pagar']=$valor_pagar;
                $input['fecha_pago']=null;
                $input['valor_pagado']=0;
                $input['estado']=0;
                $input['mes']="$mes";
                $input['responsable']=Auth::user()->usu_nombre;
                $input['secuencial']="";////secuencial de la orden 
                $input['documento']=null;
                GeneraOrdenes::create($input);
                                            }
                                        }
                                         
                                            


    public function create(){
        
        
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }                               
}

