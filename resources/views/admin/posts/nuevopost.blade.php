@extends('layouts.base')

@section('content')

 <div id="blog" class="section md-padding bg-grey">

                 <!-- Container -->
    <div class="container">

                <!-- Row -->
        <div class="row">

                <!-- Section header -->
                <div class="section-header text-center">
                    <h2>Noticias Recientes</h2>
                </div>
                <!-- /Section header -->
               @foreach($posts as $post)
                <!-- blog -->
                <div class="col-md-4 ">
                    <div class="blog">
                        @if($post->file)
                        <div class="blog-img">
                            <img src="{{ $post->file }}" class="img-responsive">
                        </div>
                        @endif
                        <div class="blog-content">
                            <ul class="blog-meta">
                                <li><i class="fa fa-user"></i>{{ $post->name }}</li>
                                <li><i class="fa fa-clock-o"></i>{{ $post->start_date }}</li>
                            </ul>
                            <div>
                            <h3>{{ $post->title }}</h3>
                            <p>{{ $post->excerpt }}</p>
                            <a href="{{ route('post',$post->slug)}}" class="pull-right">Leer Más</a>
                            </div>
                        </div>
                    </div>
                </div>
                 @endforeach
                {{ $posts->render() }}
                <!-- /blog -->
            </div>
            <!-- /Row -->
        </div>
    </div>
       
   
@endsection 