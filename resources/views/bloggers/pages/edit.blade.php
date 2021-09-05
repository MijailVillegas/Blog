@extends('bloggers.layout.base')

@section('contenido')
<div class="row">
    <!-- Blog entries-->
    <div class="col-lg-8">
        <!-- Featured blog post-->
        <div class="card-header">
            <i class="fa fa-plus"></i> Hola! {{Auth::guard(config('admin-auth.defaults.guard'))->user()->full_name}}, modifica tu increíble Post:
        </div>
        <form class="form-horizontal form-create" action="/home/{{$post->userId}}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="mb-3">
                    <label tabindex="2" for="" class="form-label">Título</label>
                    <input  value="{{$post->title}}" tabindex="3" id="title" name="title" type="text" class="form-control" placeholder="Título" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Contindo</label>
                    <textarea tabindex="4" rows="10" placeholder="Escribir artículo..." cols="50" id="content" name="content" class="form-control" required>{{$post->content}}</textarea>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Dirección de la imágen</label>
                    <input  value="{{$post->image_url}}" tabindex="6" id="imga_url" name="image_url" type="url" class="form-control" placeholder="Url de la imagen" required>
                </div>
                <div class="mb-3">
                    <input tabindex="1" id="userId" name="userId" type="hidden" value="{{$post->userId}}">
                </div>
            </div>
                            
            <div class="card-footer">
                <a tabindex="7" href="/home/{{Auth::guard(config('admin-auth.defaults.guard'))->user()->userId}}/misblog" class="btn btn-secondary">
                    Canceltar
                </a>
                <button tabindex="8" type="submit" class="btn btn-primary"">
                    Guardar
                </button>
            </div>
            
        </form>
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
        @foreach ($getposts->slice(0, 1) as $item)
        <div class="card mb-4">
            <a href="#!"><img class="card-img-top" src="{{$item->image_url}}" alt="..." /></a>
            <div class="card-body">
                <div class="small text-muted"><p class="card-text"> {{$item->created_at->toFormattedDateString()}}    <i class="fab fa-gratipay"></i> {{$item->feedback}}</p></div>
                <div class="small text-muted">Última modificación {{$item->updated_at->toFormattedDateString()}}</div>
                <h2 class="card-title">{{$item->title}}</h2>
                <p class="card-text">{{$item->content}}</p>      
                <a class="btn btn-primary" href="#!">Leer más →</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection