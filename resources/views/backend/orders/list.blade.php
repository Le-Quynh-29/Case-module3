@extends('backend.master')
@section('title')
    Danh sách hóa đơn
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
        /*a{*/
        /*    font-size: 30px!important;*/
        /*}*/
    </style>
    <div class="col-12">
        <div class="row">
            <div class="col-12">
                <h1>Danh sách hóa đơn</h1>
            </div>
            <a style="font-size: 25px!important;" class="btn btn-primary" href="{{route('orders.create')}}">Thêm mới</a>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên khách hàng</th>

                    <th scope="col">Ngày đặt hàng </th>
                    <th scope="col">Yêu cầu đặt hàng </th>
                    <th scope="col">Ngày vận chuyển</th>
                    <th scope="col">Trạng thái</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($orders as $key => $order)
                    <tr>
                        <th scope="row">{{ ++$key }}</th>
                        <td>{{ $order->customer()->first()->user }}</td>
                        <td>{{ $order->orderDate }}</td>
                        <td>{{ $order->requiredDate }}</td>
                        <td>{{ $order->shippedDate }}</td>
                        <td>{{ $order->status }}</td>
                        <td><a href="{{ route('orders.edit', $order->id) }}" class="btn btn-info">Sửa</a></td>
                        <td><a href="{{ route('orders.destroy', $order->id) }}" class="btn btn-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">Xóa</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div style="font-size:25px;text-align: right!important; ">
                {{$orders->links()}}
            </div>
        </div>
    </div>

@endsection
