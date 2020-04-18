@extends('layouts.frontend')

@section('content')

    <!--// SubHeader \\-->
    <div class="church-subheader">
        <div class="church-subheader-text">
            <span class="church-subheader-transparent"></span>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Blog Detail</h1>
                        <div class="clearfix"></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipi scing elit. Aliquam ac egestas velit</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="church-breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul>
                            <li><a href="index-2.html">Homepage</a></li>
                            <li class="active">Blog Detail</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// SubHeader \\-->


    <!--// Main Content \\-->
    <div class="church-main-content">

        <!--// Main Section \\-->
        <div class="church-main-section">
            <div class="container">
                <div class="row">

                    <div class="col-md-9">
                        <div class="church-blog-detail">
                            <figure class="church-blog-thumb"><img src="{{$post->image_url ? $post->image_url : '/images/holder/posts.png'}}" alt=""><figcaption class="church-time-date"><span>10</span> <small>May 2017</small></figcaption></figure>
                            <div class="church-blog-heading">
                                <h2>{{$post->title}}</h2>
                                <ul class="church-blog-option">
                                    <li>by <a href="404.html">{{$post->user->name}}</a></li>
                                    <li><i class="fa fa-comments-o"></i> <a href="404.html">13 comments</a></li>
                                </ul>
                            </div>
                            <div class="church-rich-editor">
                                {!! $post->body !!}
                                <div class="church-blog-author">
                                    <figure><img src="extra-images/author-blog-img.jpg" alt=""></figure>
                                    <div class="church-blog-author-text">
                                        <h6><a href="blog-detail.html">{{$post->user->name}}</a></h6>
                                        <ul class="church-author-social">
                                            <li><a href="https://www.facebook.com/" class="fa fa-facebook-square"></a></li>
                                            <li><a href="https://twitter.com/login?lang=en" class="fa fa-twitter-square"></a></li>
                                            <li><a href="https://plus.google.com/" class="fa fa-google-plus-square"></a></li>
                                            <li><a href="https://www.youtube.com/signin" class="fa fa-youtube-square"></a></li>
                                        </ul>
                                        <span>{{$post->user->roles->first()->display_name}}</span>
                                        <p>Fusce pulvinar tortor viverra aliquam semper. Cras in sapien ultrices, molestie sapien ac, sodales leo. Aenean ultricies tellus eget sem viverra.</p>
                                    </div>
                                </div>
                                <p>Sed diam risus, auctor et dui vel, rhoncus finibus lorem. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris tempor ante vitae felis bibendum gravida. Suspendisse in euismod ante. Morbi semper lacus quis dolor lacinia fermentum. Duis eget lectus a eros pharetra posuere. Ut tincidunt ipsum nec rhoncus suscipit. Mauris id tincidunt sapien. In sodales turpis fringilla nunc tincidunt, eu malesuada nunc gravida.</p>
                            </div>
                            <div class="church-post-tags">
                                <div class="church-social-tag">
                                    <a href="404.html">Videos</a>
                                    <a href="404.html">Prayer</a>
                                    <a href="404.html">Author</a>
                                    <a href="404.html">Church</a>
                                </div>
                                <div class="church-blog-social">
                                    <ul>
                                        <li><a href="https://www.facebook.com/" class="fa fa-facebook"></a></li>
                                        <li><a href="https://twitter.com/login?lang=en" class="fa fa-twitter"></a></li>
                                        <li><a href="https://www.pinterest.com/login/" class="fa fa-pinterest-p"></a></li>
                                        <li><a href="https://plus.google.com/" class="fa fa-google-plus"></a></li>
                                    </ul>
                                </div>
                            </div>
{{--                            <div class="church-prenxt-post">--}}
{{--                                <ul>--}}
{{--                                    <li>--}}
{{--                                        <div class="church-prev-post">--}}
{{--                                            <h6><a href="404.html">Etiam facilisis sit amet purus ac dignissim. Pel- lent es que ex felis mentum</a></h6>--}}
{{--                                            <a href="404-2.html"><i class="icon church-right-arrow"></i>Previous Post</a>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <div class="church-next-post">--}}
{{--                                            <h6><a href="404.html">Nulla blandit ornare magna nec tristique. Sus pendise amet libero vulputate lacinia</a></h6>--}}
{{--                                            <a href="404-2.html">Next Post <i class="icon church-right-arrow"></i></a>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <h2 class="church-section-heading">[ Related Blog Post ]</h2>--}}
{{--                            <div class="church-blog church-related-blog">--}}
{{--                                <ul class="row">--}}
{{--                                    <li class="col-md-6">--}}
{{--                                        <figure><a href="blog-detail.html"><img src="extra-images/related-blog-img1.jpg" alt=""></a></figure>--}}
{{--                                        <div class="church-related-blog-text">--}}
{{--                                            <h5><a href="blog-detail.html">Nulla vitae dolor ac libero lobortis pharetra id</a></h5>--}}
{{--                                            <ul class="church-blog-option">--}}
{{--                                                <li>by <a href="404.html">Dolores Ferguson</a></li>--}}
{{--                                                <li><i class="fa fa-comments-o"></i> <a href="404.html">25 comments</a></li>--}}
{{--                                            </ul>--}}
{{--                                            <a href="blog-detail.html" class="church-simple-readmore-btn">Read More<i class="icon church-right-arrow"></i></a>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                    <li class="col-md-6">--}}
{{--                                        <figure><a href="blog-detail.html"><img src="extra-images/related-blog-img2.jpg" alt=""></a></figure>--}}
{{--                                        <div class="church-related-blog-text">--}}
{{--                                            <h5><a href="blog-detail.html">Donec eu porta velit. Nam at urna eu libero</a></h5>--}}
{{--                                            <ul class="church-blog-option">--}}
{{--                                                <li>by <a href="404.html">Dolores Ferguson</a></li>--}}
{{--                                                <li><i class="fa fa-comments-o"></i> <a href="404.html">25 comments</a></li>--}}
{{--                                            </ul>--}}
{{--                                            <a href="blog-detail.html" class="church-simple-readmore-btn">Read More<i class="icon church-right-arrow"></i></a>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
                            <div class="comments-area">
                                <!--// coments \\-->
                                <h2 class="church-section-heading">[ Comments ]</h2>
                                <ul class="comment-list">
                                    <li>
                                        <div class="thumb-list">
                                            <figure><img alt="" src="extra-images/comment-img1.jpg"></figure>
                                            <div class="text-holder">
                                                <h6>Sarah Jordan</h6>
                                                <time class="post-date" datetime="2008-02-14 20:00">2 Hours Ago</time>
                                                <p>Etiam auctor dignissim bibendum. Nunc pulvinar massa nunc, quis pellentesque felis suscipit eu hase llus ut ultricies velit. Morbi non nisl condimentum.</p>
                                                <a class="comment-reply-link" href="#">Reply</a>
                                                <a class="comment-reply-link" href="#">Like</a>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- #comment-## -->
                                    <li>
                                        <div class="thumb-list">
                                            <figure><img alt="" src="extra-images/comment-img2.jpg"></figure>
                                            <div class="text-holder">
                                                <h6>Ellena Roy</h6>
                                                <time class="post-date" datetime="2008-02-14 20:00">2 Hours Ago</time>
                                                <p>Sed vulputate elementum aliquam. Nunc vel efficitur ante. Ut gravida nulla id ornare sodales. Aenean aliquam mauris purus, eget mollis lectus sagittis sed.</p>
                                                <a class="comment-reply-link" href="#">Reply</a>
                                                <a class="comment-reply-link" href="#">Like</a>
                                            </div>
                                        </div>
                                        <ul class="children">
                                            <li>
                                                <div class="thumb-list">
                                                    <figure><img alt="" src="extra-images/comment-img3.jpg"></figure>
                                                    <div class="text-holder">
                                                        <h6>Sam Buttler</h6>
                                                        <time class="post-date" datetime="2008-02-14 20:00">2 Hours Ago</time>
                                                        <p>Cras varius est vel massa ultricies, ac rutrum urna hendrerit. Donec eu porta velit. Nam at urna eu libero.</p>
                                                        <a class="comment-reply-link" href="#">03 Like</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <!-- #comment-## -->
                                        </ul>
                                        <!-- .children -->
                                    </li>
                                    <li>
                                        <div class="thumb-list">
                                            <figure><img alt="" src="extra-images/comment-img4.jpg"></figure>
                                            <div class="text-holder">
                                                <h6>Maria Joseph</h6>
                                                <time class="post-date" datetime="2008-02-14 20:00">2 Hours Ago</time>
                                                <p>Suspendisse eu mattis diam, et iaculis libero. Vestibulum tincidunt sit amet dolor et sollicitudin. Nunc sit amet nulla eu ipsum vehicula interdum. </p>
                                                <a class="comment-reply-link" href="#">Reply</a>
                                                <a class="comment-reply-link" href="#">Like</a>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- #comment-## -->
                                </ul>
                                <!--// coments \\-->

                                <!--// comment-respond \\-->
                                <div class="comment-respond">
                                    <h2 class="church-section-heading">[ Leave Your Reply ]</h2>
                                    <p>Your email address will not be published. Required fields are marked *</p>
                                    <form>
                                        <p class="church-full-form">
                                            <label>Comment</label>
                                            <textarea name="comment" placeholder="Type here" class="commenttextarea"></textarea>
                                        </p>
                                        <p>
                                            <label>Name</label>
                                            <input type="text" value="Type here" onblur="if(this.value == '') { this.value ='Type here'; }" onfocus="if(this.value =='Type here') { this.value = ''; }">
                                        </p>
                                        <p>
                                            <label>Email</label>
                                            <input type="email" value="Type here" onblur="if(this.value == '') { this.value ='Type here'; }" onfocus="if(this.value =='Type here') { this.value = ''; }">
                                        </p>
                                        <p><input type="submit" value="Submit Now"></p>
                                    </form>
                                </div>
                                <!--// comment-respond \\-->
                            </div>
                        </div>
                    </div>

                    <!--// Sidebar \\-->
                    <aside class="col-md-3">

                        <!--// Widget Search \\-->
                        <div class="widget widget_search">
                            <form>
                                <input value="Type here" onblur="if(this.value == '') { this.value ='Type here'; }" onfocus="if(this.value =='Type here') { this.value = ''; }" tabindex="0" type="text">
                                <label><input type="submit" value=""></label>
                            </form>
                        </div>
                        <!--// Widget Search \\-->

                        <!--// Widget Cetagories \\-->
                        <div class="widget widget_cetagories">
                            <h2 class="church-widget-heading">[ Cetagories ]</h2>
                            <ul>
                                <li><a href="404.html">Teams</a></li>
                                <li><a href="404.html">Charity</a></li>
                                <li><a href="404.html">Donation</a></li>
                                <li><a href="404.html">Blogs</a></li>
                                <li><a href="404.html">Sermons</a></li>
                                <li><a href="404.html">Events</a></li>
                            </ul>
                        </div>
                        <!--// Widget Cetagories \\-->

                        <!--// Widget Popular News \\-->
                        <div class="widget widget_popular_news">
                            <h2 class="church-widget-heading">[ Popular News ]</h2>
                            <ul>
                                <li>
                                    <figure><a href="blog-detail.html"><img src="extra-images/popular-post-img1.jpg" alt=""></a></figure>
                                    <div class="widget-popular-news-text">
                                        <h6><a href="blog-detail.html">Sed vulputate elem ntum aliquam.</a></h6>
                                        <time datetime="2008-02-14 20:00"><i class="icon church-calendar-icon"></i> 21 Aug 2017</time>
                                    </div>
                                </li>
                                <li>
                                    <figure><a href="blog-detail.html"><img src="extra-images/popular-post-img2.jpg" alt=""></a></figure>
                                    <div class="widget-popular-news-text">
                                        <h6><a href="blog-detail.html">Sed vulputate elem ntum aliquam.</a></h6>
                                        <time datetime="2008-02-14 20:00"><i class="icon church-calendar-icon"></i> 21 Aug 2017</time>
                                    </div>
                                </li>
                                <li>
                                    <figure><a href="blog-detail.html"><img src="extra-images/popular-post-img3.jpg" alt=""></a></figure>
                                    <div class="widget-popular-news-text">
                                        <h6><a href="blog-detail.html">Sed vulputate elem ntum aliquam.</a></h6>
                                        <time datetime="2008-02-14 20:00"><i class="icon church-calendar-icon"></i> 21 Aug 2017</time>
                                    </div>
                                </li>
                                <li>
                                    <figure><a href="blog-detail.html"><img src="extra-images/popular-post-img4.jpg" alt=""></a></figure>
                                    <div class="widget-popular-news-text">
                                        <h6><a href="blog-detail.html">Sed vulputate elem ntum aliquam.</a></h6>
                                        <time datetime="2008-02-14 20:00"><i class="icon church-calendar-icon"></i> 21 Aug 2017</time>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!--// Widget Popular News \\-->

                        <!--// Widget Upcoming Events \\-->
                        <div class="widget widget_upcoming_event">
                            <h2 class="church-widget-heading">[ Upcoming Events ]</h2>
                            <ul>
                                <li>
                                    <time datetime="2008-02-14 20:00"> 21 <span>Aug</span></time>
                                    <section>
                                        <h6><a href="event-detail.html">Ut gravida nulla iad ornare sodales</a></h6>
                                        <a href="event-detail.html">By Mark Jordan</a>
                                    </section>
                                </li>
                                <li>
                                    <time datetime="2008-02-14 20:00"> 13 <span>Sep</span></time>
                                    <section>
                                        <h6><a href="event-detail.html">Cras in sapien ultri ces, molestie</a></h6>
                                        <a href="event-detail.html">By Mark Jordan</a>
                                    </section>
                                </li>
                                <li>
                                    <time datetime="2008-02-14 20:00"> 08 <span>Nov</span></time>
                                    <section>
                                        <h6><a href="event-detail.html">Aenean ultricis tell us eget sem</a></h6>
                                        <a href="event-detail.html">By Mark Jordan</a>
                                    </section>
                                </li>
                                <li>
                                    <time datetime="2008-02-14 20:00"> 11 <span>Nov</span></time>
                                    <section>
                                        <h6><a href="event-detail.html">Vivamus malesu as ada nunc nibh</a></h6>
                                        <a href="event-detail.html">By Mark Jordan</a>
                                    </section>
                                </li>
                            </ul>
                        </div>
                        <!--// Widget Upcoming Events \\-->

                        <!--// Widget Caendar \\-->
                        <div class="widget widget_calendar">
                            <h2 class="church-widget-heading">[ Calendar Archives ]</h2>
                            <table>
                                <caption> January 2018 </caption>
                                <thead>
                                <tr>
                                    <th title="Monday">M</th>
                                    <th title="Tuesday">T</th>
                                    <th title="Wednesday">W</th>
                                    <th title="Thursday">T</th>
                                    <th title="Friday">F</th>
                                    <th title="Saturday">S</th>
                                    <th title="Sunday">S</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td colspan="5"></td><td id="today">1</td><td>2</td>
                                </tr>
                                <tr>
                                    <td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td><td>9</td>
                                </tr>
                                <tr>
                                    <td>10</td><td>11</td><td>12</td><td>13</td><td>14</td><td>15</td><td>16</td>
                                </tr>
                                <tr>
                                    <td>17</td><td>18</td><td>19</td><td>20</td><td class="active">21</td><td>22</td><td>23</td>
                                </tr>
                                <tr>
                                    <td>24</td><td>25</td><td>26</td><td>27</td><td>28</td><td>29</td><td>30</td>
                                </tr>
                                <tr>
                                    <td>31</td><td colspan="6"></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!--// Widget Caendar \\-->

                        <!--// Widget Gallery \\-->
                        <div class="widget widget_gallery">
                            <h2 class="church-widget-heading">[ Instagram Photos ]</h2>
                            <ul>
                                <li>
                                    <figure><a data-fancybox-group="group" href="extra-images/side-gallery-img1.jpg" class="fancybox"><img src="extra-images/side-gallery-img1.jpg" alt=""><i class="fa fa-angle-double-right"></i></a></figure>
                                </li>
                                <li>
                                    <figure><a data-fancybox-group="group" href="extra-images/side-gallery-img2.jpg" class="fancybox"><img src="extra-images/side-gallery-img2.jpg" alt=""><i class="fa fa-angle-double-right"></i></a></figure>
                                </li>
                                <li>
                                    <figure><a data-fancybox-group="group" href="extra-images/side-gallery-img3.jpg" class="fancybox"><img src="extra-images/side-gallery-img3.jpg" alt=""><i class="fa fa-angle-double-right"></i></a></figure>
                                </li>
                                <li>
                                    <figure><a data-fancybox-group="group" href="extra-images/side-gallery-img4.jpg" class="fancybox"><img src="extra-images/side-gallery-img4.jpg" alt=""><i class="fa fa-angle-double-right"></i></a></figure>
                                </li>
                                <li>
                                    <figure><a data-fancybox-group="group" href="extra-images/side-gallery-img5.jpg" class="fancybox"><img src="extra-images/side-gallery-img5.jpg" alt=""><i class="fa fa-angle-double-right"></i></a></figure>
                                </li>
                                <li>
                                    <figure><a data-fancybox-group="group" href="extra-images/side-gallery-img6.jpg" class="fancybox"><img src="extra-images/side-gallery-img6.jpg" alt=""><i class="fa fa-angle-double-right"></i></a></figure>
                                </li>
                                <li>
                                    <figure><a data-fancybox-group="group" href="extra-images/side-gallery-img7.jpg" class="fancybox"><img src="extra-images/side-gallery-img7.jpg" alt=""><i class="fa fa-angle-double-right"></i></a></figure>
                                </li>
                                <li>
                                    <figure><a data-fancybox-group="group" href="extra-images/side-gallery-img8.jpg" class="fancybox"><img src="extra-images/side-gallery-img8.jpg" alt=""><i class="fa fa-angle-double-right"></i></a></figure>
                                </li>
                                <li>
                                    <figure><a data-fancybox-group="group" href="extra-images/side-gallery-img9.jpg" class="fancybox"><img src="extra-images/side-gallery-img9.jpg" alt=""><i class="fa fa-angle-double-right"></i></a></figure>
                                </li>
                            </ul>
                        </div>
                        <!--// Widget Gallery \\-->

                    </aside>
                    <!--// Sidebar \\-->

                </div>
            </div>
        </div>
        <!--// Main Section \\-->

    </div>
    <!--// Main Content \\-->

    @stop
