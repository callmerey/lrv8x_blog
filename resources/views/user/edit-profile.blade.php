<html lang="en">

<head>
    <meta charset="utf-8">
    <title></title>
        <link href="{{url('public/site')}}/css/profile.css" rel="stylesheet">
        <link href="{{url('public/site')}}/css/style1.css" rel="stylesheet">
</head>

<body class="leading-normal bg-bluish-gray dark:bg-brand-dark-grey-900">
    <div class="progressbar" id="hn-progressbar" style="display: none;"></div><input type="hidden" id="hn-user"
        value="60ca23678ce4491f0f2970a3">
    <div id="__next">
        <div class="">
            <div class="container grid items-stretch grid-cols-12 gap-2 px-2 mx-auto md:gap-4 xl:grid-cols-8 2xl:px-5">
                <div class="z-40 col-span-12 md:pt-2 md:col-span-9 lg:col-span-10 xl:col-span-7">
                    <div class="flex flex-row flex-wrap w-full">
                        <div class="flex-shrink-0 w-full pr-2 lg:w-84 lg:pl-0 lg:pr-4">
                            <div
                                class="p-4 mb-2 bg-white border rounded-lg dark:text-gray-400 dark:bg-brand-dark-grey-900 dark:border-brand-grey-800">
                                <h1 class="text-2xl font-bold">User Settings</h1>
                            </div>
                            <div
                                class="flex flex-row items-end mb-2 overflow-auto text-sm font-bold text-gray-700 uppercase bg-white border rounded-lg whitespace-nowrap lg:items-start lg:flex-col dark:bg-brand-dark-grey-900 dark:border-brand-grey-800 dark:text-gray-400">
                                <a class="px-3 md:px-6 py-4 w-full flex flex-row items-center text-accent-blue-A700"
                                    href="/settings"><svg class="w-6 h-6 mr-4 opacity-75 fill-current"
                                        viewBox="0 0 496 512">
                                        <path
                                            d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm128 421.6c-35.9 26.5-80.1 42.4-128 42.4s-92.1-15.9-128-42.4V416c0-35.3 28.7-64 64-64 11.1 0 27.5 11.4 64 11.4 36.6 0 52.8-11.4 64-11.4 35.3 0 64 28.7 64 64v13.6zm30.6-27.5c-6.8-46.4-46.3-82.1-94.6-82.1-20.5 0-30.4 11.4-64 11.4S204.6 320 184 320c-48.3 0-87.8 35.7-94.6 82.1C53.9 363.6 32 312.4 32 256c0-119.1 96.9-216 216-216s216 96.9 216 216c0 56.4-21.9 107.6-57.4 146.1zM248 120c-48.6 0-88 39.4-88 88s39.4 88 88 88 88-39.4 88-88-39.4-88-88-88zm0 144c-30.9 0-56-25.1-56-56s25.1-56 56-56 56 25.1 56 56-25.1 56-56 56z">
                                        </path>
                                    </svg><span>Profile</span></a><a
                                    class="px-3 md:px-6 py-4 w-full flex flex-row items-center hover:bg-brand-grey-100 dark:hover:bg-brand-dark-grey-700"
                                    href="/settings/emails"><svg class="w-6 h-6 mr-4 opacity-75 fill-current"
                                        viewBox="0 0 512 512">
                                        <path
                                            d="M464 64H48C21.5 64 0 85.5 0 112v288c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zM48 96h416c8.8 0 16 7.2 16 16v41.4c-21.9 18.5-53.2 44-150.6 121.3-16.9 13.4-50.2 45.7-73.4 45.3-23.2.4-56.6-31.9-73.4-45.3C85.2 197.4 53.9 171.9 32 153.4V112c0-8.8 7.2-16 16-16zm416 320H48c-8.8 0-16-7.2-16-16V195c22.8 18.7 58.8 47.6 130.7 104.7 20.5 16.4 56.7 52.5 93.3 52.3 36.4.3 72.3-35.5 93.3-52.3 71.9-57.1 107.9-86 130.7-104.7v205c0 8.8-7.2 16-16 16z">
                                        </path>
                                    </svg><span>Email Notifications</span></a><a
                                    class="px-3 md:px-6 py-4 w-full flex flex-row items-center hover:bg-brand-grey-100 dark:hover:bg-brand-dark-grey-700"
                                    href="/settings/publications"><svg class="w-6 h-6 mr-4 opacity-75 fill-current"
                                        viewBox="0 0 512 512">
                                        <path
                                            d="M464 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zM32 80c0-8.8 7.2-16 16-16h48v64H32V80zm448 352c0 8.8-7.2 16-16 16H48c-8.8 0-16-7.2-16-16V160h448v272zm0-304H128V64h336c8.8 0 16 7.2 16 16v48z">
                                        </path>
                                    </svg><span>Publications</span></a><a
                                    class="px-3 md:px-6 py-4 w-full flex flex-row items-center hover:bg-brand-grey-100 dark:hover:bg-brand-dark-grey-700"
                                    href="/settings/developer"><svg class="w-6 h-6 mr-4 opacity-75 fill-current"
                                        viewBox="0 0 576 512">
                                        <path
                                            d="M228.5 511.8l-25-7.1c-3.2-.9-5-4.2-4.1-7.4L340.1 4.4c.9-3.2 4.2-5 7.4-4.1l25 7.1c3.2.9 5 4.2 4.1 7.4L235.9 507.6c-.9 3.2-4.3 5.1-7.4 4.2zm-75.6-125.3l18.5-20.9c1.9-2.1 1.6-5.3-.5-7.1L49.9 256l121-102.5c2.1-1.8 2.4-5 .5-7.1l-18.5-20.9c-1.8-2.1-5-2.3-7.1-.4L1.7 252.3c-2.3 2-2.3 5.5 0 7.5L145.8 387c2.1 1.8 5.3 1.6 7.1-.5zm277.3.4l144.1-127.2c2.3-2 2.3-5.5 0-7.5L430.2 125.1c-2.1-1.8-5.2-1.6-7.1.4l-18.5 20.9c-1.9 2.1-1.6 5.3.5 7.1l121 102.5-121 102.5c-2.1 1.8-2.4 5-.5 7.1l18.5 20.9c1.8 2.1 5 2.3 7.1.4z">
                                        </path>
                                    </svg><span>Developer</span></a><a
                                    class="px-3 md:px-6 py-4 w-full flex flex-row items-center hover:bg-gray-100 dark:hover:bg-brand-dark-grey-700"
                                    href="/settings/account"><svg class="w-6 h-6 mr-4 opacity-75 fill-current"
                                        viewBox="0 0 512 512">
                                        <path
                                            d="M482.696 299.276l-32.61-18.827a195.168 195.168 0 000-48.899l32.61-18.827c9.576-5.528 14.195-16.902 11.046-27.501-11.214-37.749-31.175-71.728-57.535-99.595-7.634-8.07-19.817-9.836-29.437-4.282l-32.562 18.798a194.125 194.125 0 00-42.339-24.48V38.049c0-11.13-7.652-20.804-18.484-23.367-37.644-8.909-77.118-8.91-114.77 0-10.831 2.563-18.484 12.236-18.484 23.367v37.614a194.101 194.101 0 00-42.339 24.48L105.23 81.345c-9.621-5.554-21.804-3.788-29.437 4.282-26.36 27.867-46.321 61.847-57.535 99.595-3.149 10.599 1.47 21.972 11.046 27.501l32.61 18.827a195.168 195.168 0 000 48.899l-32.61 18.827c-9.576 5.528-14.195 16.902-11.046 27.501 11.214 37.748 31.175 71.728 57.535 99.595 7.634 8.07 19.817 9.836 29.437 4.283l32.562-18.798a194.08 194.08 0 0042.339 24.479v37.614c0 11.13 7.652 20.804 18.484 23.367 37.645 8.909 77.118 8.91 114.77 0 10.831-2.563 18.484-12.236 18.484-23.367v-37.614a194.138 194.138 0 0042.339-24.479l32.562 18.798c9.62 5.554 21.803 3.788 29.437-4.283 26.36-27.867 46.321-61.847 57.535-99.595 3.149-10.599-1.47-21.972-11.046-27.501zm-65.479 100.461l-46.309-26.74c-26.988 23.071-36.559 28.876-71.039 41.059v53.479a217.145 217.145 0 01-87.738 0v-53.479c-33.621-11.879-43.355-17.395-71.039-41.059l-46.309 26.74c-19.71-22.09-34.689-47.989-43.929-75.958l46.329-26.74c-6.535-35.417-6.538-46.644 0-82.079l-46.329-26.74c9.24-27.969 24.22-53.869 43.929-75.969l46.309 26.76c27.377-23.434 37.063-29.065 71.039-41.069V44.464a216.79 216.79 0 0187.738 0v53.479c33.978 12.005 43.665 17.637 71.039 41.069l46.309-26.76c19.709 22.099 34.689 47.999 43.929 75.969l-46.329 26.74c6.536 35.426 6.538 46.644 0 82.079l46.329 26.74c-9.24 27.968-24.219 53.868-43.929 75.957zM256 160c-52.935 0-96 43.065-96 96s43.065 96 96 96 96-43.065 96-96-43.065-96-96-96zm0 160c-35.29 0-64-28.71-64-64s28.71-64 64-64 64 28.71 64 64-28.71 64-64 64z">
                                        </path>
                                    </svg><span>Account</span></a>
                            </div>
                        </div>
                        <form class="flex-1" action="{{url('save-user/'.$user->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="flex-1">
                                <div class="p-8 bg-white border rounded-lg dark:bg-brand-dark-grey-900 dark:border-brand-grey-800">
                                    <div class="">
                                        <div class="flex flex-row flex-wrap">
                                            <div class="w-full lg:w-2/2 lg:pr-10">
                                                <h4
                                                    class="mb-5 text-xl font-bold text-brand-grey-900 dark:text-brand-grey-100"> Thông tin cá nhân
                                                </h4>
    
                                                <div class="mb-6">
                                                    <label for="tagline"
                                                        class="block mb-2 text-sm font-semibold text-brand-grey-900 dark:text-brand-grey-300">Họ
                                                        Tên</label>
                                                    <input type="text" class="input-text" id="tagline" name="name" placeholder=""
                                                        value="{{$user->name}}">
                                                </div>
    
                                                <div class="mb-6">
                                                    <label for="tagline"
                                                        class="block mb-2 text-sm font-semibold text-brand-grey-900 dark:text-brand-grey-300">Email</label>
                                                    <input type="text" class="input-text" id="tagline" name="email" placeholder=""
                                                    value="{{$user->email}}" disabled>
                                                </div>
    
                                                <div class="mb-6">
                                                    <label for="nameField"
                                                        class="block mb-2 text-sm font-semibold text-brand-grey-900 dark:text-brand-grey-300">Ảnh
                                                        Đại Diện</label>
                                                    <div class="form-group">
                                                        <input type="file" placeholder="Ảnh đại diện" name="image_user"
                                                            onchange="loadFile_avt(event)">
                                                    </div>
                                                    <div
                                                        class="relative block w-40 h-40 bg-gray-100 rounded-full shadow-xl">
                                                        <a class="block overflow-hidden rounded-full">
                                                            <img id="block" class="block"
                                                                src="{{url('public/uploads/')}}/{{$user->image_user}}"></a>
                                                    </div>
                                                </div>
    
                                                <div class="mb-6"><label for="coverImageField"
                                                        class="block mb-2 text-sm font-semibold text-brand-grey-900 dark:text-brand-grey-300">Ảnh Bìa
                                                    </label>
                                                    <div class="form-group">
                                                        <input type="file" accept=".png, .jpg, .jpeg, .gif" id="customFile"
                                                            name="image_background" onchange="loadFile(event)" name="image_background">
                                                    </div>
                                                    <img id="output" src="{{url('public/uploads/')}}/{{$user->image_background}}" style="width: 100%;height: 300px;">
    
                                                </div>
                                                <div class="mb-6">
                                                    <label for="location" class="block mb-2 text-sm font-semibold text-brand-grey-900 dark:text-brand-grey-300">Địa chỉ</label>
                                                    <input type="text" class="input-text" id="location"
                                                        placeholder="HN, Viet Nam" name="address"  value="{{$user->address}}"></div>
                                                <h4 class="mt-10 mb-5 text-xl font-bold text-brand-grey-900 dark:text-brand-grey-100">
                                                    Giới thiệu về bản thân
                                                </h4>
                                                <div class="mb-6">
                                                    <label for="availableFor" class="block mb-2 text-sm font-semibold text-brand-grey-900 dark:text-brand-grey-300">Sơ lược bản thân</label>
                                                    <input type="text"
                                                        class="input-text min-h-30 available-field" id="availableFor"
                                                        placeholder="Tôi có sở thích, …" name="desc" value="{{$user->desc}}">
                                                    <small class="block mt-1 ml-2 leading-tight text-brand-grey-600">140/140</small>
                                                </div>
    
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pt-4 mt-5"><button type="submit" class="button-primary big">Cập nhật</button></div>
                                </div>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
</body>
<script src="{{url('public/site')}}/js/user.js"></script>
</html>