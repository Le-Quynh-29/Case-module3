@extends('frontend.show')
@section('productline1')
    <div class="row">
        <div class="col-lg-6">
            <div class="banner-frame">
                <img class="img-fluid" src="{{asset('storage/images/' . $product->img)}}" alt="" style="height: 500px"/>
            </div>
        </div>
        <div class="col-lg-6">
            <h2 class="noo-sh-title-top"> <span>{{$product->productName}}</span></h2>
            <h3>$ {{$product->price}}</h3>
            <br/>
            <h4>Dòng sản phẩm : {{$product->productLine}}</h4>
            <h4>Số lượng sản phẩm :  {{$product->quantity}}</h4>
            <br/>
            <p style="font-size: 17px">
                {{$product->descripton}}
            </p>
            <a class="btn hvr-hover" href="#">Read More</a>
            <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Canle</button>

        </div>
    </div>
@endsection

