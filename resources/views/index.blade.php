<!doctype html>
<html lang="en">

<head>
    <title>Blog AMEN</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{url('public/site')}}/css/style.css">
    <link rel="stylesheet" href="{{url('public/site')}}/css/icon.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{url('public/site')}}/css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body>
    <div id="wrapper">

        <!-- Topbar -->

        <!-- End of Topbar -->

        <!-- Top Bar Start -->
        <div class="topbar-mobile">
            <div class="logo">
                <a href="index.html"><img src="{{url('public/site')}}/images/logo.png" alt="" class=""
                        style="height: 44px;"></a>
                <button class="button-menu-mobile">
                    <i class="mdi mdi-menu"></i>
                </button>
            </div>
        </div>
        <!-- Top Bar End -->
        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">

            <div class="slimscroll-menu">

                <div class="logo">
                    <a href="index.html"><img src="{{url('public/site')}}/images/logo.png" alt="" class=""
                            style="height: 44px;"></a>
                    <p class="text-muted">Graduating from the halls of the University Of Western Sydney in late 2011.
                    </p>
                </div>

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu" id="side-menu">

                        <li>
                            <a href="index.html"><span> Trang Chủ</span></a>
                        </li>
                        @foreach ($items as $cate)
                        <li>
                            <a href="#"><span> {{$cate->cate_name}} </span></a>
                        </li>
                        @endforeach

                    </ul>

                    <div class="copyright-box">
                        <p>2020 © Blogezy. </p>
                    </div>

                </div>
                <!-- Sidebar -->
                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->

        <div class="page-wrapper">
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow"
                style="margin-top: 20px">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                
                </button>
                <div class="d-sm-flex align-items-center justify-content-between mb-4" style="margin-top: 23px;">
                    <a href="post" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                            class="fas fa-pen-alt fa-sm text-white-50"></i> Viết Bài</a>
                </div>
                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                            aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small"
                                        placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>

                    <!-- Nav Item - Alerts -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-bell fa-fw"></i>
                            <!-- Counter - Alerts -->
                            <span class="badge badge-danger badge-counter">3+</span>
                        </a>
                        <!-- Dropdown - Alerts -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                            aria-labelledby="alertsDropdown">
                            <h6 class="dropdown-header">
                                Alerts Center
                            </h6>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-primary">
                                        <i class="fas fa-file-alt text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 12, 2019</div>
                                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-success">
                                        <i class="fas fa-donate text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 7, 2019</div>
                                    $290.29 has been deposited into your account!
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-warning">
                                        <i class="fas fa-exclamation-triangle text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 2, 2019</div>
                                    Spending Alert: We've noticed unusually high spending for your account.
                                </div>
                            </a>
                            <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                        </div>
                    </li>

                    <!-- Nav Item - Messages -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-envelope fa-fw"></i>
                            <!-- Counter - Messages -->
                            <span class="badge badge-danger badge-counter">7</span>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                            aria-labelledby="messagesDropdown">
                            <h6 class="dropdown-header">
                                Message Center
                            </h6>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="{{url('public/site')}}/images/undraw_profile_1.svg"
                                        alt="...">
                                    <div class="status-indicator bg-success"></div>
                                </div>
                                <div class="font-weight-bold">
                                    <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                        problem I've been having.</div>
                                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="{{url('public/site')}}/images/undraw_profile_2.svg"
                                        alt="...">
                                    <div class="status-indicator"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">I have the photos that you ordered last month, how
                                        would you like them sent to you?</div>
                                    <div class="small text-gray-500">Jae Chun · 1d</div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="{{url('public/site')}}/images/undraw_profile_3.svg"
                                        alt="...">
                                    <div class="status-indicator bg-warning"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">Last month's report looks great, I am very happy with
                                        the progress so far, keep up the good work!</div>
                                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                        alt="...">
                                    <div class="status-indicator bg-success"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                        told me that people say this to all dogs, even if they aren't good...</div>
                                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                </div>
                            </a>
                            <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                        </div>
                    </li>

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        @unless ($user == null)
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                {{$user->name}}
                            </span>
                            <img class="img-profile rounded-circle"
                                src="{{url('public/site')}}/images/undraw_profile.svg">
                        </a>
                        
                        @endunless
                        @if ($user == null)
                        <a class="nav-link dropdown-toggle" href="login">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                Đăng Nhập
                            </span>
                            <img class="img-profile rounded-circle"
                                src="{{url('public/site')}}/images/undraw_profile.svg">
                        </a>
                        @endif

                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                            aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Settings
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                Activity Log
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{route('auth/logout')}}" data-toggle="modal"
                                data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="page-title">
                                <div class="row">
                                    <div class="col-md-9 col-xs-12">
                                        <h2><span>Tin Mới Và Những Câu Chuyện</span></h2>

                                        <p class="subtitle text-muted">Blog AMEN... tâm sự đời thường - trò chuyện công
                                            nghệ - kĩ thuật lập trình - chém gió trà đá</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mt-5 pb-5">
                <div class="container">

                    <div class="row">
                        <!-- Content-->
                        <div class="col-xl-8">

                            @foreach ($data as $post)
                            <!-- Post-->
                            <article class="post">

                                <div class="post-header">
                                    <h2 class="post-title"><a href="#">{{$post->name_post}}</a></h2>
                                    <ul class="post-meta">
                                        <li><i class="far fa-calendar"></i> {{$post->created_at}}</li>
                                        <li><i class="far fa-user"></i> <a href="{{URL::to('user-post/'.$post->id) }}">{{$post->name}}</a></li>
                                        <li><i class="far fa-clipboard"></i></i> <a href="#">{{$post->cate_name}}</a>
                                        </li>
                                        <li><i class="far fa-comments"></i></i> <a href="#">3 Comments</a></li>
                                    </ul>
                                </div>

                                <div class="post-preview">
                                    <a href="#"><img src="{{url('public/uploads/')}}/{{$post->image_post}}" alt=""
                                            class="img-fluid rounded"></a>
                                </div>

                                <div class="post-content">
                                    {{$post->desc}}
                                </div>

                                <div><a href="#" class="btn btn-outline-custom" style="border-color:#0db3e3">Đọc Thêm <i
                                            class="fas fa-arrow-right"></i></a></div>

                            </article>
                            <!-- Post end-->
                            @endforeach

                            <!-- Pagination-->
                            <div class="row">
                                <div class="col-lg-12">
                                    <ul class="pagination">
                                        <li class="next"><a href="#"><i class="fas fa-chevron-left"></i></a></li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li class="prev"><a href="#"><i class="fas fa-chevron-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Pagination end-->
                        </div>
                        <!-- Content end-->

                        <!-- Sidebar-->
                        <div class="col-xl-4">
                            <div class="sidebar" style="width: 100% !important;">

                                <!-- Search widget-->
                                <aside class="widget widget_search">
                                    <form>
                                        <input class="form-control pr-5" type="search" placeholder="Search...">
                                        <button class="search-button" type="submit"><span
                                                class="mdi mdi-magnify"></span></button>
                                    </form>
                                </aside>

                                <aside class="widget widget_recent_entries_custom">
                                    <div class="widget-title">Bài viêt phổ biến</div>
                                    <ul>
                                        @foreach ($data as $post)
                                        <li class="clearfix">
                                            <div class="wi">
                                                <a href="#"><img src="{{url('public/uploads/')}}/{{$post->image_post}}"
                                                        alt="" class="img-fluid"></a>
                                            </div>
                                            <div class="wb"><a href="#">{{$post->name_post}}</a> <span
                                                    class="post-date">{{$post->created_at}}</span></div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </aside>

                                <aside class="widget about-widget">
                                    <div class="widget-title">Subscribe &amp; Follow</div>

                                    <ul class="socials">
                                        <li><a href="http://facebook.com"><i class="mdi mdi-facebook"></i></a></li>
                                        <li><a href="http://twitter.com"><i class="mdi mdi-twitter"></i></a></li>
                                        <li><a href="http://instagram.com"><i class="mdi mdi-instagram"></i></a></li>
                                        <li><a href="http://pinterest.com"><i class="mdi mdi-pinterest"></i></a></li>
                                    </ul>

                                </aside>

                                <!-- Categories widget-->
                                <aside class="widget widget_categories">
                                    <div class="widget-title">Danh mục</div>
                                    <ul>
                                        <li><a href="#">Journey</a> (40)</li>
                                        <li><a href="#">Photography</a> (08)</li>
                                        <li><a href="#">Lifestyle</a> (11)</li>
                                        <li><a href="#">Food &amp; Drinks</a> (21)</li>
                                    </ul>
                                </aside>

                                <!-- Recent entries widget-->
                                <aside class="widget widget_recent_entries_custom">
                                    <div class="widget-title">Bài viết hay</div>
                                    <ul>
                                        @foreach ($data as $post)
                                        <li class="clearfix">
                                            <div class="wi">
                                                <a href="#"><img src="{{url('public/uploads/')}}/{{$post->image_post}}"
                                                        alt="" class="img-fluid"></a>
                                            </div>
                                            <div class="wb"><a href="#">{{$post->name_post}}</a> <span
                                                    class="post-date">{{$post->created_at}}</span></div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </aside>

                                <!-- Archives widget-->
                                <aside class="widget">
                                    <div class="widget-title">Bài viết theo tháng</div>

                                    <ul>
                                        <li><a href="#">Tháng 3 2021</a> (40)</li>
                                        <li><a href="#">Tháng 4 2021</a> (08)</li>
                                        <li><a href="#">Tháng 5 2021</a> (11)</li>
                                        <li><a href="#">Tháng 6 2021</a> (21)</li>
                                    </ul>

                                </aside>

                                <!-- Tags widget-->
                                <aside class="widget widget_tag_cloud">
                                    <div class="widget-title">Tags</div>
                                    <div class="tagcloud">
                                        <a href="#">logo</a>
                                        <a href="#">business</a>
                                        <a href="#">corporate</a>
                                        <a href="#">e-commerce</a>
                                        <a href="#">agency</a>
                                        <a href="#">responsive</a>
                                    </div>
                                </aside>
                            </div>
                        </div>
                        <!-- Sidebar end-->
                    </div>

                </div>
                <!-- end container -->
            </section>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>