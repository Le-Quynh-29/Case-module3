@extends('backend.index')
@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-12">
                <h1>Danh Sách Sản Phẩm</h1>
            </div>
            <a class="btn btn-primary" href="{{route('products.create')}}">Thêm mới</a>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Dòng sản phẩm</th>
                    <th scope="col">Mô tả</th>
                    <th scope="col">Số lượng </th>
                    <th scope="col">Giá</th>
                    <th scope="col">Hình ảnh</th>
                    <th scope="col">Mã giảm giá</th>
                    <th></th>
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
                        <td>{{$product->img }}</td>
                        <td>{{$product->voucher}}</td>
                        <td><a href="{{ route('product.edit', $product->id) }}" class="btn btn-warning">Sửa</a></td>
                        <td><a href="{{ route('product.destroy', $product->id) }}" class="btn btn-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">Xóa</a></td>
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

