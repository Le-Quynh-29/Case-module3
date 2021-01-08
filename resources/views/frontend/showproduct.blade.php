@extends('frontend.master')
@section('frontend-master')

<div class="shop-detail-box-main">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-5 col-md-6">
                <div id="carousel-example-1" class="single-product-slider carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="img-fluid" src="{{asset('storage/images/' . $product->img)}}" alt="" style="height: 500px"/>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-xl-7 col-lg-7 col-md-6">
                <div class="single-product-details">
                    <h2 class="noo-sh-title-top"> <span>{{$product->productName}}</span></h2>
                    @if($product->voucher != 0)
                        <del>
                            {{number_format($product->price)}}
                            đ
                        </del>
                        <h5>
                            {{number_format($product->price * (1 - $product->voucher/100))}}đ
                        </h5>
                    @else
                        <h5>
                            {{number_format($product->price)}}đ
                        </h5>
                    @endif
                    <h4>Short Description:</h4>
                    <h5>Số lượng sản phẩm :  {{$product->quantity}}</h5>
                    <p style="font-size: 17px;color: black">
                        {{$product->descripton}}
                    </p>
                    <ul>
                        <li>
                            <div class="form-group quantity-box">
                                <label class="control-label">Quantity</label>
                                <input class="form-control" value="0" min="0" max="20" type="number">
                            </div>
                        </li>
                    </ul>

                    <div class="price-box-bar">
                        <div class="cart-and-bay-btn">
                            <a class="btn hvr-hover" data-fancybox-close="" href="#">Buy New</a>
                            <a class="btn hvr-hover" data-fancybox-close="" href="#">Add to cart</a>
                        </div>
                    </div>


                </div>
            </div>
        </div>

    </div>
</div>
<!-- End Cart -->
@endsection
