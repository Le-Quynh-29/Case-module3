@extends('frontend.index')

@section('search')
    <li>
        <form action="{{route('p.search')}}"  method="post">
            @csrf
            <input type="text" name="search" class="form-control search" placeholder=" Search...">
        </form>
    </li>
@endsection

@section('product')
    @foreach($products as $key => $product)
        <div class="col-lg-3 col-md-6 special-grid best-seller">
            <div class="products-single fix">
                <div class="box-img-hover">
                    @if($product->voucher != 0)

                        <div class="type-lb">
                            <p class="sale">Sale {{$product->voucher}} %</p>
                        </div>

                    <div class="type-lb">
                        <p class="sale">Sale {{$product->voucher}} %</p>
                    </div>
                    @else
                    @endif
                    <img src="{{asset ('storage/images/'.$product->img)}} " class="img-fluid" alt="" style="height: 200px">
                    <div class="mask-icon">
                        <ul>
                            <li><a href="{{route('products.detail',$product->id)}}" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>

                        </ul>
                        <a class="cart" href="{{route('cart.addToCart',$product->id)}}">Add to Cart</a>
                    </div>
                </div>
                <div class="why-text">
                    @if($product->voucher != 0)
                        <h4>{{$product->productName}}</h4>
                        <del>
                            {{number_format($product->price)}}
                            đ
                        </del>
                        <br/>
                        <h5>
                            {{number_format($product->price * (1 - $product->voucher/100))}}đ
                        </h5>
                    @else
                        <h5>
                            {{number_format($product->price)}}đ
                        </h5>
                    @endif

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
