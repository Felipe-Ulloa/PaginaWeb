@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <!-- Section header -->
                <div class="section-header text-center">
                    <h2 class="white-text title">Nuestro Equipo</h2>
                </div>
                <!-- /Section header -->

            
                

                   <!-- Team -->
    <div id="team" class="section md-padding">

        <!-- Container -->
        <div class="container">

            <!-- Row -->
            <div class="row">

                

                <!-- team -->
                <div class="col-sm-4">
                    <div class="team">
                        <div class="team-img">
                            @if($team->file)
                        <img src="{{ $team->file }}" class="img-responsive">
                            @endif
                            <div class="overlay">
                                <div class="team-social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3>{{ $team->name }}</h3>
                            <h4>{{ $team->charge }}</h4>
                            <span>{{ $team->excerpt }}</span>
                        </div>
                    </div>
                </div>
                <!-- /team -->

               

            </div>
            <!-- /Row -->

        </div>
        <!-- /Container -->

    </div>
    <!-- /Team -->

            
        </div>
    </div>
</div>
@endsection



