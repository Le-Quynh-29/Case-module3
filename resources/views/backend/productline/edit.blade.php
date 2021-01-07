@extends('backend.master')
@section('title')
    Chỉnh sửa dòng sản phẩm
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
                <h1>Chỉnh sửa dòng sản phẩm </h1>
            </div>
            <div class="col-12">
                <form method="post" action="{{ route('productline.update', $productline->id) }}"  enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Dòng sản phẩm </label>
                        <input type="text" class="form-control" name="id" value="{{ $productline->id }}">
                    </div>

                    <div>
                        <label for="inputName">Tên ảnh </label>
                        <input type="text"
                               id="inputName"
                               name="inputName">
                        <input type="file"
                               id="inputFile"
                               name="inputFile">
                    </div>
                    <div class="form-group">
                        <label>Mô tả</label>
                        <textarea style="height: 200px" class="form-control" name="description" >{{ $productline->description }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>



@endsection
