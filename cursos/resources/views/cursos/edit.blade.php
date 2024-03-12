@extends('layouts.app')

@section('content')
<h1>Editar Cursos</h1>
<div class="container">
    <div>
        <form action="{{route('cursos.update',$curso->cur_id)}}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="PUT">    
        @include('cursos.fields')
        <button type="submit">Guardar cambios </button>
        </form>
    </div>
</div>
@endsection