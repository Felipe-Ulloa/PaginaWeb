@extends('layouts.base')

@section('content')

   
</head>

<body>
    <!-- Header -->
    <header id="home">
        <!-- Background Image -->
        <div class="bg-img" style="background-image: url('./assets/img/background12.png');">
            <div class="overlay"></div>
        </div>
        <!-- /Background Image -->  

        <!-- Nav -->
        <nav id="nav" class="navbar nav-transparent">
            <div class="container">

                <div class="navbar-header">
                    <!-- Logo -->
                    <div class="navbar-brand">
                        <a href="index.html">
                            <img class="logo" src="{{ asset('assets/img/logo.jpeg') }}" alt="logo">
                            <img class="logo-alt" src="{{ asset('assets/img/logo111.jpg') }}" alt="logo">
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
                    @guest
                    <li><a href="#home">Inicio</a></li>
                    <li><a href="#about">Mision y Vision</a></li>
                    <li><a href="#service">Servicios</a></li>
                    <li><a href="#features">Porque nosotros?</a></li>
                    <li><a href="#team">Equipo</a></li>
                    <li><a href="#blog">Noticias</a></li>                                        
                    <li><a href="#contact">Contact</a></li>
                    @else
                    <li><a href="{{ url('/blog') }}">Admin</a></li>
                    <li><a href="#home">Inicio</a></li>
                    <li><a href="#about">Mision y Vision</a></li>
                    <li><a href="#service">Servicios</a></li>
                    <li><a href="#features">Porque nosotros?</a></li>
                    <li><a href="#team">Equipo</a></li>
                    <li><a href="#blog">Noticias</a></li>                                        
                    <li><a href="#contact">Contact</a></li>
                    @endguest
                    
                </ul>
                <!-- /Main navigation -->

            </div>
        </nav>
        <!-- /Nav -->

        <!-- home wrapper -->
        <div class="home-wrapper">
            <div class="container">
                <div class="row">

                    <!-- home content -->
                    <div class="col-md-10 col-md-offset-1">
                        <div class="home-content">
                            <h1 class="white-text">Buscas solucion a tus problemas?</h1>
                            <h3 class="white-text">Actualizarce es parte del cambio, cambiemos juntos.</h3>
                            
                        </div>
                    </div>
                    <!-- /home content -->

                </div>
            </div>
        </div>
        <!-- /home wrapper -->

    </header>
    <!-- /Header -->

<!-- About -->
    <div id="about" class="section md-padding">

        <!-- Container -->
        <div class="container">

            <!-- Row -->
            <div class="row">

                <!-- Section header -->
                <div class="section-header text-center">
                    <h2 class="title">Bienvenidos a nuestro WebSite!</h2>
                </div>
                <!-- /Section header -->
                @foreach($visions as $vision)
                <!-- about -->
                <div class="col-md-6">
                    <div class="about">
                        <i class="fa fa-cogs"></i>
                        <h3>Mision</h3>
                        <p>{{ $vision->mision }}</p>
                        
                    </div>
                </div>
                <!-- /about -->

                <!-- about -->
                <div class="col-md-6">
                    <div class="about">
                        <i class="fa fa-magic"></i>
                        <h3>Vision</h3>
                        <p>{{ $vision->vision }}</p>
                        
                    </div>
                </div>
                <!-- /about -->
                @endforeach
            </div>
            <!-- /Row -->

        </div>
        <!-- /Container -->

    </div>
    <!-- /About -->


    <!-- Portfolio --
    <div id="portfolio" class="section md-padding bg-grey">

        <!-- Container --
        <div class="container">

            <!-- Row --
            <div class="row">

                <!-- Section header --
                <div class="section-header text-center">
                    <h2 class="title">Portafolio</h2>
                </div>
                <!-- /Section header -->

                <!-- Work --
                <div class="col-md-4 col-xs-6 work">
                    <img class="img-responsive" src="./assets/img/work1.jpg" alt="">
                    <div class="overlay"></div>
                    <div class="work-content">
                        <span>Actividades extras</span>
                        <h3>Charlas inagurales y proyectos innovadores</h3>
                        <div class="work-link">
                            <a href="#"><i class="fa fa-external-link"></i></a>
                            <a class="lightbox" href="./assets/img//work1.jpg"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /Work -->

                <!-- Work --
                <div class="col-md-4 col-xs-6 work">
                    <img class="img-responsive" src="./assets/img/work2.jpg" alt="">
                    <div class="overlay"></div>
                    <div class="work-content">
                        <span>BioBioBerries</span>
                        <h3>Software de trasabilidad completa</h3>
                        <div class="work-link">
                            <a href="#"><i class="fa fa-external-link"></i></a>
                            <a class="lightbox" href="./assets/img//work2.jpg"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /Work -->

                <!-- Work --
                <div class="col-md-4 col-xs-6 work">
                    <img class="img-responsive" src="./assets/img/work3.jpg" alt="">
                    <div class="overlay"></div>
                    <div class="work-content">
                        <span>Tecnologias</span>
                        <h3>Lenguajes y tecnologia que se utiliza</h3>
                        <div class="work-link">
                            <a href="#"><i class="fa fa-external-link"></i></a>
                            <a class="lightbox" href="./assets/img//work3.jpg"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /Work -->

               
                <!-- /Work --
            </div>
            <!-- /Row --

        </div>
        <!-- /Container --

    </div>
    <!-- /Portfolio --

    <!-- Service -->
    <div id="service" class="section md-padding">

        <!-- Background Image -->
        <div class="bg-img" style="background-image: url('./assets/img/background1.jpg');">
            <div class="overlay"></div>
        </div>
        <!-- /Background Image -->
      
        <!-- Container -->
        <div class="container">

            <!-- Row -->
            <div class="row">

                <!-- Section header -->
                <div class="section-header text-center">
                    <h2 class="title white-text">QUE ES LO QUE OFRECEMOS?</h2>
                </div>
               
                <!-- /Section header -->
            <div>
                @foreach($services as $service)
            
               
                <div class="col-md-4 col-sm-6">

                    <div class="service " >
                        <i class="fa fa-cogs"></i>
                        <h3 class="white-text">{{ $service->title }}</h3>
                        <p class="white-text ">{{ $service->excerpt }}</p>
                    </div>
                </div>
               
               @endforeach
                
            </div>



    

            </div>
            <!-- /Row -->

        </div>
        <!-- /Container -->

    </div>
    <!-- /Service -->


    <!-- Why Choose Us -->
    <div id="features" class="section md-padding bg-grey">

        <!-- Container -->
        <div class="container">

            <!-- Row -->
            <div class="row">

                <!-- why choose us content -->
                <div class="col-md-6">
                    <div class="section-header">
                        <h2 class="title">Porque <span>Nosotros</span>?</h2>
                    </div>
                    <p>El significado de compromiso y fidelidad es algo importante dentro de nuestra empresa, el compromiso al iniciar un proyecto es del 100% esperando que nuestro cliente este satisfecho al finalizar cada trabajo.</p>
                    <div class="feature">
                        <i class="fa fa-check"></i>
                        <p>Disponibilidad inmediata hacia nuestros clientes.</p>
                    </div>
                    <div class="feature">
                        <i class="fa fa-check"></i>
                        <p>Alta seguridad en el codigo de nuestros productos.</p>
                    </div>
                    <div class="feature">
                        <i class="fa fa-check"></i>
                        <p>Confidencialidad en cuanto al manejo de información clasificada.</p>
                    </div>
                    <div class="feature">
                        <i class="fa fa-check"></i>
                        <p>Responsabilidad al iniciar un proyecto hasta que este finalice.</p>
                    </div>
                </div>
                <!-- /why choose us content -->

                <!-- About slider -->
                <div class="col-md-6">
                    <div id="about-slider" class="owl-carousel owl-theme">
                        <img class="img-responsive" src="./assets/img/abaut10.jpg" alt="">
                        <img class="img-responsive" src="./assets/img/about2.jpg" alt="">
                        <img class="img-responsive" src="./assets/img/about1.jpg" alt="">
                        <img class="img-responsive" src="./assets/img/about2.jpg" alt="">
                    </div>
                </div>
                <!-- /About slider -->

            </div>
            <!-- /Row -->

        </div>
        <!-- /Container -->

    </div>
    <!-- /Why Choose Us -->


    <!-- Numbers -->
    <div id="numbers" class="section sm-padding">

        <!-- Background Image -->
        <div class="bg-img" style="background-image: url('./assets/img/background2.jpg');">
            <div class="overlay"></div>
        </div>
        <!-- /Background Image -->

    

    <!-- Team -->
    <div id="team" class="section md-padding">

        <!-- Container -->
        <div class="container">

            <!-- Row -->
            <div class="row">

                <!-- Section header -->
                <div class="section-header text-center">
                    <h2 class="white-text title">Nuestro Equipo</h2>
                </div>
                <!-- /Section header -->

                @foreach($teams as $team)
                <!-- team -->
                <div class="col-sm-4">
                    <div class="team">
                        <div class="team-img">
                            @if($team->file)
                        <img src="{{ $team->file }}" class="img-responsive" style="width:400px;max-height:400px;" >
                            @endif
                            <div class="overlay">
                                <div class="team-social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3>{{ $team->name }}</h3>
                            
                            <span>{{ $team->charge }}</span>
                        </div>
                    </div>
                </div>
                <!-- /team -->
                @endforeach
            </div>
            <!-- /Row -->

        </div>
        <!-- /Container -->

    </div>
    <!-- /Team -->

<!-- Blog -->
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
                                    <a href="{{ url('/blogsingle', $post->id) }}"" class="btn btn-sm btn-default">Ver Mas</a>
                                    </div>
                                </div>
                            </div>
                    
                </div>
                @endforeach
              
                <!-- /blog -->
            </div>
            <!-- /Row -->
        </div>
    </div>
    <!-- /Blog -->

    <!-- Contact -->
    <div id="contact" class="section md-padding">

        <!-- Container -->
        <div class="container">

            <!-- Row -->
            <div class="row">

                <!-- Section-header -->
                <div class="section-header text-center">
                    <h2 class="white-text">Contactanos</h2>
                </div>
                <!-- /Section-header -->

                <!-- contact -->
                <div class="col-sm-4">
                    <div class="contact">
                        <i class="fa fa-phone"></i>
                        <h3 class="white-text">Telefono</h3>
                        <p>+569 45867254 </p>
                    </div>
                </div>
                <!-- /contact -->

                <!-- contact -->
                <div class="col-sm-4">
                    <div class="contact">
                        <i class="fa fa-envelope"></i>
                        <h3 class="white-text">Email</h3>
                        <p>contactotri@gmail.com</p>
                    </div>
                </div>
                <!-- /contact -->

                <!-- contact -->
                <div class="col-sm-4">
                    <div class="contact">
                        <i class="fa fa-map-marker"></i>
                        <h3 class="white-text">Dirección</h3>
                        <p>Carrera 725</p>
                    </div>
                </div>
                <!-- /contact -->

                <!-- contact form -->
                <div class="col-md-8 col-md-offset-2">
                    <form class="contact-form">

                       <!--
                        <input type="text" class="input" placeholder="Name">
                        <input type="email" class="input" placeholder="Email">
                        <input type="subject" class="input" placeholder="Subject">
                        <textarea class="input" placeholder="Message"></textarea>
                        <button class="main-btn">Enviar</button>
                        -->
                    </form>
                    
                </div>
                <!-- /contact form -->

            </div>
            <!-- /Row -->

        </div>
        <!-- /Container -->

    </div>
    <!-- /Contact -->


    <!-- Footer -->
    <footer id="footer" class="sm-padding bg-dark">

        <!-- Container -->
        <div class="container">

            <!-- Row -->
            <div class="row">

                <div class="col-md-12">

                    <!-- footer logo -->
                    <div class="footer-logo">
                        <a href="index.html"><img src="{{ asset('assets/img/logo111.jpg') }}" alt="logo"></a>
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

    <!-- Back to top -->
    <div id="back-to-top"></div>
    <!-- /Back to top -->

    <!-- Preloader -->
    <div id="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- /Preloader -->
  @endsection
