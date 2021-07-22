@extends('layout.blank_layout')
@section('main')

    <div class="col-lg-7" style="background-color: white; margin-left: 22%">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Thêm Mới Danh Mục!</h1>
            </div>
            <form class="user" action="{{route('admin-cate-save')}}" method="POST">
                @csrf
                @if (Session::get('fail'))
                <div class="alert alert-danger">
                    {{__('messages.fail')}}
                </div>
                @endif
                @if (Session::get('success'))
                <div class="alert alert-success">
                    {{__('messages.cate_success')}}
                </div>
                @endif
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="cate_name" id="exampleInputEmail" placeholder="Nhập Danh Mục">
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                    Thêm Mới
                </button>
            </form>
        </div>

</div>



@stop