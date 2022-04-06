@extends('layout.blank_layout');

@section('main')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Danh Sách Bài Viết</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Mã</th>
                            <th>Tên BV</th>
                            <th>Danh Mục BV</th>
                            <th>Mô tả BV</th>   
                            <th>Hình Ảnh BV</th>                                               
                            <th>Ngày Đăng</th>
                            <th>Hành Động</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $post)
                        <tr>
                            <td>{{$post->post_id}}</td>
                            <td>{{$post->name_post}}</td>
                            <td>{{$post->cate_name}}</td>
                            <td>{{$post->desc}}</td>
                            <td><img style="width: 50px; height: 50px; "  src="{{url('public/uploads/')}}/{{$post->image_post}}" alt=""></td> 
                            <td>{{$post->created_at->format('d-m-Y')}}</td>
                            <td style="width: 214px;">
                                <a style="float: left" href="#" class="btn btn-info btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-info-circle"></i>
                                    </span>
                                    <span class="text">Sửa</span>
                                </a>
                                <a style="float: left" href="#" class="btn btn-danger btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-trash"></i>
                                    </span>
                                    <span class="text">Xóa</span>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

@stop