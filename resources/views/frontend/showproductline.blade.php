@extends('frontend.show')
@section('productline1')
    <div class="row">
        <div class="col-lg-6">
            <div class="banner-frame">
                <img class="img-fluid" src="{{asset('storage/images/' . $productlines->img)}}" alt="" style="height: 500px"/>
            </div>
        </div>
        <div class="col-lg-6">
            <h2 class="noo-sh-title-top"> <span>{{$productlines->id}}</span></h2>
            <p>
                {{$productlines->description}}
            </p>
            <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancle</button>

        </div>
    </div>
    @endsection
