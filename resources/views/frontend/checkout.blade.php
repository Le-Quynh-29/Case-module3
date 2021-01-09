@extends('frontend.master')
@section('frontend-master')
        <!-- Start Side Menu -->
        <div class="side">
            <a href="#" class="close-side"><i class="fa fa-times"></i></a>
            <li class="cart-box">
                <ul class="cart-list">
                    <li>
                        <a href="#" class="photo"><img src="{{asset('frontend/')}}images/img-pro-01.jpg" class="cart-thumb" alt="" /></a>
                        <h6><a href="#">Delica omtantur </a></h6>
                        <p>1x - <span class="price">$80.00</span></p>
                    </li>
                    <li>
                        <a href="#" class="photo"><img src="{{asset('frontend/')}}images/img-pro-02.jpg" class="cart-thumb" alt="" /></a>
                        <h6><a href="#">Omnes ocurreret</a></h6>
                        <p>1x - <span class="price">$60.00</span></p>
                    </li>
                    <li>
                        <a href="#" class="photo"><img src="{{asset('frontend/')}}images/img-pro-03.jpg" class="cart-thumb" alt="" /></a>
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
                <h2>Checkout</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Shop</a></li>
                    <li class="breadcrumb-item active">Checkout</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End All Title Box -->

<!-- Start Cart  -->
<div class="cart-box-main">
    <div class="container">
        <div class="row new-account-login">
            <div class="col-sm-6 col-lg-6 mb-3">
                <div class="title-left">
                    <h3>Account Login</h3>
                </div>
                <h5><a data-toggle="collapse" href="" role="button" aria-expanded="false">Click here to Login</a></h5>
                <form class="mt-3 collapse review-form-box" id="formLogin">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="InputEmail" class="mb-0">Email Address</label>
                            <input type="email" name="name" class="form-control" id="InputEmail" placeholder="Enter Email"> </div>
                        <div class="form-group col-md-6">
                            <label for="InputPassword" class="mb-0">Password</label>
                            <input type="password" name="password" class="form-control" id="InputPassword" placeholder="Password"> </div>
                    </div>
                    <button type="submit" class="btn hvr-hover">Login</button>
                </form>
            </div>
            <div class="col-sm-6 col-lg-6 mb-3">
                <div class="title-left">
                    <h3>Create New Account</h3>
                </div>
                <h5><a data-toggle="collapse" href="#formRegister" role="button" aria-expanded="false">Click here to Register</a></h5>
                <form class="mt-3 collapse review-form-box" id="formRegister">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="InputName" class="mb-0">First Name</label>
                            <input type="text" class="form-control" id="InputName" placeholder="First Name"> </div>
                        <div class="form-group col-md-6">
                            <label for="InputLastname" class="mb-0">Last Name</label>
                            <input type="text" class="form-control" id="InputLastname" placeholder="Last Name"> </div>
                        <div class="form-group col-md-6">
                            <label for="InputEmail1" class="mb-0">Email Address</label>
                            <input type="email" class="form-control" id="InputEmail1" placeholder="Enter Email"> </div>
                        <div class="form-group col-md-6">
                            <label for="InputPassword1" class="mb-0">Password</label>
                            <input type="password" class="form-control" id="InputPassword1" placeholder="Password"> </div>
                    </div>
                    <button type="submit" class="btn hvr-hover">Register</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-lg-6 mb-3">
                <div class="checkout-address">
                    <div class="title-left">
                        <h3>Billing address</h3>
                    </div>
                    <form class="needs-validation" novalidate>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="firstName">First name *</label>
                                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                                <div class="invalid-feedback"> Valid first name is required. </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lastName">Last name *</label>
                                <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                                <div class="invalid-feedback"> Valid last name is required. </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="username">Username *</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="username" placeholder="" required>
                                <div class="invalid-feedback" style="width: 100%;"> Your username is required. </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email">Email Address *</label>
                            <input type="email" class="form-control" id="email" placeholder="">
                            <div class="invalid-feedback"> Please enter a valid email address for shipping updates. </div>
                        </div>
                        <div class="mb-3">
                            <label for="address">Address *</label>
                            <input type="text" class="form-control" id="address" placeholder="" required>
                            <div class="invalid-feedback"> Please enter your shipping address. </div>
                        </div>
                        <div class="mb-3">
                            <label for="address2">Address 2 *</label>
                            <input type="text" class="form-control" id="address2" placeholder=""> </div>
                        <div class="row">
                            <div class="col-md-5 mb-3">
                            </div>
                        </div>
                        <hr class="mb-1"> </form>
                </div>
            </div>
            <div class="col-sm-6 col-lg-6 mb-3">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                    </div>
                    <div class="col-md-12 col-lg-12">
                        <div class="odr-box">
                            <div class="title-left">
                                <h3>Shopping cart</h3>
                            </div>
                            <div class="rounded p-2 bg-light">
                                <div class="media mb-2 border-bottom">
                                    <div class="media-body"> <a href="{{asset('frontend/')}}detail.html"> Lorem ipsum dolor sit amet</a>
                                        <div class="small text-muted">Price: $80.00 <span class="mx-2">|</span> Qty: 1 <span class="mx-2">|</span> Subtotal: $80.00</div>
                                    </div>
                                </div>
                                <div class="media mb-2 border-bottom">
                                    <div class="media-body"> <a href="{{asset('frontend/')}}detail.html"> Lorem ipsum dolor sit amet</a>
                                        <div class="small text-muted">Price: $60.00 <span class="mx-2">|</span> Qty: 1 <span class="mx-2">|</span> Subtotal: $60.00</div>
                                    </div>
                                </div>
                                <div class="media mb-2">
                                    <div class="media-body"> <a href="{{asset('frontend/')}}detail.html"> Lorem ipsum dolor sit amet</a>
                                        <div class="small text-muted">Price: $40.00 <span class="mx-2">|</span> Qty: 1 <span class="mx-2">|</span> Subtotal: $40.00</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12">
                        <div class="order-box">
                            <div class="title-left">
                                <h3>Your order</h3>
                            </div>
                            <div class="d-flex">
                                <div class="font-weight-bold">Product</div>
                                <div class="ml-auto font-weight-bold">Total</div>
                            </div>
                            <hr class="my-1">
                            <div class="d-flex">
                                <h4>Sub Total</h4>
                                <div class="ml-auto font-weight-bold"> $ 440 </div>
                            </div>
                            <div class="d-flex">
                                <h4>Discount</h4>
                                <div class="ml-auto font-weight-bold"> $ 40 </div>
                            </div>
                            <hr class="my-1">
                            <div class="d-flex">
                                <h4>Coupon Discount</h4>
                                <div class="ml-auto font-weight-bold"> $ 10 </div>
                            </div>
                            <div class="d-flex">
                                <h4>Tax</h4>
                                <div class="ml-auto font-weight-bold"> $ 2 </div>
                            </div>
                            <div class="d-flex">
                                <h4>Shipping Cost</h4>
                                <div class="ml-auto font-weight-bold"> Free </div>
                            </div>
                            <hr>
                            <div class="d-flex gr-total">
                                <h5>Grand Total</h5>
                                <div class="ml-auto h5"> $ 388 </div>
                            </div>
                            <hr> </div>
                    </div>
                    <div class="col-12 d-flex shopping-box"> <a href="{{asset('frontend/')}}checkout.html" class="ml-auto btn hvr-hover">Place Order</a> </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- End Cart -->

<!-- End Instagram Feed  -->
@endsection
