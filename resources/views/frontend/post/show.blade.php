@extends('layouts.frontend')

@section('content')

    <!--  page banner -->
    <header id="page-banner" class="banner-main-block">
        <div class="banner-img" style="background-image: url({{asset('images/top-banner.jpg')}})">
            <div class="overlay-bg"></div>
            <div class="container">
                <div class="banner-block">
                    <h3 class="section-heading">Blog Detail</h3>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active"><a>Blog Details</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </header>
    <!--  end page banner -->
    <!--  blog  -->
    <section id="news" class="news-main-block news-three">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="news-block">
                        <div class="news-img">
                            <img src="{{$post->image_url ? $post->image_url : '/images/holder/posts.png'}}" class="img-responsive" alt="blog-img-1">
                        </div>
                        <div class="news-content">
                            <div class="news-desc">
                                <p class="news-date"><i class="fa fa-calendar"></i>Posted {{$post->created_at->diffForHumans()}}</p>
                                <p class="news-by"><i class="fa fa-user"></i>Post By : <a href="#">{{$post->user->name}}</a></p>
                            </div>
                            <h4 class="news-heading">{{$post->title}}</h4>
                            <p class="news-dtl">{{$post->body}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  end blog -->
    <!--  quote slider -->
    <section id="quote" class="quote-main-block">
        <div class="container">
            <div class="bg-img" style="background-image: url('images/blog/blog-dtl-02.jpg')">
                <div class="overlay-bg"></div>
                <div id="quote-slider" class="quote-slider">
                    <div class="item quote-block">
                        <div class="container">
                            <div class="quote-content">
                                <span class="quotes-icon quotes-left"><i class="fa fa-quote-left"></i></span>
                                <p class="quote-dtl">Mauris nec tellus metus. Cras dapibus metus vel ipsum convallis semper. Nullam tristique neque at turpis lobortis pharetra fringilla vitae nibh. Nunc nec tristique ipsum. Suspendisse potenti. Curabitur non tortor metus. Suspendisse potenti. Vestibulum egestas ipsum a orci luctus, vitae interdum tortor sagittis. Curabitur pellentesque ipsum vitae ligula sollicitudin, vitae dictum dui volutpat. Aenean vitae scelerisque ipsum. </p>
                                <span class="quotes-icon quotes-right"><i class="fa fa-quote-right"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="item quote-block">
                        <div class="container">
                            <div class="quote-content">
                                <span class="quotes-icon quotes-left"><i class="fa fa-quote-left"></i></span>
                                <p class="quote-dtl">Mauris nec tellus metus. Cras dapibus metus vel ipsum convallis semper. Nullam tristique neque at turpis lobortis pharetra fringilla vitae nibh. Nunc nec tristique ipsum. Suspendisse potenti. Curabitur non tortor metus. Suspendisse potenti. Vestibulum egestas ipsum a orci luctus, vitae interdum tortor sagittis. Curabitur pellentesque ipsum vitae ligula sollicitudin, vitae dictum dui volutpat. Aenean vitae scelerisque ipsum. </p>
                                <span class="quotes-icon quotes-right"><i class="fa fa-quote-right"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="item quote-block">
                        <div class="container">
                            <div class="quote-content">
                                <span class="quotes-icon quotes-left"><i class="fa fa-quote-left"></i></span>
                                <p class="quote-dtl">Mauris nec tellus metus. Cras dapibus metus vel ipsum convallis semper. Nullam tristique neque at turpis lobortis pharetra fringilla vitae nibh. Nunc nec tristique ipsum. Suspendisse potenti. Curabitur non tortor metus. Suspendisse potenti. Vestibulum egestas ipsum a orci luctus, vitae interdum tortor sagittis. Curabitur pellentesque ipsum vitae ligula sollicitudin, vitae dictum dui volutpat. Aenean vitae scelerisque ipsum. </p>
                                <span class="quotes-icon quotes-right"><i class="fa fa-quote-right"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  end blog quote slider -->
    <!--  blog slider -->

    <!--  end blog slider -->
    <!--  blog comment  -->
    <section id="comment" class="comment-main-block">
        <div class="container">
            <div class="blog-comment">
                <h4 class="comment-heading">Comments 06:</h4>
                <div class="media">
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
                            <div class="media-left">
                                <a href="#"><img src="images/blog/comment-01.jpg" class="img-responsive media-object" alt="comment-01"></a>
                            </div>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
                            <div class="media-body">
                                <div class="col-xs-9">
                                    <a href="#"><h4 class="media-heading">Vepeno Teno <span>( 1 Days Ago )</span></h4></a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec cursus et nisl vitae ultricies. Nam bibendum maximus ultricies. Vivamus sodales quam sit amet vulputate eleifend. Sed interdum congue erat euismod</p>
                                </div>
                                <div class="col-xs-3">
                                    <div class="media-reply">
                                        <a href="#"><i class="fa fa-mail-forward"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="media">
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
                            <div class="media-left">
                                <a href="#"><img src="images/blog/comment-02.jpg" class="img-responsive media-object" alt="comment-02"></a>
                            </div>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
                            <div class="media-body">
                                <div class="col-xs-9">
                                    <a href="#"><h4 class="media-heading">France sene <span>( 4 Days Ago )</span></h4> </a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec cursus et nisl vitae ultricies. Nam bibendum maximus ultricies. Vivamus sodales quam sit amet vulputate eleifend. Sed interdum congue erat euismod</p>
                                </div>
                                <div class="col-xs-3">
                                    <div class="media-reply">
                                        <a href="#"><i class="fa fa-mail-forward"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="media">
                    <div class="row">
                        <div class="col-lg-offset-2 col-lg-2 col-md-offset-2 col-md-2 col-sm-offset-2 col-sm-3 col-xs-12">
                            <div class="media-left">
                                <a href="#"><img src="images/blog/comment-03.jpg" class="img-responsive media-object" alt="comment-03"></a>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-7 col-xs-12">
                            <div class="media-body">
                                <div class="col-sm-10 col-xs-9">
                                    <a href="#"><h4 class="media-heading">Anies jam <span>( 4 Days Ago )</span></h4></a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec cursus et nisl vitae ultricies. Nam bibendum maximus ultricies. Vivamus sodales quam sit amet vulputate eleifend. Sed interdum congue erat euismod</p>
                                </div>
                                <div class="col-sm-2 col-xs-3">
                                    <div class="media-reply">
                                        <a href="#"><i class="fa fa-mail-forward"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="media">
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
                            <div class="media-left">
                                <a href="#"><img src="images/blog/comment-04.jpg" class="img-responsive media-object" alt="comment-04"></a>
                            </div>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
                            <div class="media-body">
                                <div class="col-sm-10 col-xs-9">
                                    <a href="#"><h4 class="media-heading">William maan <span>( 5 Days Ago )</span></h4></a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec cursus et nisl vitae ultricies. Nam bibendum maximus ultricies. Vivamus sodales quam sit amet vulputate eleifend. Sed interdum congue erat euismod</p>
                                </div>
                                <div class="col-sm-2 col-xs-3">
                                    <div class="media-reply">
                                        <a href="#"><i class="fa fa-mail-forward"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  end comment  -->
    <!--  contact form  -->
    <section id="contact-form" class="form-main-block form-two form-three">
        <div class="section">
            <h4 class="section-heading">Comments</h4>
            <h5 class="sub-heading">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum at<br> euismod ex. Maecenas sit amet sollicitudin ex.</h5>
        </div>
        <div class="container">
            <div class="row">
                <div class="contact-form-block">
                    <form class="contact-form" method="post" action="https://wporganic.com/html/church/version1/contact-us.php">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name And Surname" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <input type="text" class="form-control" id="number" name="number" placeholder="Contact Phone Number" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email Address" required>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <textarea id="message" class="form-control" name="message" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <span><a href="#" class="btn btn-default">Send</a></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- end contact form -->

    @stop
