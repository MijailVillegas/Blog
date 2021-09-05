<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Blog Home</title>
        {{-- fontawesome --}}
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#!"><h2>BLOGGERS!</h1></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="{{url('/home')}}">Home</a></li>
                        
                        @if (Auth::guard(config('admin-auth.defaults.guard'))->check())
                        <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Admin</a></li>   
                        <li class="nav-item"><a class="nav-link" href="/home/{{Auth::guard(config('admin-auth.defaults.guard'))->user()->id}}/misblog">Mis Blogs</a></li>
                        <li class="nav-item"><a href="{{ url('/home/create') }}" class="nav-link">Crear +</a></li>   
                        <li class="nav-item"><a href="{{ url('admin/logout') }}" class="nav-link">Salir</a></li>
                        <li class="nav-item"><a href="{{url('admin/profile')}}" class="nav-link">{{ Auth::guard(config('admin-auth.defaults.guard'))->check() ? Auth::guard(config('admin-auth.defaults.guard'))->user()->full_name : 'Anonymous' }}</a></li>
                        @else
                        <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Iniciar</a></li>  
                        <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Registrar</a></li>  
                        @endif

                    </ul>
                </div>
            </div>
        </nav>
        <header class="py-5 bg-light border-bottom mb-4">
            <div class="container">
            </div>
        </header>
        <!-- Page content-->
        <div class="container">
            @yield('contenido')
        </div>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Desarrollado por &star; Mijail Villegas Murillo</p></div>
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Bloggers.com 2021</p></div>
            <div class="container"><p class="m-0 text-center text-white">&star;&star;&star;Proyecto Para la UPDS&star;&star;&star;</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
