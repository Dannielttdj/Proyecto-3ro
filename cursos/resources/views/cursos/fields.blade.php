<div class="container">
    @csrf
    <div class="mb-3">
        <label for="cur_titulo" class="form-label">Título del Curso</label>
        <input type="text" class="form-control" id="cur_titulo" placeholder="Ingrese el título del curso" name="cur_titulo" value="{{ isset($curso) ? $curso->cur_titulo : '' }}">
    </div>
    <div class="mb-3">
        <label for="cur_descripcion" class="form-label">Descripción del Curso</label>
        <input type="text" class="form-control" id="cur_descripcion" placeholder="Ingrese la descripción del curso" name="cur_descripcion" value="{{ isset($curso) ? $curso->cur_descripcion : '' }}">
    </div>
    <div class="mb-3">
        <label for="cur_grupo" class="form-label">Grupo del Curso</label>
        <input type="text" class="form-control" id="cur_grupo" placeholder="Ingrese el grupo del curso" name="cur_grupo" value="{{ isset($curso) ? $curso->cur_grupo : '' }}">
    </div>
</div>

