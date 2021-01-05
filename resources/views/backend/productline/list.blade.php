@extends('backend.index')
@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-12">
                <h1>Các dòng sản phẩm</h1>
            </div>
            <a class="btn btn-primary" href="{{route('productline.create')}}">Thêm Mới</a>
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
                            <img src="{{asset('storage/images/' . $pl->img)}}" alt="" style="width: 100px">
                        </td>
                        <td>
                            <a class="btn btn-info" href="{{ route('productline.edit',$pl->id) }}">Update</a>
                            <a class="btn btn-danger" href="{{ route('productline.delete',$pl->id) }}"  onclick="return confirm('Bạn chắc chắn muốn xóa?')">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
