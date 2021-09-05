@extends('bloggers.layout.base')

@section('contenido')
<div class="container mt-12">
    <div class="row">
        <div class="col-lg-8">
            <!-- Post content-->
            <article>
                <!-- Post header-->
                <header class="mb-4">
                    <div class="container">
                        <div class="card-header">
                            <i class="fa fa-plus"></i> Hola! {{Auth::guard(config('admin-auth.defaults.guard'))->user()->full_name}}, éstas son tus publicaciones:
                            <a tabindex="7" href="{{ url('/home/create') }}" class="btn btn-primary">
                                Nuevo →
                            </a>
                        </div>
                    </div>
                </header>
                @foreach ($posts as $post)
                <div class="card mb-4">
                    <a href="home/{{$post->id}}/edit"><img class="card-img-top" src="{{$post->image_url}}" alt="..." /></a>
                    <div class="card-body">
                        <div class="small text-muted"><p class="card-text"> {{$post->created_at->toFormattedDateString()}}    <i class="fab fa-gratipay"></i> {{$post->feedback}}</p></div>
                        <div class="small text-muted">Última modificación {{$post->updated_at->toFormattedDateString()}}</div>
                        <h2 class="card-title">{{$post->title}}</h2>
                        <p class="card-text">{{$post->content}}</p>      
                        <div class="card-footer">
                            <form action="{{route('home.destroy',$post->id)}}" method="POST">
                                <a class="btn btn-primary" href="/home/{{Crypt::encrypt($post->id)}}/edit">
                                    Editar →
                                </a>
                                @csrf
                                @method('DELETE')
                                <button tabindex="7" type="submit" class="btn btn-secondary">
                                    Borrar →
                                </button>
                                <a class="btn btn-primary" href="{{url('/home/'.$post->id.'/show')}}">
                                    Ver →
                                </a>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach       
            </article>
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
        </div>
    </div>
</div>
@endsection