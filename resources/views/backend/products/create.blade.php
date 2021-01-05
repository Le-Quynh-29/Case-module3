@extends('backend.index')
@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Thêm mới khách hàng</h1>
            </div>
            <div class="col-12">
                <form method="post" action="{{ route('products.store') }}">
                    @csrf
                    <div class="form-group">
                        <label>Tên sản phẩm </label>
                        <input type="text" class="form-control" name="productName"  placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label>Dòng sản phẩm </label>
                        <input type="text" class="form-control" name="productLine" placeholder="Enter productline">
                    </div>
                    <div class="form-group">
                        <label>Mô tả</label>
                        <input type="text" class="form-control" name="descripton" placeholder="Enter descripton">
                    </div>
                    <div class="form-group">
                        <label>Số lượng </label>
                        <input type="text" class="form-control" name="quantity" placeholder="Enter quantity">
                    </div>
                    <div class="form-group">
                        <label>Giá</label>
                        <input type="text" class="form-control" name="price" placeholder="Enter price">
                    </div>
                    <div class="form-group">
                        <label>Hình ảnh </label>
                        <input type="text" class="form-control" name="img" placeholder="Enter img">
                    </div>
                    <div class="form-group">
                        <label>Mã giảm giá</label>
                        <input type="text" class="form-control" name="voucher" placeholder="Enter voucher">
                    </div>
                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>
@endsection


