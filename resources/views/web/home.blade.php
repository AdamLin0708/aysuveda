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
    <div class="container-fluid row" style="margin: 0; padding: 25px 0">
        <div class="col-md-12 text-center" style="padding-bottom: 30px">
            <h1 class="h1-responsive"><strong>如何<span style="border-bottom: 3px solid #00cc00; padding: 15px 0;">使用百分之百的腦袋－丹尼遜健</span>腦操</strong></h1>
        </div>
        <div class="col-md-10 col-md-push-1 text-center">
            <h3 style="line-height:140%">《信念的生物學》(Biology of Belief) 作者布魯斯 立頓博士(Dr. Bruce Lipton)在最近的一段網上視頻講話中，說明了“我們只用了百分之十的腦袋”這個說法，是錯誤的。而整合運動如丹尼遜健腦操，能促進全腦操作，幫助人用上百分百的腦袋。</h3>
        </div>
    </div>
    <hr/>
    <div class="container-fluid row" style="margin: 0; padding: 25px 0">
        <div class="col-md-12 text-center" style="padding-bottom: 30px">
            <h1 class="h1-responsive"><strong>來自<span style="border-bottom: 3px solid #00cc00; padding: 15px 0;">不同領域的</span>學員</strong></h1>
        </div>
        <div class="col-md-12 row">
            <div class="col-md-3 col-md-push-2">
                <img src="http://via.placeholder.com/200x400" class="img-responsive">
            </div>
            <div class="col-md-3 col-md-push-1">
                <img src="http://via.placeholder.com/200x400" class="img-responsive">
            </div>
            <div class="col-md-3">
                <img src="http://via.placeholder.com/200x400" class="img-responsive">
            </div>
            <div class="col-md-3 col-md-pull-1">
                <img src="http://via.placeholder.com/200x400" class="img-responsive">
            </div>
        </div>
    </div>
    <hr/>
    <div class="container-fluid text-center row" style="margin: 0; padding: 25px 0">
        <div class="col-md-12 " style="padding-bottom: 30px">
            <h1 class="h1-responsive"><strong>調<span style="border-bottom: 3px solid #00cc00; padding: 15px 0;">和課</span>程</strong></h1>
        </div>
        <div class="col-md-10 col-md-push-1" style="height: 400px; border: 1px solid black">

        </div>
        <div class="col-md-12">
            <button class="btn btn-success">
                了解更多 >
            </button>
        </div>
    </div>
    <hr/>
    <div class="container-fluid text-center row" style="margin: 0; padding: 25px 0">
        <div class="col-md-12 " style="padding-bottom: 30px">
            <h1 class="h1-responsive"><strong>合<span style="border-bottom: 3px solid #00cc00; padding: 15px 0;">作夥</span>伴</strong></h1>
        </div>
        <div class="col-md-12 row" style="padding-bottom: 20px">
            <div class="col-md-3">
                <img src="http://via.placeholder.com/200x100">
            </div>
            <div class="col-md-3">
                <img src="http://via.placeholder.com/200x100">
            </div>
            <div class="col-md-3">
                <img src="http://via.placeholder.com/200x100">
            </div>
            <div class="col-md-3">
                <img src="http://via.placeholder.com/200x100">
            </div>
        </div>
        <div class="col-md-12 row">
            <div class="col-md-3">
                <img src="http://via.placeholder.com/200x100">
            </div>
            <div class="col-md-3">
                <img src="http://via.placeholder.com/200x100">
            </div>
            <div class="col-md-3">
                <img src="http://via.placeholder.com/200x100">
            </div>
            <div class="col-md-3">
                <img src="http://via.placeholder.com/200x100">
            </div>
        </div>
    </div>
    <hr/>

@endsection
@section('footer')
    @include('web.partial._footer')
@endsection
@section('javascript')
    <script>
        $('.carousel').carousel();
    </script>
@endsection