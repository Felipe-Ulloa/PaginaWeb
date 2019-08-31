@extends('layouts.base')

@section('content')

<!-- Header -->
    <header>

         <!-- Nav -->
        <nav id="nav" class="navbar nav-transparent">
            <div class="container">

                <div class="navbar-header">
                    <!-- Logo -->
                    <div class="navbar-brand">
                        <a href="index.html">
                            <img class="logo" src="{{ asset('assets/img/logo.jpg') }}" alt="logo">
                            <img class="logo-alt" src="{{ asset('assets/img/logo.jpg') }}" alt="logo">
                        </a>
                    </div>
                    <!-- /Logo -->

                    <!-- Collapse nav button -->
                    <div class="nav-collapse">
                        <span></span>
                    </div>
                    <!-- /Collapse nav button -->
                </div>

                <!--  Main navigation  -->
                <ul class="main-nav nav navbar-nav navbar-right">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    
                </ul>
                <!-- /Main navigation -->

            </div>
        </nav>
        <!-- /Nav -->

        <!-- header wrapper -->
        <div class="header-wrapper sm-padding bg-grey">
            <div class="container">
                <h2>Noticias</h2>
                
            </div>
        </div>
        <!-- /header wrapper -->

    </header>
    <!-- /Header -->
    <!-- Blog -->
    <div id="blog" class="section md-padding">

        <!-- Container -->
        <div class="container">

            <!-- Row -->
            <div class="row">

                <!-- Main -->
                <main id="main" class="col-md-9">
                    <div class="blog">
                        @foreach($posts as $post)
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
                            <h3>{{ $post->title }}</h3>
                            <p>{{ $post->excerpt }}</p>
                            <p>{{ $post->body }}</p>
                        </div>
                        @endforeach
                        

                        <!-- blog tags -->
                        <div class="blog-tags">
                            <h5>Tags :</h5>
                            @foreach($post->tags as $tag)
                            <a href="{{ route('tag', $tag->slug)}}">
                            <i class="fa fa-tag"></i>{{ $tag->name }}</a>
                            </a>
                            @endforeach
                            
                        </div>
                        <!-- blog tags -->

                        

                       
                    </div>
                </main>
                <!-- /Main -->


                <!-- Aside -->
                <aside id="aside" class="col-md-3">

                    <!-- Search -->
                    <div class="widget">
                        <div class="widget-search">
                            <input class="search-input" type="text" placeholder="search">
                            <button class="search-btn" type="button"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <!-- /Search -->

                    <!-- Category -->

                    <div class="widget">
                        
                        <h3 class="title">Categorias</h3>
                       @foreach($categories as $category)
                        <div class="widget-category">
                            <a href="#">{{ $category->name }}</a>
                            
                        </div>
                         @endforeach  
                    </div>
                   
                    <!-- /Category -->

                    <!-- Posts sidebar -->
                    <div class="widget">
                        <h3 class="title">Otras noticias</h3>

                        <!-- single post -->
                        
                        <div class="widget-post">
                        <div class="panel-heading">{{ $post->name }}</div>
                             @if($post->file)
                        <img src="{{ $post->file }}" class="img-responsive">
                            @endif
                            <ul class="blog-meta">
                                <li>{{ $post->start_date }}</li>
                            </ul>
                        </div>
                        

                       

                    </div>
                    <!-- /Posts sidebar -->

                    <!-- Tags -->
                    <div class="widget">
                        <h3 class="title">Tags</h3>
                        <div class="widget-tags">
                           @foreach($post->tags as $tag)
                            <a href="{{ route('tag', $tag->slug)}}">
                            <i class="fa fa-tag"></i>{{ $tag->name }}</a>
                            </a>
                            @endforeach
                        </div>
                    </div>
                    <!-- /Tags -->

                </aside>
                <!-- /Aside -->

            </div>
            <!-- /Row -->

        </div>
        <!-- /Container -->

    </div>
    <!-- /Blog -->

  <footer id="footer" class="sm-padding bg-dark">

        <!-- Container -->
        <div class="container">

            <!-- Row -->
            <div class="row">

                <div class="col-md-12">

                    <!-- footer logo -->
                    <div class="footer-logo">
                        <a href="index.html"><img src="{{ asset('assets/img/logo.jpg') }}" alt="logo"></a>
                    </div>
                    <!-- /footer logo -->

                    <!-- footer follow -->
                    <ul class="footer-follow">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                    <!-- /footer follow -->

                    <!-- footer copyright -->
                    <div class="footer-copyright">
                        <p>Copyright © 2019. Derechos Reservados, Diseñado Por <a href="https://tribrains.cl" target="_blank">TriBrains</a></p>
                    </div>
                    <!-- /footer copyright -->

                </div>

            </div>
            <!-- /Row -->

        </div>
        <!-- /Container -->

    </footer>
    <!-- /Footer -->

@endsection