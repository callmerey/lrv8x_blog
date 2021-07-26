@extends('layout.blank_layout')
@section('main')

    <div class="col-lg-7" style="background-color: white; margin-left: 22%">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Thêm Mới Danh Mục!</h1>
            </div>
            <form class="user" action="{{url('category/'. $category->cate_id)}}" method="POST">
                @method('PUT')
                @csrf
                @if (Session::get('fail'))
                <div class="alert alert-danger">
                    {{__('messages.fail')}}
                </div>
                @endif
                @if (Session::get('msg'))
                <div class="alert alert-success">
                    {{__('messages.msg')}}
                </div>
                @endif
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" value="{{$category->cate_name}}" name="cate_name" id="exampleInputEmail" placeholder="Nhập Danh Mục">
                    <input type="hidden" value="{{$category->cate_id}}">
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                    Cập Nhật
                </button>
            </form>
        </div>

</div>



@stop