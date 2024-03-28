@extends('layouts.app')
@section('content')
<?php
 function mesesTexto($nmes){
$meses = [
    '1'=>'Enero',
    '2'=>'Febrero',
    '3'=>'Marzo',
    '4'=>'Abril',
    '5'=>'Mayo',
    '6'=>'Junio',
    '7'=>'Julio',
    '8'=>'Agosto',
    '9'=>'Septiembre',
    '10'=>'Octubre',
    '11'=>'Noviembre',
    '12'=>'Diciembre',

    ];
    return $meses[$nmes];
 }
?>
<script>
    $(document).on("click",".btn_delete",function(){
        if(confirm("seguro desea eliminar")){
            const secuencial=$(this).attr("secuencial");
            $(#secuencial).val(secuencial);
            $(#frmEliminar).submit();
        }
    })
    </script>
<form action="{{route('eliminarOrden')}}" method="POST" id="frmEliminar">
{{csrf_fiel()}}
<input type="text" name="secuencial" id="secuencial" value="0">
</form>
<div class="container">
    <h3 class="bg-success text-center py-2 mb-4">Generar Órdenes</h3>

    <form action="{{ route('GenerarOrdenes') }}" method="POST" id="generar_ordenes_form">
        @csrf

        <div class="form-row align-items-end mb-3">
            <div class="form-group col-md-4">
                <label for="anl_id">Período:</label>
                <select name="anl_id" id="anl_id" class="form-control" required>
                    <option value="">Seleccionar período</option>
                    @foreach ($periodos as $p)
                        <option value="{{ $p->id }}">{{ $p->anl_descripcion }}</option>
                    @endforeach

                </select>
            </div>

            <div class="form-group col-md-4">
                <label for="jor_id">Jornada:</label>
                <select name="jor_id" id="jor_id" class="form-control" required>
                    <option value="">Seleccionar jornada</option>
                    @foreach ($jornadas as $j)
                        <option value="{{ $j->id }}">{{ $j->jor_descripcion }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group col-md-4">
                <label for="mes">Mes:</label>
                <select name="mes" id="mes" class="form-control" required>
                    <option value="">Seleccionar mes</option>
                    @foreach ($meses as $key => $m)
                        <option value="{{ $key }}">{{ $m }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-search mr-2"></i>Generar
            </button>
        </div>
<table class="table">
<thead>
    <tr>
        <th>Ordenes generadas </th>

    </tr>
    <tr>
        <th>Secuencial</th>
        <th>Fechas</th>
        <th>Acciones</th>

    </tr>
</thead>
<tbody>
@foreach($ordenes as $o)
<tr>
    <td>{{$o->especial}}</td>
    <td>{{$o->fecha}}</td>
    <td>{{$o->anl_descripcion}}</td>
    <td>{{$o->mes}}</td>
    <td>{{$o->jor_descripcion}}</td>
<td>
    <a href="" class="btn btn-info btn-ms" >Ver</a>
    <a href="" class="btn btn-danger btn-ms btn_delete" secuencial="{{ $o->secuencial }" >Delete</a>

</td>

</tr>
</tbody>
</table>
@endforeach
    </form>
</div>

@endsection

