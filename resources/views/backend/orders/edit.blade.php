@extends('backend.master')
@section('title')
    Chỉnh sửa hóa đơn
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
    <div class="container">
        <div class="col-12 col-md-12">
            <div class="row">
                <div class="col-12">
                    <h1>Chỉnh sửa hóa đơn</h1>
                </div>
                <div class="col-12">
                    <form method="post" action="{{ route('orders.update', $order->id) }}">
                        @csrf
                        <div class="form-group">
                            <label> Ngày đặt hàng </label>
                            <input type="date" class="form-control" name="orderDate" value="{{ $order->orderDate }}">
                        </div>
                        <div class="form-group">
                            <label>Yêu cầu đặt hàng</label>
                            <input type="date" class="form-control" name="requiredDate" value="{{ $order->requiredDate }}">
                        </div>
                        <div class="form-group">
                            <label>Ngày vận chuyển</label>
                            <input type="date" class="form-control" name="shippedDate" value="{{ $order->shippedDate }}">
                        </div>
                        <div class="form-group">
                            <label>Trạng thái </label>
                            <select name="status" id="">
                                <option value="Còn hàng">Còn hàng</option>
                                <option value="Hết hàng">Hết hàng</option>
                                <option value="Hàng mới nhập">Hàng mới nhập</option>
                                <option value="Hàng tồn kho">Hàng tồn kho</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
                        <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
