<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        < <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <!doctype html>



    <link rel="stylesheet" href="./assets/css/libs.bundle.css" />

    
    <link rel="stylesheet" href="./assets/css/theme.bundle.css" />
    
    <!-- Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light border-0 py-0 fixed-top bg-black-800">
      <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center flex-grow-1 navbar-actions">
    
          <!-- Menu Toggle-->
          <div class="menu-toggle cursor-pointer me-4 text-primary-hover transition-color disable-child-pointer">
            <i class="ri-menu-fold-line ri-lg fold align-middle" data-bs-toggle="tooltip" data-bs-placement="right"
              title="Close menu"></i>
            <i class="ri-menu-unfold-line ri-lg unfold align-middle" data-bs-toggle="tooltip" data-bs-placement="right"
              title="Open Menu"></i>
          </div>
          <!-- / Menu Toggle-->
<li class="btn-info">
<a style="color: white" href="{{ route('genera_ordenes.index') }}">Generar ordenes</a>
</li>        
    
          </div>
          <!-- / Navbar Actions-->
        </div>
      </div>
    </nav>    

    <!-- Page Content -->
    <main id="main">


        </section>
        <!-- / Content-->




    <!-- Page Aside-->
    <aside class="aside bg-dark-700">
    
                    <!-- Mobile close btn-->
                    <div class="cursor-pointer close-menu me-4 text-primary-hover transition-color disable-child-pointer position-absolute end-0 top-0 mt-3 pt-1 d-xl-none">
                        <i class="ri-close-circle-line ri-lg align-middle me-n2"></i>
                    </div>
                    <!-- / Mobile close btn-->
    
                    <!-- Mobile Logo-->
                    <div class="d-flex justify-content-center align-items-center py-3">
                        <a class="m-0" href="./index.html">
                            

                                
                                
                            </div>                    </a>
               
                  
                    </ul>
                </div>
            </div>

                                <!-- User Details-->
    
                    <ul class="list-unstyled mb-6 aside-menu">
    
                        <!-- Dashboard Menu Section-->
                        <li class="menu-section">Menu</li>
                        <li class="menu-item"><a class="d-flex align-items-center menu-link" href=" {{route('login')}}"><i
                                    class="-line "></i> <span>Inicio</span></a></li>
                                    <li class="menu-item"><a class="d-flex align-items-center menu-link" href="http://localhost/tercero/cursos/public/cursos"><i
                                    class=></i> <span>Cursos</span></a></li>
                                    

                                    <li class="menu-item"><a class="d-flex align-items-center menu-link" href='users'><i
                                    class=></i> <span>Usuarios</span></a></li>

                    </ul>
                </div>
            </div>
        </div>
        
    
    </aside>


</body>

</html>


    </head>
    <body class="">
        @include('layouts.navigation')
        <div class="min-h-screen">
            <div class="container">
                        @yield('content')
                </div>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>
