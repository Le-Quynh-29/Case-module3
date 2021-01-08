@extends('backend.master')
@section('title')
    Chỉnh sửa chi tiet dat hang
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
                <h1>Cap nhap don hang </h1>
            </div>
            <div class="col-12">
                <form method="post" action="{{ route('orderdetails.update', $orderdetail->id) }}"  enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                            <label>Mã đơn hàng </label>
                            <select class="form-control" name="orderNumber">
                                @foreach($order as $value)
                                    <option value="{{ $value->id }}">{{ $value->id }}</option>
                                @endforeach
                            </select>
                    </div>
                    <div class="form-group">
                        <label>Tên sản phẩm</label>
                        <select class="form-control" name="productCode">
                            @foreach($product as $value)
                                <option value="{{ $value->id }}">{{ $value->productName }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Số lượng </label>
                        <input type="text" class="form-control" name="quantity" value="{{ $orderdetail->quantity }}">
                    </div>
                    <div class="form-group">
                        <label>Giá </label>
                        <input type="text" class="form-control" name="price" value="{{ $orderdetail->price }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>
@endsection
