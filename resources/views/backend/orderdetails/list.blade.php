@extends('backend.master')
@section('title')
    Chi tiết đơn hàng
@endsection
@section('content')

    <style>
        h1{
            font-size: 70px!important;

        }
        td{
            font-size: 20px!important;
        }
        th{
            font-size:25px!important;

        }
        button{
            font-size: 15px!important;
        }
    </style>
    <div class="col-12">
        <div class="row">
            <div class="col-12">
                <h1>Chi tiết đơn hàng </h1>
            </div>
            <a style="font-size: 25px!important;" class="btn btn-primary" href="{{route('orderdetails.create')}}">Thêm mới</a>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Mã đơn hàng</th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Số lượng  </th>
                    <th scope="col">Giá tiền </th>

                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($orderdetails as $key => $orderdetail)
                    <tr>
                        <th scope="row">{{ ++$key }}</th>
                        <td>{{ $orderdetail->orderNumber }}</td>
                        <td>{{$orderdetail->Product()->first()->productName }}</td>
                        <td>{{ $orderdetail->quantity }}</td>
                        <td>{{ $orderdetail->price }}</td>

                        <td><a href="{{ route('orderdetails.edit', $orderdetail->id) }}" class="btn btn-info">Sửa</a></td>
{{--                        <td><a href="{{ route('orders.destroy', $order->id) }}" class="btn btn-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">Xóa</a></td>--}}
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div style="font-size:25px;text-align: right!important; ">
                {{$orderdetails->links()}}
            </div>
        </div>
    </div>

@endsection
