<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head><base href="">
		<meta charset="utf-8" />
		<title>{{ config('app.name', 'Laravel') }}</title>
		<meta name="description" content="Check out all the features of the Start admin panel. A large number of templates, components and widgets." />
		<meta name="keywords" content="Start, bootstrap, bootstrap 5, admin themes, free admin themes, bootstrap admin, bootstrap dashboard, html admin theme, html template" />
		<link rel="canonical" href="Https://preview.keenthemes.com/start" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		
		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
		<!--end::Global Stylesheets Bundle-->
		<!doctype html>


<!-- Vendor CSS -->
   <link rel="stylesheet" href="./assets/css/libs.bundle.css" />

   <!-- Main CSS -->
   <link rel="stylesheet" href="./assets/css/theme.bundle.css" />
   
   <!-- Navbar-->
   <nav class="navbar navbar-expand-lg navbar-light border-0 py-0 fixed-top bg-dark-800">
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

		 <!-- Navbar Actions-->
		 <div class="d-flex align-items-center">

		

			<!-- Notifications-->
		   <a class="btn-icon btn-hover-dark position-relative p-2 disable-child-pointer" data-bs-toggle="offcanvas" href="#offcanvasNotifications" role="button"
		   aria-controls="offcanvasNotifications">
			 <i class="ri-notification-fill align-bottom text-body lh-1"></i>
			 <span class="badge bg-primary text-white position-absolute top-0 end-0">99+</span>
		   </a>
		   <!-- / Notifications-->
   
		 </div>
		 <!-- / Navbar Actions-->
	   
	   </div>
	 </div>
   </nav>    

   <!-- Page Content -->
   <main id="main">


	   </section>
	 



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
						   <div class="d-flex align-items-center justify-content-center">
							   <svg class="f-w-6 me-2 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 398.39 353.81"><polygon points="228.38 33.94 0 262.32 0 0 119.61 0 119.61 43.01 101.9 60.73 86.02 76.61 86.02 33.6 33.6 33.6 33.6 181.2 214.46 0.34 390.66 0.34 242.09 148.91 218.73 124.76 309.55 33.94 228.38 33.94" fill="currentColor"/><polygon points="398.39 353.81 217.51 353.81 131.04 261.75 45.09 353.81 0 353.81 0 353.49 131.26 212.91 232.05 320.21 317.27 320.21 170.28 173.21 194.19 149.29 194.19 149.55 254.9 210.51 254.97 210.39 398.39 353.81" fill="currentColor"/></svg>
							   <span class="fw-bold fs-3 text-white">Kavlan</span>

							   
							   
						   </div>                    </a>
			  
				 
				   </ul>
			   </div>
		   </div>

							   <!-- User Details-->
   
				   <ul class="list-unstyled mb-6 aside-menu">
   
					   <!-- Dashboard Menu Section-->
					   <li class="menu-section">Menu</li>
					   <li class="menu-item"><a class="d-flex align-items-center menu-link" href=" {{route('login')}}"><i
								   class="ri-home-4-line me-3"></i> <span>Inicio</span></a></li>
								   <li class="menu-item"><a class="d-flex align-items-center menu-link" href="http://localhost/tercero/cursos/public/cursos"><i
								   class="ri-home-4-line me-3"></i> <span>Cursos</span></a></li>
								   

								   <li class="menu-item"><a class="d-flex align-items-center menu-link" href='users'><i
								   class="ri-home-4-line me-3"></i> <span>Usuarios</span></a></li>

								   <li class="menu-item">
   <a class="d-flex align-items-center menu-link" href="{{ route('genera_ordenes.index') }}"><i class="ri-home-4-line me-3"></i><span>Generar Ordenes</span></a>
</li>


								   

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
	