@extends('layouts.base')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <!-- Section header -->
                <div class="section-header text-center">
                    <h2 class="white-text title">Nuestro Equipo</h2>
                </div>
                <!-- /Section header -->

            
                

                  <!-- Service -->
    <div id="service" class="section md-padding">

        <!-- Container -->
        <div class="container">

            <!-- Row -->
            <div class="row">

                <!-- Section header -->
                <div class="section-header text-center">
                    <h2 class="title">QUE ES LO QUE OFRECEMOS?</h2>
                </div>
               

               
            <div>
               
                <div class="col-md-4 col-sm-6">
                    <div class="service">
                        <i class="fa fa-flask"></i>
                        <h3>{{ $service->title }}</h3>
                        <p>{{ $service->excerpt }}</p>
                    </div>
                </div>
            </div>
                <!-- /service -->
                
            </div>
            <!-- /Row -->

        </div>
        <!-- /Container -->

    </div>
    <!-- /Service -->

            
        </div>
    </div>
</div>
@endsection



