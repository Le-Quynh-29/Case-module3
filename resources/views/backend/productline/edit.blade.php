@extends('backend.index')
@section('content')
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
                    <div class="form-group">
                        <label>Mô tả</label>
                        <input type="text" class="form-control" name="description" value="{{ $productline->description }}">
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

                    <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>



@endsection
