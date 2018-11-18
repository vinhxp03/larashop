@extends('backend.master')

@section('content')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url('admin/category') }}">Danh mục</a></li>
    <li class="breadcrumb-item active" aria-current="page">Cập nhật danh mục</li>
  </ol>
</nav>
<div class="row page-tilte align-items-center">
  <div class="col-md-auto">
    <a href="#" class="mt-3 d-md-none float-right toggle-controls"><span class="material-icons">keyboard_arrow_down</span></a>
    <nav aria-label="breadcrumb">
    <h1 class="weight-300 h3 title">Category</h1>
    <p class="text-muted m-0 desc">Danh mục sản phẩm</p>
  </div>
  <div class="col controls-wrapper mt-3 mt-md-0 d-none d-md-block ">
    <div class="controls d-flex justify-content-center justify-content-md-end">
    </div>
  </div>
</div>
<div class="card mb-4">
  <div class="card-header">Cập nhật category</div>
  <div class="card-body">
    <form action="" method="post">
      <div class="form-group">
      	{{ csrf_field() }}
        <label for="exampleFormControlInput1">Tên danh mục</label>
        <input type="text" class="form-control @if ($errors->has('cate_name')) {{ 'is-invalid' }} @endif" name="cate_name" placeholder="" value="{{ $category->name }}">
        @if ($errors->has('cate_name'))
          <div class="invalid-feedback">{{ $errors->first('cate_name') }}</div>
        @endif
      </div>
      <div class="form-group">
        <label for="inputPassword4">Mô tả</label>
        <input type="text" class="form-control @if ($errors->has('cate_decription')) {{ 'is-invalid' }} @endif" name="cate_decription" placeholder="" value="{{ $category->decription }}">
        @if ($errors->has('cate_decription'))
          <div class="invalid-feedback">{{ $errors->first('cate_decription') }}</div>
        @endif
      </div>
      <div class="form-group">
        <label for="inputAddress">URL</label>
        <input type="text" class="form-control @if ($errors->has('cate_url')) {{ 'is-invalid' }} @endif" name="cate_url" placeholder="" value="{{ $category->url }}">
        @if ($errors->has('cate_url'))
          <div class="invalid-feedback">{{ $errors->first('cate_url') }}</div>
        @endif
      </div>
      <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
  </div>
</div>
@endsection