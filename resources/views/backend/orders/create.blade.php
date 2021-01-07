@extends('backend.master')
@section('title')
    Danh sach hoa don
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
                <h1>Thêm moi hoa don</h1>
            </div>
            <div class="col-12">
                <form method="post" action="{{ route('orders.store') }}">
                    @csrf
                    <div class="form-group">
                        <label>Tên khách hàng</label>
                        <select name="customerNumber">
                            @foreach($order as $val)
                                <option value="{{$val->id}}">{{$val->user}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Ngày đặt hàng</label>
                        <input type="date" class="form-control" name="orderDate"  placeholder="Enter Orderdate">
                    </div>
                    <div class="form-group">
                        <label>Yêu cầu đặt hang</label>
                        <input type="date" class="form-control" name="requiredDate" placeholder="Enter RequiredDate">
                    </div>
                    <div class="form-group">
                        <label>Ngày vận chuyển</label>
                        <input type="date" class="form-control" name="shippedDate" placeholder="Enter shippedDate">
                    </div>
                    <div class="form-group">
                        <label>Trang thai</label>
                        <select name="status" id="">
                            <option value="Còn hàng">Còn hàng</option>
                            <option value="Hết hàng">Hết hàng</option>
                            <option value="Hàng mới nhập">Hàng mới nhập</option>
                            <option value="Hàng tồn kho">Hàng tồn kho</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>
@endsection

