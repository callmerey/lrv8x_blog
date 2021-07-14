<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{$name}}</title>
    <link rel="stylesheet" type="text/css" id="style-ref"
        href="https://hashnode.com/static/css/app.min.css?v=1625504643155">
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
            content: 'Ảnh Bìa';
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
                            style="background-image: url({{url('public/uploads/')}}/{{$post->image_background}});">
                        </div>
                        <div
                            class="px-4 pt-4 mb-4 bg-white border-b rounded-bl-lg rounded-br-lg lg:px-16 dark:bg-brand-dark-grey-900 lg:border-l lg:border-r dark:border-brand-grey-800">
                            <div class="flex flex-row flex-wrap items-center">
                                <div
                                    class="flex-shrink-0 w-24 h-24 mb-4 bg-white border-4 border-white rounded-full shadow-lg md:mb-0 md:-mt-40 lg:mb-0 lg:w-40 lg:h-40 md:mr-8 dark:bg-brand-grey-800 dark:border-brand-grey-800 xl:ml-48">
                                    <a class="block w-full h-auto relative undefined" data-title="false"><img
                                            data-sizes="auto" loading="lazy"
                                            src="{{url('public/uploads/')}}/{{$post->image_user}}"
                                            data-src="https://cdn.hashnode.com/res/hashnode/image/upload/v1623860071558/mDXtpyO32.png?w=400&amp;h=400&amp;fit=crop&amp;crop=faces&amp;auto=compress"
                                            data-width="400" data-height="400" alt="Thanh Son's photo"
                                            class="block w-full undefined block w-full rounded-full z-20 relative lazyautosizes lazyloaded"
                                            sizes="152px"></a>
                                </div>
                                <div class="w-full pr-10 md:flex-1 lg:w-auto">
                                    <h1
                                        class="mb-2 text-3xl font-bold leading-tight tracking-tight text-black dark:text-white">
                                        <a>{{$name}}</a>
                                    </h1>
                                    <div class="flex flex-row flex-wrap items-center mt-6">
                                        <button class="flex flex-row items-center button-transparent">
                                            <svg class="w-5 h-5 mr-2 fill-current" viewBox="0 0 512 512">
                                                <path
                                                    d="M493.255 56.236l-37.49-37.49c-24.993-24.993-65.515-24.994-90.51 0L12.838 371.162.151 485.346c-1.698 15.286 11.22 28.203 26.504 26.504l114.184-12.687 352.417-352.417c24.992-24.994 24.992-65.517-.001-90.51zm-95.196 140.45L174 420.745V386h-48v-48H91.255l224.059-224.059 82.745 82.745zM126.147 468.598l-58.995 6.555-30.305-30.305 6.555-58.995L63.255 366H98v48h48v34.745l-19.853 19.853zm344.48-344.48l-49.941 49.941-82.745-82.745 49.941-49.941c12.505-12.505 32.748-12.507 45.255 0l37.49 37.49c12.506 12.506 12.507 32.747 0 45.255z">
                                                </path>
                                            </svg>
                                            <a href="{{URL::to('edit-profile/'.$id_user)}}">Hồ Sơ</a>
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
                        @yield('profile')
                </div>
            </div>
        </div>
</body>
</html>