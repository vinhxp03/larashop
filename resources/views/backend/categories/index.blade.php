@extends('backend.master')

@section('content')
<div class="row page-tilte align-items-center">
  <div class="col-md-auto">
    <a href="#" class="mt-3 d-md-none float-right toggle-controls"><span class="material-icons">keyboard_arrow_down</span></a>
    <h1 class="weight-300 h3 title">Category</h1>
    <p class="text-muted m-0 desc">Danh mục sản phẩm</p>
  </div>
  <div class="col controls-wrapper mt-3 mt-md-0 d-none d-md-block ">
    <div class="controls d-flex justify-content-center justify-content-md-end">
      <input type="search" class="form-control d-inline-block" placeholder="Search in tabel...">
      <button type="button" class="btn btn-danger" onclick="window.location.href='{{ url('admin/add-category') }}'">Thêm mới danh mục</button>
    </div>
  </div>
</div>
@if (Session::has('success'))
  <div class="alert alert-success" role="alert">{{ Session::get('success') }}</div>
@endif
<table class="table mb-4 responsive-table table-bordered bg-white">
  <thead class="thead-light2">
    <tr>
      <th scope="col" width="1">#</th>
      <th scope="col" class="resizeable">Name <span class="material-icons align-text-bottom ml-1 md-18">sort</span></th>
      <th scope="col" class="resizeable">Url <span class="material-icons align-text-bottom ml-1 md-18">sort</span></th>
      <th scope="col" class="resizeable">Decription <span class="material-icons align-text-bottom ml-1 md-18">sort</span></th>
      <th scope="col" width="1">Actions</th>
    </tr>
  </thead>
  <tbody>
  	@php $count = 1 @endphp
    @foreach ($categories as $category)
    <tr>
      <th data-label="Serial Number" scope="row">{{ $count }}</th>
      <td data-label="Link Text">{{ $category->name }}</td>
      <td data-label="First Name">{{ $category->url }}</td>
      <td data-label="Last Name">{{ $category->decription }}</td>
      <td data-label="Actions" class="text-md-center dropdown dropleft">
        <a href="#" class="text-muted" id="actionDropdown" data-toggle="dropdown" aria-expanded="false"><span class="material-icons md-20 align-middle">more_vert</span></a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="actionDropdown" x-placement="left-start" style="position: absolute; transform: translate3d(24px, 13px, 0px); top: 0px; left: 0px; will-change: transform;">
          <a class="dropdown-item" href="#">Xóa dòng</a>
          <a class="dropdown-item" href="#">Sửa dòng</a>
        </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<nav aria-label="Page navigation example">
  <form class="form-inline float-left">
    <label class="my-1 mr-2 d-none d-md-block" for="show-data">Showing 10 out of 478</label>
    <select class="form-control" id="show-data">
      <option selected="">25</option>
      <option value="1">50</option>
      <option value="2">100</option>
      <option value="3">all</option>
    </select>
  </form>
  <ul class="pagination mt-3 justify-content-end">
    <li class="page-item">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item active"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>
@endsection