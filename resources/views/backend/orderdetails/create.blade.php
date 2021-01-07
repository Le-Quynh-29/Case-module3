@extends('backend.master')
@section('title')
    Chi tiet don hang
@endsection
@section('content')

    <style>
        h1{
            font-size: 70px!important;

        }
        label{
            font-size: 25px!important;
        }
        input{
            font-size: 20px!important;
        }
        button{
            font-size: 20px!important;
        }
    </style>
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Them moi don hang</h1>
            </div>
            <div class="col-12">
                <form method="post" action="{{ route('orderdetails.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Ma don hang </label>
                        <select class="form-control" name="orderNumber">
                            @foreach($orders as $order)
                                <option value="{{ $order->id}}">{{ $order->id }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label> Ten san pham </label>
                        <select class="form-control" name="productCode">
                            @foreach($products as $product)
                                <option value="{{ $product->id }}">{{ $product->productName }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Số lượng </label>
                        <input type="number" class="form-control" name="quantity" placeholder="Enter quantity">
                    </div>
                    <div class="form-group">
                        <label>Giá</label>
                        <input type="text" class="form-control" name="price" placeholder="Enter price">
                    </div>
                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>
@endsection







{{--@extends('backend.master')--}}
{{--@section('title')--}}
{{--    Thêm mới sản phẩm--}}
{{--@endsection--}}
{{--@section('content')--}}

{{--    <style>--}}
{{--        h1{--}}
{{--            font-size: 70px!important;--}}

{{--        }--}}
{{--        label{--}}
{{--            font-size: 25px!important;--}}
{{--        }--}}
{{--        input{--}}
{{--            font-size: 20px!important;--}}
{{--        }--}}
{{--        button{--}}
{{--            font-size: 20px!important;--}}
{{--        }--}}
{{--    </style>--}}
{{--    <div class="col-12 col-md-12">--}}
{{--        <div class="row">--}}
{{--            <div class="col-12">--}}
{{--                <h1>Thêm mới sản phẩm </h1>--}}
{{--            </div>--}}
{{--            <div class="col-12">--}}
{{--                <form method="post" action="{{ route('orderdetails.store') }}" enctype="multipart/form-data">--}}
{{--                    @csrf--}}
{{--                    <div class="form-group">--}}
{{--                        <label>Tên sản phẩm </label>--}}
{{--                        <input type="text" class="form-control" name="orderNumber"  placeholder="Enter name">--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <label>Ma sản phẩm </label>--}}
{{--                        <select class="form-control" name="productCode">--}}
{{--                            @foreach($orderdetail as $value)--}}
{{--                                <option value="{{ $value->id }}">{{ $value->id }}</option>--}}
{{--                            @endforeach--}}
{{--                        </select>--}}
{{--                    </div>--}}

{{--                    <div class="form-group">--}}
{{--                        <label>Số lượng </label>--}}
{{--                        <input type="number" class="form-control" name="quantity" placeholder="Enter quantity">--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <label>Giá</label>--}}
{{--                        <input type="text" class="form-control" name="price" placeholder="Enter price">--}}
{{--                    </div>--}}
{{--                    <button type="submit" class="btn btn-primary">Thêm mới</button>--}}
{{--                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--@endsection--}}





