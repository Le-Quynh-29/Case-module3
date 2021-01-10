@extends('frontend.master')
@section('frontend-master')
<header>
    <nav>
        <div class="side">
            <a href="#" class="close-side"><i class="fa fa-times"></i></a>
            <li class="cart-box">
                <ul class="cart-list">
                    <li>
                        <a href="#" class="photo"><img src="{{asset('frontend/')}}images/img-pro-01.jpg" class="cart-thumb" alt=""/></a>
                        <h6><a href="#">Delica omtantur </a></h6>
                        <p>1x - <span class="price">$80.00</span></p>
                    </li>
                    <li>
                        <a href="#" class="photo"><img src="{{asset('frontend/')}}images/img-pro-02.jpg" class="cart-thumb" alt=""/></a>
                        <h6><a href="#">Omnes ocurreret</a></h6>
                        <p>1x - <span class="price">$60.00</span></p>
                    </li>
                    <li>
                        <a href="#" class="photo"><img src="{{asset('frontend/')}}images/img-pro-03.jpg" class="cart-thumb" alt=""/></a>
                        <h6><a href="#">Agam facilisis</a></h6>
                        <p>1x - <span class="price">$40.00</span></p>
                    </li>
                    <li class="total">
                        <a href="#" class="btn btn-default hvr-hover btn-cart">VIEW CART</a>
                        <span class="float-right"><strong>Total</strong>: $180.00</span>
                    </li>
                </ul>
            </li>
        </div>
        <!-- End Side Menu -->
    </nav>
    <!-- End Navigation -->
</header>
<!-- End Main Top -->

<!-- Start Top Search -->
<div class="top-search">
    <div class="container">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-search"></i></span>
            <input type="text" class="form-control" placeholder="Search">
            <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
        </div>
    </div>
</div>
<!-- End Top Search -->

<!-- Start All Title Box -->
<div class="all-title-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Yêu thích</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Shop</a></li>
                    <li class="breadcrumb-item active">Yêu thích</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End All Title Box -->

<!-- Start Wishlist  -->
<div class="wishlist-box-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-main table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Hình ảnh </th>
                            <th>Tên sản phẩm</th>
                            <th>Giá</th>
                            <th>Giỏ hàng</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($list as $value)
                            <tr>
                                <td class="thumbnail-img">
                                    <a href="#">
                                        <img src="{{asset ('storage/images/'.$value->options->img)}} " class="img-fluid" alt="">
                                    </a>
                                </td>
                                <td class="name-pr">
                                    <a href="#">
                                        {{$value->name}}
                                    </a>
                                </td>
                                <td class="price-pr">
                                    <del>
                                        {{number_format($value->price)}}đ
                                    </del>
                                    <p>
                                        {{number_format($value->options->voucher)}}
                                        đ
                                    </p>
                                <td class="add-pr">
                                    <a class="btn hvr-hover" href="{{route('cart.addToCart',$value->id)}}">Thêm vào giỏ hàng</a>
                                </td>
                                <td class="remove-pr">
                                    <a href="{{route('delete.cart',$value->id)}}">
                                        <i class="fas fa-times"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
<!-- End Wishlist -->

