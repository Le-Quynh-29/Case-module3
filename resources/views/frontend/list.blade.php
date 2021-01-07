@extends('frontend.index')
@section('product')
    @foreach($products as $key => $product)
    <div class="col-lg-3 col-md-6 special-grid best-seller">
            <div class="products-single fix">
                <div class="box-img-hover">
                    <div class="type-lb">
                        <p class="sale">Sale</p>
                    </div>
                    <img src="{{asset ('storage/images/'.$product->img)}} " class="img-fluid" alt="" style="height: 200px">
{{--                                                <img src="{{asset('frontend/images/img-pro-01.jpg')}}" class="img-fluid" alt="Image">--}}
                    <div class="mask-icon">
                        <ul>
                            <li><a href="{{route('products.detail',$product->id)}}" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
{{--                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>--}}
{{--                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>--}}
                        </ul>
                        <a class="cart" href="#">Add to Cart</a>
                    </div>
                </div>
                <div class="why-text">
                    <h4>Lorem ipsum dolor sit amet</h4>
                    <h5>{{ number_format($product->price)}}đ</h5>
                </div>

            </div>
    </div>

    @endforeach
@endsection

@section('productline')
    @foreach($productlines as $productline)
    <li class="text-center">--}}
        <img src="{{asset('storage/images/' . $productline->img)}}" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Freshshop</strong></h1>
                            <p class="m-b-40">See how your users experience your website in realtime or view <br> trends to see any changes in performance over time.</p>
{{--                            <p><a class="btn hvr-hover" href="#">Shop New</a></p>--}}
                        </div>
                    </div>
                </div>
            </li>
    @endforeach
@endsection


@section('productlines')
    @foreach($productlines as $productline)
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="{{asset('storage/images/' . $productline->img)}}" alt="" style="height: 300px"/>
                        <a class="btn hvr-hover" href="{{route('productline.detail',$productline->id)}}">{{$productline->id}}</a>
                    </div>
    </div>
    @endforeach
@endsection

