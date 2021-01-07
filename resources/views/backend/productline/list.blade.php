@extends('backend.master')
@section('title')
    Danh sách dòng sản phẩm
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
                <h1>Các dòng sản phẩm</h1>
            </div>
            <a style="font-size: 25px!important;" class="btn btn-primary" href="{{route('productline.create')}}">Thêm Mới</a>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Dòng Sản Phẩm</th>
                    <th scope="col">Mô Tả</th>
                    <th scope="col">Hình Ảnh</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($productline as $key => $pl)
                    <tr>
                        <td>{{++$key}}</td>
                        <td>{!! $pl->id !!}</td>
                        <td>{{$pl->description}}</td>
                        <td>
                            <img src="{{asset('storage/images/' . $pl->img)}}" alt="" style="width: 100px;height: 100px">
                        </td>
                        <td>
                            <a class="btn btn-info" href="{{ route('productline.edit',$pl->id) }}">Sửa</a>
                            <a class="btn btn-danger" href="{{ route('productline.delete',$pl->id) }}"  onclick="return confirm('Bạn chắc chắn muốn xóa?')">Xóa</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
