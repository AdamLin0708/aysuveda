@extends('web.scaffold')
@section('content')
    <div class="container-fluid bg-danger">
        <h1>教育總監</h1>
    </div>
    <div class="container-fluid row">
        <div class="col-md-5 col-md-push-1 text-center">
            <img class="img-circle" src="/img/educationDirector_RayKey.jpg">
        </div>
        <div class="col-md-6 text-center">
            <img src="/img/educationDirector_RayKey_experience.jpg">
        </div>
        <div class="col-md-12 text-center" style="border: 1px solid black">
            <span>
                我盡力而為，世界自然美好。
            </span>
        </div>
        <div class="col-md-12 text-center" style="border: 1px solid black">
            <button class="btn btn-danger">服務項目與收費</button>
        </div>

    </div>
@endsection
@section('footer')
    @include('web.partial._footer')
@endsection