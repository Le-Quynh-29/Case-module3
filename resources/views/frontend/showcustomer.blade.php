@extends('frontend.master')
@section('frontend-master')


<div class="contact-box-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-sm-12">
                <div class="contact-form-right">
                    <h2>GET IN TOUCH</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed odio justo, ultrices ac nisl sed, lobortis porta elit. Fusce in metus ac ex venenatis ultricies at cursus mauris.</p>
                    <form id="contactForm">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="user" name="user" placeholder="Your Name" required data-error="Please enter your name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" placeholder="Your Email" id="email" class="form-control" name="name" required data-error="Please enter your email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="subject" name="name" placeholder="Subject" required data-error="Please enter your Subject">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control" id="message" placeholder="Your Message" rows="4" data-error="Write your message" required></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="submit-button text-center">
                                    <button class="btn hvr-hover" id="submit" type="submit">Send Message</button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="contact-info-left">
                    <h2>CONTACT INFO</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent urna diam, maximus ut ullamcorper quis, placerat id eros. Duis semper justo sed condimentum rutrum. Nunc tristique purus turpis. Maecenas vulputate. </p>
                    <ul>
                        <li>
                            <p><i class="fas fa-map-marker-alt"></i>Name: {{$customers->user}} <br>Hello<br> KS 87213 </p>
                        </li>
                        <li>
                            <p><i class="fas fa-phone-square"></i>Address: {{$customers->address}} </p>
                            <p><i class="fas fa-envelope"></i>Email: {{$customers->email}} <a href="mailto:contactinfo@gmail.com">contactinfo@gmail.com</a></p>

                            <p><i class="fas fa-phone-square"></i>Phone: {{$customers->phone}} <a href="tel:+1-888705770"></a></p>
                            <p><i class="fas fa-phone-square"></i>Password: {{$customers->password}} <a href="tel:+1-888705770">+1-888 705 770</a></p>

                        </li>
                        <li>
                        </li>
                    </ul>

                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">

{{--                            <li class="nav-item active"><a class="nav-link" href="{{route('customers.show')}}">Home</a></li>--}}
{{--                            <li class="dropdown">--}}
{{--                                <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">SHOP</a>--}}
{{--                                <ul class="dropdown-menu">--}}
{{--                                    <li><a href="{{asset('frontend/shop.html')}}">Sidebar Shop</a></li>--}}
{{--                                    <li><a href="{{asset('frontend/shop-detail.html')}}">Shop Detail</a></li>--}}
{{--                                    <li><a href="{{asset('frontend/cart.html')}}">Cart</a></li>--}}
{{--                                    <li><a href="{{asset('frontend/checkout.html')}}">Checkout</a></li>--}}
{{--                                    <li><a href="{{asset('frontend/my-account.html')}}">My Account</a></li>--}}
{{--                                    <li><a href="{{asset('frontend/wishlist.html')}}">Wishlist</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
                            <li class="nav-item"><a class="nav-link" href="{{route('menu')}}">Các dòng sản phẩm</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('customers.show')}}">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
