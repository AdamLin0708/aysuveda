@extends('web.scaffold')
@section('content')
    {{--輪播牆--}}
    <div class="container-fluid" style="border: 1px solid black">
        <div class="home-carousel">

        </div>
    </div>

    {{--首頁內容--}}
    <div class="container-fluid row" style="height: 400px; border: 1px solid black">
        <div class="col-md-8" style="height:100%; border: 1px solid black">

        </div>
        <div class="col-md-4" style="height:100%; border: 1px solid black">

        </div>
    </div>
@endsection
@section('footer')
    @include('web.partial._footer')
@endsection
