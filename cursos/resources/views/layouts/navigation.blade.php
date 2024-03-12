
    
      <!-- Botón desplegable en la parte superior derecha -->
      <div class="dropdown btn btn-warning">
        <button class="btn btn-outline- dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">
          {{ Auth::user()->usu_nombre }} / {{ Auth::user()->name }}
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href=""></a>
          <a class="dropdown-item" href="{{ route('profile.edit') }}">Perfil</a>
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="dropdown-item">Cerrar Sesión</button>
         
          </form>
        </div>
      </div>
    </div>
  </div>
</nav>
