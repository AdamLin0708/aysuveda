@extends('web.scaffold')
@section('content')
    {{--輪播牆--}}
    <div class="container-fluid" style="border: 1px solid black; padding: 0;">
        <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
                <li data-target="#carousel" data-slide-to="3"></li>
                <li data-target="#carousel" data-slide-to="4"></li>
            </ol>
            <!-- Carousel items -->
            <div class="carousel-inner">
                <div class="active item">
                    <img src="/img/BG_BrainGym.jpg" class="img-responsive" style="width: 100%">
                </div>
                <div class="item">
                    <img src="/img/NEAT_Jarian.jpg" class="img-responsive" style="width: 100%">
                </div>
                <div class="item">
                    <img src="/img/FeldenKrais_Jarian.jpg" class="img-responsive" style="width: 100%">
                </div>
                <div class="item">
                    <img src="/img/Graffiti.jpg" class="img-responsive" style="width: 100%">
                </div>
                <div class="item">
                    <img src="/img/Brain_Depress.jpg" class="img-responsive" style="width: 100%">
                </div>
            </div>
            <!-- Carousel nav -->
            <a class="carousel-control left" href="#carousel" data-slide="prev">&lsaquo;</a>
            <a class="carousel-control right" href="#carousel" data-slide="next">&rsaquo;</a>
        </div>
    </div>

    {{--首頁內容--}}
    <div class="container-fluid row" style="height: 400px; margin: 0; padding: 0">
        <div class="col-md-8" style="height:100%; border: 1px solid black">

        </div>
        <div class="col-md-4" style="height:100%; border: 1px solid black">

        </div>
    </div>
@endsection
@section('footer')
    @include('web.partial._footer')
@endsection
@section('javascript')
    <script>
        $('.carousel').carousel();
    </script>
@endsection