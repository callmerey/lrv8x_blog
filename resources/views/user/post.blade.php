<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Thanh Son</title>
    <link rel="stylesheet" type="text/css" id="style-ref"
        href="https://hashnode.com/static/css/app.min.css?v=1625504643155">
    <link href="{{ url('public/site') }}/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
        input[type=file] {
            cursor: pointer;
            width: 180px;
            height: 34px;
            overflow: hidden;
        }

        input[type=file]:before {
            width: 158px;
            height: 32px;
            font-size: 16px;
            line-height: 32px;
            content: 'Hình ảnh đại diện';
            display: inline-block;
            background: white;
            border: 1px solid #000;
            padding: 0 10px;
            text-align: center;
            font-family: Helvetica, Arial, sans-serif;
        }

        input[type=file]::-webkit-file-upload-button {
            visibility: hidden;
        }

    </style>
</head>


<body class="leading-normal bg-bluish-gray dark:bg-brand-dark-grey-900">
    <div class="progressbar" id="hn-progressbar" style="display: none;"></div><input type="hidden" id="hn-user"
        value="60ca23678ce4491f0f2970a3">
    <div id="__next">
        <div class="homepage new-feed">
            <div class="container grid items-stretch grid-cols-12 gap-2 px-2 mx-auto md:gap-4 xl:grid-cols-8 2xl:px-5">
                <div class="z-40 col-span-12 md:col-span-9 lg:col-span-10 xl:col-span-8">
                    <div class="w-full max-w-full ">
                        <div class="bg-white bg-center bg-cover border-l border-r profile-cover dark:border-brand-grey-800 dark:bg-brand-grey-900"
                            style="background-image: url({{url('public/uploads/')}}/{{$user->image_background}});">
                        </div>
                        <div
                            class="px-4 pt-4 mb-4 bg-white border-b rounded-bl-lg rounded-br-lg lg:px-16 dark:bg-brand-dark-grey-900 lg:border-l lg:border-r dark:border-brand-grey-800">
                            <div class="flex flex-row flex-wrap items-center">
                                <div
                                    class="flex-shrink-0 w-24 h-24 mb-4 bg-white border-4 border-white rounded-full shadow-lg md:mb-0 md:-mt-40 lg:mb-0 lg:w-40 lg:h-40 md:mr-8 dark:bg-brand-grey-800 dark:border-brand-grey-800 xl:ml-48">
                                    <a class="block w-full h-auto relative undefined" data-title="false"><img
                                            data-sizes="auto" loading="lazy"
                                            src="{{url('public/uploads/')}}/{{$user->image_user}}"
                                            data-src="https://cdn.hashnode.com/res/hashnode/image/upload/v1623860071558/mDXtpyO32.png?w=400&amp;h=400&amp;fit=crop&amp;crop=faces&amp;auto=compress"
                                            data-width="400" data-height="400" alt="Thanh Son's photo"
                                            class="block w-full undefined block w-full rounded-full z-20 relative lazyautosizes lazyloaded"
                                            sizes="152px"></a>
                                </div>
                                <div class="w-full pr-10 md:flex-1 lg:w-auto">
                                    <h1
                                        class="mb-2 text-3xl font-bold leading-tight tracking-tight text-black dark:text-white">
                                        <a>{{$user->name}}</a>
                                    </h1>
                                    <div class="flex flex-row flex-wrap items-center mt-6">
                                        <button class="flex flex-row items-center button-transparent">
                                            <svg class="w-5 h-5 mr-2 fill-current" viewBox="0 0 512 512">
                                                <path
                                                    d="M493.255 56.236l-37.49-37.49c-24.993-24.993-65.515-24.994-90.51 0L12.838 371.162.151 485.346c-1.698 15.286 11.22 28.203 26.504 26.504l114.184-12.687 352.417-352.417c24.992-24.994 24.992-65.517-.001-90.51zm-95.196 140.45L174 420.745V386h-48v-48H91.255l224.059-224.059 82.745 82.745zM126.147 468.598l-58.995 6.555-30.305-30.305 6.555-58.995L63.255 366H98v48h48v34.745l-19.853 19.853zm344.48-344.48l-49.941 49.941-82.745-82.745 49.941-49.941c12.505-12.505 32.748-12.507 45.255 0l37.49 37.49c12.506 12.506 12.507 32.747 0 45.255z">
                                                </path>
                                            </svg>
                                            <a href="{{URL::to('user/'.$user->id).'/edit'}}">{{__('messages.profile')}}</a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="flex flex-row items-center justify-center mt-12 overflow-auto text-sm font-bold tracking-wider uppercase text-brand-grey-800 dark:text-brand-grey-400">
                                <a href="profile"
                                    class="px-6 py-2 border-b-2 border-transparent hover:bg-brand-grey-100 dark:hover:bg-brand-grey-700 border-accent-blue-A700">Bài
                                    Viết
                                </a>
                                <a href="post"
                                    class="px-6 py-2 border-b-2 border-transparent hover:bg-brand-grey-100 dark:hover:bg-brand-grey-700 null">Viết
                                    Bài
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row items-start flex-grow-0 w-full max-w-full">
                        <div class="flex-1 w-full max-w-full lg:w-auto lg:pl-5" style="padding-left: 0px;">
                            <div class="flex flex-col flex-grow-0 w-full pb-24">
                                <div class="overflow-hidden border rounded-t-lg dark:border-brand-grey-800">
                                    <div
                                        class="bg-white w-full dark:bg-brand-dark-grey-800 dark:border-brand-grey-800 border-b py-5 px-4 md:px-5">
                                        <div class="p-5">
                                            <div class="text-center">
                                                <h1 class="h4 text-gray-900 mb-4">Viết Bài!</h1>
                                            </div>
                                            <form class="user" action="{{route('post.store')}}" method="POST"
                                                enctype="multipart/form-data">

                                                @if (Session::get('fail'))
                                                    <div class="alert alert-danger">
                                                        {{ Session::get('fail') }}
                                                    </div>
                                                @endif

                                                @csrf
                                                <div class="form-group">
                                                    <input type="text" class="form-control form-control-user"
                                                        id="exampleInputEmail" aria-describedby="emailHelp"
                                                        placeholder="Tiêu đề bài viết" name="name_post"
                                                        value="{{ old('name_post') }}">
                                                    <span class="text-danger">
                                                        @error('name_post')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control form-control-user"
                                                        id="exampleInputEmail" aria-describedby="emailHelp"
                                                        placeholder="Mô tả bài viết" name="desc"
                                                        value="{{ old('desc') }}">
                                                    <span class="text-danger">
                                                        @error('desc')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>

                                                <div class="form-group">
                                                    <select name="cate_id" class="form-control custom-select">
                                                        @foreach ($items as $cate)
                                                            <option value="{{ $cate->cate_id }}">
                                                                {{ $cate->cate_name }} 
                                                            </option>                                       
                                                        @endforeach
                                                    </select>

                                                </div>
                                                
                                                <div class="form-group">
                                                    <input type="file" name="image_post" >
                                                </div>
                                                <div class="form-group">
                                                    <textarea class="form-control" name="title_post"
                                                        id="summernote"></textarea>
                                                </div>
                                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                                    Đăng Bài
                                                </button>
                                                
                                            </form>
                                            <hr>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
</body>
<script src="{{ url('public/site') }}/vendor/jquery/jquery.min.js"></script>
<script src="{{ url('public/site') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="{{ url('public/site') }}/vendor/jquery-easing/jquery.easing.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="{{ url('public/site') }}/js/sb-admin-2.min.js"></script>

<script>
    $(document).ready(function() {

        // Define function to open filemanager window
        var lfm = function(options, cb) {
            var route_prefix = (options && options.prefix) ? options.prefix : '/laravel-filemanager';
            window.open(route_prefix + '?type=' + options.type || 'file', 'FileManager',
                'width=900,height=600');
            window.SetUrl = cb;
        };

        // Define LFM summernote button
        var LFMButton = function(context) {
            var ui = $.summernote.ui;
            var button = ui.button({
                contents: '<i class="note-icon-picture"></i> ',
                tooltip: 'Insert image with filemanager',
                click: function() {

                    lfm({
                        type: 'image',
                        prefix: '/lrv8x_blog/laravel-filemanager'
                    }, function(lfmItems, path) {
                        lfmItems.forEach(function(lfmItem) {
                            context.invoke('insertImage', lfmItem.url);
                        });
                    });

                }
            });
            return button.render();
        };

        // Initialize summernote with LFM button in the popover button group
        // Please note that you can add this button to any other button group you'd like
        $('#summernote').summernote({
            toolbar: [
                ['popovers',
                    ['lfm']
                ],
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']],
                ['link'],
                ['codeview'],
            ],

            buttons: {
                lfm: LFMButton
            },          
            height: 300,
            placeholder: "Chi tiết bài viết của bạn",
            minHeight: null, 
            maxHeight: null, 
            focus: true
        })
    });
</script>
</html>
