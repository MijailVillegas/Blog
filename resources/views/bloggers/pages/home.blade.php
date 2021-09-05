@extends('bloggers.layout.base')

@section('contenido')
<header class="py-5 bg-light border-bottom mb-4">
    <div class="container">
        <div class="text-center my-5">
            <h1 class="fw-bolder">Vienvenido a BLOGGERS!</h1>
            <p class="lead mb-0">El sitio de la libre expresión en habla Hispana!!! <h2>:)</h2></p>
        </div>
    </div>
</header>
<div class="row">
    <!-- Blog entries-->
    <div class="col-lg-8">
        <!-- Featured blog post-->
        <div class="card mb-4">
            <a href="#!"><img class="card-img-top" src="https://dummyimage.com/850x350/dee2e6/6c757d.jpg" alt="..." /></a>
            <div class="card-body">
                <div class="small text-muted">Jun 1, 2021 <i class="fab fa-gratipay"></i> 35</div>
                <div class="small text-muted">Última modificación Aug 15, 2021</div>
                <h2 class="card-title">Título del Artículo</h2>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
                <a class="btn btn-primary" href="#!">Leer más →</a>
            </div>
        </div>
        @foreach ($posts as $post)
        <div class="card mb-4">
            <a href="home/{{$post->id}}/edit"><img class="card-img-top" src="{{$post->image_url}}" alt="..." /></a>
            <div class="card-body">
                <div class="small text-muted"><p class="card-text"> {{$post->created_at->toFormattedDateString()}}    <i class="fab fa-gratipay"></i> {{$post->feedback}}</p></div>
                <div class="small text-muted">Última modificación {{$post->updated_at->toFormattedDateString()}}</div>
                <h2 class="card-title">{{$post->title}}</h2>
                <p class="card-text">{{$post->content}}</p>      
                <a class="btn btn-primary" href="home/{{$post->id}}/show">Leer más →</a>
            </div>
        </div>
        @endforeach
        <!-- blog posts-->

        <nav aria-label="Pagination">
            <hr class="my-0" />
            <ul class="pagination justify-content-center my-4">
                <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true"> << </a></li>
                <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                <li class="page-item"><a class="page-link" href="#!">2</a></li>
                <li class="page-item"><a class="page-link" href="#!">3</a></li>
                <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                <li class="page-item"><a class="page-link" href="#!">15</a></li>
                <li class="page-item"><a class="page-link" href="#!"> >> </a></li>
            </ul>
        </nav>
    </div>
    <!-- Side widgets-->
    <div class="col-lg-4">
        <!-- Search widget-->
        <div class="card mb-4">
            <div class="card-header">Buscar</div>
            <div class="card-body">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Buscar..." aria-label="BUSCAR..." aria-describedby="button-search" />
                    <button class="btn btn-primary" id="button-search" type="button">Ir!</button>
                </div>
            </div>
        </div>
        <!-- Categories widget-->
        <div class="card mb-4">
            <div class="card-header">Categorías</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <ul class="list-unstyled mb-0">
                            <li><a href="#!">Diseño Web</a></li>
                            <li><a href="#!">Futbol</a></li>
                            <li><a href="#!">Noticias</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <ul class="list-unstyled mb-0">
                            <li><a href="#!">Cuevas</a></li>
                            <li><a href="#!">Más gustados</a></li>
                            <li><a href="#!">Lo nuevo</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Side widget-->
        <div class="card mb-4">
            <div class="card-header">Posicionar lo que sea Aquí</div>
            <div class="card-body">Ya sea por ejemplo para Ads, Amigos, Contactos, Grupos, etc</div>
        </div>
        <div class="card mb-4">
            <a href="#!"><img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." /></a>
            <div class="card-body">
                <div class="small text-muted">Jun 1, 2021 <i class="fab fa-gratipay"></i> 35</div>
                <div class="small text-muted">Última modificación Aug 15, 2021</div>
                <h2 class="card-title">Título del Artículo</h2>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
                <a class="btn btn-primary" href="#!">Leer más →</a>
            </div>
        </div>
        @foreach ($posts->slice(0, 4) as $post)
        <form action="home/{{$post->id}}/show" method="POST">
            <div class="card mb-4">
                @csrf
                <a href="/home/{{$post->id}}/show"><img class="card-img-top" src="{{$post->image_url}}" alt="..." /></a>
                <div class="card-body">
                    <div class="small text-muted"><p class="card-text"> {{$post->created_at->toFormattedDateString()}}    <i class="fab fa-gratipay"></i> {{$post->feedback}}</p></div>
                    <div class="small text-muted">Última modificación {{$post->updated_at->toFormattedDateString()}}</div>
                    <h2 class="card-title">{{$post->title}}</h2>
                    <p class="card-text">{{$post->content}}</p>      
                    <a class="btn btn-secondary" href="/home/{{$post->id}}/show">Leer más →</a>
                </div>
            </div>
        </form>
        @endforeach
    </div>
</div>
@endsection