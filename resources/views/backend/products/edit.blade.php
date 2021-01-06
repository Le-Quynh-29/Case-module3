@extends('backend.master')
@section('title')
    Chỉnh sửa sản phẩm
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
                <h1>Chỉnh sửa sản phẩm</h1>
            </div>
            <div class="col-12">
                <form method="post" action="{{ route('products.update', $product->id) }}"  enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Tên sản phẩm</label>
                        <input type="text" class="form-control" name="productName" value="{{ $product->productName }}">
                    </div>
                    <div class="form-group">
                        <label>Dòng sản phẩm</label>
                        <select class="form-control" name="productLine">
                            @foreach($productline as $value)
                                <option value="{{ $value->id }}">{{ $value->id }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Số lượng </label>
                        <input type="text" class="form-control" name="quantity" value="{{ $product->quantity }}">
                    </div>
                    <div class="form-group">
                        <label>Giá </label>
                        <input type="text" class="form-control" name="price" value="{{ $product->price }}">
                    </div>
                    <div class="form-group">
                        <label>Mã giảm giá</label>
                        <input type="text" class="form-control" name="voucher" value="{{ $product->voucher }}">
                    </div>
                    <div>
                        <label for="inputName">File Name</label>
                        <input type="text"
                               id="inputName"
                               name="inputName">
                        <input type="file"
                               id="inputFile"
                               name="inputFile">
                    </div>
                    <div class="form-group">
                        <label>Mô tả </label>
                        <textarea style="height: 200px" class="form-control" name="descripton" >{{ $product->descripton }}</textarea>
{{--                        <input type="text" class="form-control" name="descripton" value="{{ $product->descripton }}">--}}
                    </div>
                    <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>
@endsection

