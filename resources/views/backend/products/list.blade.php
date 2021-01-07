@extends('backend.master')
@section('title')
    Danh sách sản phẩm
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
                <h1>Danh Sách Sản Phẩm</h1>
            </div>
            <a style="font-size: 25px!important;" class="btn btn-primary" href="{{route('products.create')}}">Thêm mới</a>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Dòng sản phẩm</th>
                    <th scope="col">Mô tả</th>
                    <th scope="col">Số lượng </th>
                    <th scope="col">Giá</th>

                    <th scope="col">Mã giảm giá</th>
                    <th scope="col">Hình ảnh</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>

                @foreach($products as $key => $product)
                    <tr>
                        <th scope="row">{{ ++$key }}</th>
                        <td>{{$product->productName }}</td>
                        <td>{{$product->productLine }}</td>
                        <td>{{$product->descripton }}</td>
                        <td>{{$product->quantity }}</td>
                        <td>{{$product->price}}</td>

                        <td>{{$product->voucher}}</td>

                        <td>
                            <img src="{{asset ('storage/images/'.$product->img)}} " alt="" style="width: 100px ;height: 100px">
                        </td>
                        <td>
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-info">Sửa</a>
                            <a href="{{ route('products.delete', $product->id) }}" class="btn btn-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">Xóa</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div style="font-size:25px;text-align: right!important; ">
{{--                {{$product->links()}}--}}
            </div>
        </div>
    </div>

@endsection

