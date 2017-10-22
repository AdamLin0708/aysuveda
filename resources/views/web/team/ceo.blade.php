@extends('web.scaffold')
@section('content')
    <div class="container-fluid bg-danger">
        <h1>創意總監</h1>
    </div>
    <div class="container-fluid row">
        <div class="col-md-5 col-md-push-1 text-center">
            <img src="/img/ceo_Aileen.jpg">
        </div>
        <div class="col-md-6 text-center">
            <img src="/img/ceo_Aileen_experience.jpg">
        </div>
        <div class="col-md-12 text-center" style="border: 1px solid black">
            <span>
                你永遠不會知道未來又要流行什麼；但是，真正的美永不過時！<br>
                優雅來自內外一致的協調感，一種天賦風格的美好展現。
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