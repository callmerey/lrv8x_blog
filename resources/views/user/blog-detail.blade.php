<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Blog Detail</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:700%7CNunito:300,600" rel="stylesheet">

    <link rel="stylesheet" href="{{url('public/site')}}/css/blog-detail.css">

</head>

<body>

    <header id="header" style="height: 550px">

        <div id="post-header" class="page-header">
            <div class="background-img" style="background-image:url({{url('public/uploads/')}}/{{$post->image_post}})" style="height: 550px"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-10">
                        <div class="post-meta">
                            <a class="post-category cat-2" href="category.html">JavaScript</a>
                            <span class="post-date">{{$post->created_at->format('d-m-Y')}}</span>
                        </div>
                        <h1>{{$post->name_post}}</h1>
                    </div>
                </div>
            </div>
        </div>

    </header>


    <div class="section">

        <div class="container">

            <div class="row">

                <div class="col-md-8">
                    <div class="section-row sticky-container">
                        <div class="main-post" style="margin-top: 30px">
                            <h3>{{$post->desc}}</h3>
                        
                            <blockquote class="blockquote">
                                {!!$post->title_post!!}
                            </blockquote>
                            
                        </div>
                        <div class="post-shares sticky-shares" style="position: absolute; top: 0px; left: 0px;">
                            <a href="#" class="share-facebook"><i class="fab fa-facebook" style="font-size: 39px;color: cornflowerblue;"></i></a>
                            <a href="#" class="share-twitter"><i class="fab fa-twitter" style="font-size: 39px;color: #878a90;"></i></a>
                            <a href="#" class="share-pinterest"><i class="fab fa-pinterest" style="font-size: 39px;color: #ea2b00;"></i></a>
                        </div>
                    </div>

                    <div class="section-row text-center">
                        <a href="#" style="display: inline-block;margin: auto;">
                            <img class="img-responsive" src="img/xad-2.jpg.pagespeed.ic.RB_ZDhAXxh.webp" alt="" data-pagespeed-url-hash="520125700" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                        </a>
                    </div>

                    <div class="section-row">
                        <div class="section-title">
                            <h2>{{$count_comment}} Comments</h2>
                        </div>

                        
                        @if($comment_data->count() > 0)
                            @foreach ($comment_data as $cmt)
                            <div class="post-comments">
                                <div class="media">
                                    <div class="media-left">
                                        <img class="media-object" src="{{url('public/uploads/')}}/{{$cmt->image_user}}" alt="" data-pagespeed-url-hash="1889391393" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                    </div>
                                    <div class="media-body">
                                        <div class="media-heading">
                                            <h4>{{$cmt->name}}</h4>
                                            <span class="time">{{$cmt->created_at}}</span>
                                        </div>
                                        <p>{{$cmt->desc}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @else
                            hãy là người đánh giá bài viết này đầu tiên
                        @endif


                    </div>


                    <div class="section-row">
                        <div class="section-title">
                            <h2>Đánh giá bài viết</h2>
                            {{-- <p>your email address will not be published. required fields are marked *</p> --}}
                        </div>
                        <form class="post-reply" action="{{route('save-comment')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="input" name="comment" placeholder="Comment"></textarea>
                                        <input type="hidden" value="{{$post->post_id}}" class="input" name="post_id">
                                        <span class="text-danger">
                                            @error('comment')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>
                                    
                                    <button class="primary-button">Gửi</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>


                <div class="col-md-4">

                    <div class="aside-widget">
                        <div class="section-title" style="margin-top:30px ">
                            <h2>Đọc thêm</h2>
                        </div>
                        @foreach ($data as $post)
                        <div class="post post-widget">
                            <a class="post-img" href="{{URL::to('blog-detail/'.$post->post_id) }}"><img src="{{url('public/uploads/')}}/{{$post->image_post}}" alt="" data-pagespeed-url-hash="3605550000" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                            <div class="post-body">
                                <h3 class="post-title"><a href="{{URL::to('blog-detail/'.$post->post_id) }}">{{$post->name_post}}</a></h3>
                            </div>
                        </div>
                        @endforeach
                    </div>


                    <div class="aside-widget">
                        <div class="section-title">
                            <h2>Bài viết hay</h2>
                        </div>
                        @foreach ($data as $post)
                        <div class="post post-thumb">
                            <a class="post-img" href="{{URL::to('blog-detail/'.$post->post_id) }}"><img src="{{url('public/uploads/')}}/{{$post->image_post}}" alt="" data-pagespeed-url-hash="361851009" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                            <div class="post-body">
                                <div class="post-meta">
                                    <a class="post-category cat-3" href="#">Jquery</a>
                                    <span class="post-date">{{$post->created_at->format('d-m-Y')}}</span>
                                </div>
                                <h3 class="post-title"><a href="{{URL::to('blog-detail/'.$post->post_id) }}">{{$post->name_post}}</a></h3>
                            </div>
                        </div>
                        @endforeach
                    </div>


                    <div class="aside-widget">
                        <div class="section-title">
                            <h2>Catagories</h2>
                        </div>
                        <div class="category-widget">
                            <ul>
                                <li><a href="#" class="cat-1">Web Design<span>340</span></a></li>
                                <li><a href="#" class="cat-2">JavaScript<span>74</span></a></li>
                                <li><a href="#" class="cat-4">JQuery<span>41</span></a></li>
                                <li><a href="#" class="cat-3">CSS<span>35</span></a></li>
                            </ul>
                        </div>
                    </div>


                    <div class="aside-widget">
                        <div class="tags-widget">
                            <ul>
                                <li><a href="#">Chrome</a></li>
                                <li><a href="#">CSS</a></li>
                                <li><a href="#">Tutorial</a></li>
                                <li><a href="#">Backend</a></li>
                                <li><a href="#">JQuery</a></li>
                                <li><a href="#">Design</a></li>
                                <li><a href="#">Development</a></li>
                                <li><a href="#">JavaScript</a></li>
                                <li><a href="#">Website</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>


    {{-- <footer id="footer">

        <div class="container">

            <div class="row">
                <div class="col-md-5">
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a href="index.html" class="logo"><img src="data:image/webp;base64,UklGRiQCAABXRUJQVlA4TBgCAAAvcUAEEH8gEEgC2l9xhUEZpIlI6DiQG23/2zYvk8F8msDGuctg52z/zwtAG4gbkKUzUKJxTqW8AekJqA2ccwA0gE+JZia/4g8JK0T0fwJWeaD1DiB8zFiSdkgk6S4YeQBrKx9gpAJ2d6r4AnMHCJUH3vuMH0ZRdIukF0VSDaNNq6uUpSrW+kqSrozqwHs5wLDBuI6dbABfHmOkPLCfYiTPGsn2Eg8YrurApJyhHVsVYJrSlwKgJZ2iNa2+CYDJNw9YFjK4yhnpBrhKOdBiJwd9BUCr0H4HLJ8FYGIytHYw0gCepE3jPTlwoDqpqzxmYN5BGGQJe5aK7Ke4Cp6oAWM5aVOHsMMyz/sbGdam5zDaUY1pbIU6YdSBmUpp/2u8P87EYViHsSQFJJLUy2MUyHfVsbZVYTGAuYrsSjGJx7DGsM7EgfHDKIoukvSiaKEaRv5s8ERnrLGKjFQ8ypOA6THeeyzzMK5jJxvA24G1r5FOWst3sK0KM5XS1gf8g25g3pGFVcHIfyJtuvJpK9VjLAeYxrC82YPWuzDINneMfFfyrK20xxyoccj09Qaw+Ohlm1mMVbGGaTu5voJDhr+awHhey7YsWts7eWuuPDCU05IuwyyG96oA+3Iy9WMswJXvqgewpQYj2TGEKgFbylsPoyi6RdKLoqmuH+mJfKutDmZ5iIkBugMsSdohkaSHuSPtq2GtrWJoT6Q7RQ=="
                                    alt="" data-pagespeed-url-hash="785091163" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                        </div>
                        <ul class="footer-nav">
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Advertisement</a></li>
                        </ul>
                        <div class="footer-copyright">
                            <span>© 
                Copyright ©<script>document.write(new Date().getFullYear());</script>2021 All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="footer-widget">
                                <h3 class="footer-title">About Us</h3>
                                <ul class="footer-links">
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="#">Join Us</a></li>
                                    <li><a href="contact.html">Contacts</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="footer-widget">
                                <h3 class="footer-title">Catagories</h3>
                                <ul class="footer-links">
                                    <li><a href="category.html">Web Design</a></li>
                                    <li><a href="category.html">JavaScript</a></li>
                                    <li><a href="category.html">Css</a></li>
                                    <li><a href="category.html">Jquery</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-widget">
                        <h3 class="footer-title">Join our Newsletter</h3>
                        <div class="footer-newsletter">
                            <form>
                                <input class="input" type="email" name="newsletter" placeholder="Enter your email">
                                <button class="newsletter-btn"><i class="fa fa-paper-plane"></i></button>
                            </form>
                        </div>
                        <ul class="footer-social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

    </footer> --}}


    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js+main.js.pagespeed.jc.XwDhaBFLFp.js"></script>
</body>

</html>