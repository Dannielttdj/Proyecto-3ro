@extends('layouts.app')

@section('content')
    <a href="{{route('cursos.create')}}" class="btn btn-outline-success">Nuevo Curso</a>
    <table class="table">
        <tr>
            <th>#</th>
            <th>Título</th>
            <th>Descripción</th>
            <th>Grupo</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
        @foreach($cursos as $c)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $c->cur_titulo }}</td>
            <td>{{ $c->cur_descripcion }}</td>
            <td>{{ $c->cur_grupo }}</td>
            <td>{{ $c->cur_estado==1?'Activo':'Inactivo' }}</td>
            <td>
                <a href="{{ route('cursos.edit',$c->cur_id) }}" class="btn btn-outline-warning">Editar</a>
                <form action="{{route('cursos.destroy',$c->cur_id)}}" method="POST" onsubmit="return confirm('Desea Eliminar el Curso?')">
                @csrf
                    <button type="submit" class="btn btn-outline-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach


    </table>

@endsection

