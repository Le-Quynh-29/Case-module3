@extends('backend.index')
@section('content')
    <div class="sub-main-w3">
        <form method="post" action="{{ route('productline.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Dòng Sản Phẩm</label>
                <input type="text" name="id" class="form-control">
            </div>
            <div class="form-group">
                <label>Mô Tả</label>
                <input type="text" name="description" class="form-control">
            </div>

            <div class="form-group">
                <label for="inputName">Tên ảnh </label>
                <input type="text"
                       id="inputName"
                       name="inputName" class="form-control">
                <input type="file"
                       id="inputFile"
                       name="inputFile" class="form-control">
            </div>
            <button type="submit" value="add" class="btn btn-primary">ADD</button>
            <button onclick="window.history.go(-1); return false;">Cancle</button>
        </form>
    </div>
@endsection
