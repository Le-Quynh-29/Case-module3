@extends('frontend.master')
@section('frontend-master')

    <div class="about-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="banner-frame">
                        <img class="img-fluid" src="{{asset('storage/images/' . $productlines->img)}}" alt="" style="height: 500px"/>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="noo-sh-title-top"> <span>{{$productlines->id}}</span></h2>
                    <p style="color: black;font-size: 20px">
                        {{$productlines->description}}
                    </p>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancle</button>

                </div>
            </div>
        </div>
    </div>
@endsection
