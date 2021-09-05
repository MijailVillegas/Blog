@extends('bloggers.layout.base')

@section('contenido')
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8">
            <!-- Post content-->
            <article>
                <!-- Post header-->
                <form action="/home/{{$item->id}}" method="POST">
                    @csrf
                    @method('PUT')
                    <header class="mb-4">
                        <!-- Post title-->
                        <h1 class="fw-bolder mb-1">{{$item->title}}</h1>
                        <!-- Post meta content-->
                        <div class="text-muted fst-italic mb-2">Creado el {{$item->created_at}}</div>
                        <div class="text-muted fst-italic mb-2">Última modificación el {{$item->updated_at}}</div>
                        <!-- Post categories-->
                        <a class="badge bg-secondary text-decoration-none link-light" href="{{url('/home')}}">Web Design</a>
                        <a class="badge bg-secondary text-decoration-none link-light" href="{{url('/home')}}">Freebies</a>
                    </header>
                    <!-- Preview image figure-->
                    <figure class="mb-4"><img class="img-fluid rounded" src="{{$item->image_url}}" alt="..." /></figure>
                    <!-- Post content-->
                    <section class="mb-5">
                        <p class="fs-5 mb-4">{{$item->content}}.</p>        
                        <p class="fs-5 mb-4"><i class="fab fa-gratipay"></i> {{$item->feedback}}</p>        
                    </section>
                </form>
            </article>
            <!-- Comments section-->
            <section class="mb-5">
                <div class="card bg-light">
                    <div class="card-body">
                        <!-- Comment form-->
                        <form class="mb-4">
                            <textarea class="form-control" rows="3" placeholder="Únete y deja un comentario!"></textarea>
                            <div class="card-footer">
                                <a class="btn btn-primary" href="#!">
                                    Comentar →
                                </a>
                            </div>
                        </form>
                        <!-- Comment with nested comments-->
                        <div class="d-flex mb-4">
                            <!-- Parent comment-->
                            <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                            <div class="ms-3">
                                <div class="fw-bold">Nombre del Comentador</div>
                                Si vas a liderar una frontera espacial, tiene que ser el gobierno; nunca será una empresa privada. Porque la frontera espacial es peligrosa, es cara y tiene riesgos no cuantificados.
                                <!-- Child comment 1-->
                                <div class="d-flex mt-4">
                                    <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                    <div class="ms-3">
                                        <div class="fw-bold">Nombre del Comentador</div>
                                        Si vas a liderar una frontera espacial, tiene que ser el gobierno; nunca será una empresa privada. Porque la frontera espacial es peligrosa, es cara y tiene riesgos no cuantificados.
                                    </div>
                                </div>
                                <!-- Child comment 2-->
                                <div class="d-flex mt-4">
                                    <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                    <div class="ms-3">
                                        <div class="fw-bold">Nombre del Comentador</div>
                                        Y en esas condiciones, no se puede establecer una evaluación del mercado de capitales de esa empresa. No puedes conseguir inversores.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single comment-->
                        <div class="d-flex">
                            <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                            <div class="ms-3">
                                <div class="fw-bold">Nombre del Comentador</div>
                                Cuando miro el universo y todas las formas en que el universo quiere matarnos, encuentro difícil reconciliar eso con declaraciones de beneficencia.
                            </div>
                        </div>
                    </div>
                </div>
            </section>
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
            @foreach ($posts->slice(0, 2) as $item)
        <form action="/{{$item->id}}/show" method="POST">
            <div class="card mb-4">
                @csrf
                <a href="/home/{{$item->id}}/show"><img class="card-img-top" src="{{$item->image_url}}" alt="..." /></a>
                <div class="card-body">
                    <div class="small text-muted"><p class="card-text"> {{$item->created_at->toFormattedDateString()}}    <i class="fab fa-gratipay"></i> {{$item->feedback}}</p></div>
                    <div class="small text-muted">Última modificación {{$item->updated_at->toFormattedDateString()}}</div>
                    <h2 class="card-title">{{$item->title}}</h2>
                    <p class="card-text">{{$item->content}}</p>      
                    <a class="btn btn-secondary" href="/home/{{$item->id}}/show">Leer más →</a>
                </div>
            </div>
        </form>
        @endforeach
        </div>
    </div>
</div>
@endsection