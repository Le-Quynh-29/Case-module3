@extends('backend.index')
@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-12">
                <h1>Danh Sách Khách Hàng</h1>
            </div>
            <a class="btn btn-primary" href="{{route('customers.create')}}">Thêm mới</a>
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
                {{--                @if(count($customers) == 0)--}}
                {{--                    <tr>--}}
                {{--                        <td colspan="7" class="text-center">Không có dữ liệu</td>--}}
                {{--                    </tr>--}}
                {{--                @else--}}
                @foreach($customers as $key => $customer)
                    <tr>
                        <th scope="row">{{ ++$key }}</th>
                        <td>{{ $customer->user }}</td>
                        <td>{{ $customer->address }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>{{ $customer->phone }}</td>
                        <td><a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-warning">sửa</a></td>
                        <td><a href="{{ route('customers.destroy', $customer->id) }}" class="btn btn-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">xóa</a></td>
                    </tr>
                @endforeach
                {{--                @endif--}}
                </tbody>
            </table>
            <div style="font-size:25px;text-align: right!important; ">
                {{$customers->links()}}
            </div>
        </div>
    </div>

@endsection
