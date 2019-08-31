@extends('layouts.base')

@section('content')
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

            </div>
            <!-- /Row -->

        </div>
        <!-- /Container -->

    </div>
    <!-- /About -->
@endsection



