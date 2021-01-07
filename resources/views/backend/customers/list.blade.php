@extends('backend.master')
@section('title')
    Danh sách khách hàng
@endsection
@section('content')

    <style>
        h1{
            font-size: 70px!important;

        }
        td{
            font-size: 20px!important;
            color: black!important;

        }
        th{
            font-size:25px!important;
            color: black!important;

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
                <h1>Danh Sách Khách Hàng</h1>
            </div>
            <a style="font-size: 25px!important;" class="btn btn-primary" href="{{route('customers.create')}}">Thêm mới</a>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên khách hàng</th>
                    <th scope="col">Địa chỉ</th>
                    <th scope="col">Email</th>
                    <th scope="col">Số điên thoại</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($customers as $key => $customer)
                    <tr>
                        <th scope="row">{{ ++$key }}</th>
                        <td>{{ $customer->user }}</td>
                        <td>{{ $customer->address }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>{{ $customer->phone }}</td>
                        <td><a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-info">Sửa</a></td>
                        <td><a href="{{ route('customers.destroy', $customer->id) }}" class="btn btn-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">Xóa</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div style="font-size:25px;text-align: right!important; ">
                {{$customers->links()}}
            </div>
        </div>
    </div>

@endsection
