@extends('layouts.frontend')

@section('content')

    <div class="church-subheader">
        <div class="church-subheader-text">
            <span class="church-subheader-transparent"></span>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Event Detail</h1>
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
                            <li class="active">Event Detail</li>
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
                        <div class="church-event-detail">
                            <figure class="church-event-thumb"><img src="{{$event->image_url ? $event->image_url : '/images/holder/posts.png'}}" alt="">
                                <figcaption>
                                    <div class="church-event-countdown" id="church-event-countdown"></div>
                                </figcaption>
                            </figure>
                            <div class="church-event-heading">
                                <h2>{{$event->title}}</h2>
                                <div class="church-event-option">
                                    <ul class="church-cause-option">
                                        <li><strong>Started Date: </strong> <time datetime="2008-02-14 20:00">21 Aug 2018</time></li>
                                        <li><strong>Completion Date: </strong> <time datetime="2008-02-14 20:00">31 Aug 2018</time></li>
                                        <li><strong>Tags: </strong> <a href="404.html">charity,</a><a href="404.html">donation</a></li>
                                    </ul>
                                    <a href="404.html" class="church-blog-readmore church-bgcolor">Donate Now</a>
                                </div>
                            </div>
                            <div class="church-rich-editor">
                                {!! $event->body !!}
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
                            <h2 class="church-section-heading">[ Event Speakers ]</h2>
                            <div class="church-event church-event-speaker">
                                <ul class="row">
                                    <li class="col-md-4">
                                        <figure><a href="event-detail.html"><img src="extra-images/related-speaker-img1.jpg" alt=""></a>
                                            <figcaption>
                                                <h4><a href="event-detail.html">Darren Martyn</a></h4>
                                                <span>Speaker</span>
                                                <p>Sed diam risus, auctor et dui vel, rhoncus finibus lorem. Orci varius natoque penatibus et magnis dis partu.</p>
                                            </figcaption>
                                        </figure>
                                    </li>
                                    <li class="col-md-4">
                                        <figure><a href="event-detail.html"><img src="extra-images/related-speaker-img2.jpg" alt=""></a>
                                            <figcaption>
                                                <h4><a href="event-detail.html">Sarena Doe</a></h4>
                                                <span>Speaker</span>
                                                <p>Sed diam risus, auctor et dui vel, rhoncus finibus lorem. Orci varius natoque penatibus et magnis dis partu.</p>
                                            </figcaption>
                                        </figure>
                                    </li>
                                    <li class="col-md-4">
                                        <figure><a href="event-detail.html"><img src="extra-images/related-speaker-img3.jpg" alt=""></a>
                                            <figcaption>
                                                <h4><a href="event-detail.html">Marlon Roy</a></h4>
                                                <span>Speaker</span>
                                                <p>Sed diam risus, auctor et dui vel, rhoncus finibus lorem. Orci varius natoque penatibus et magnis dis partu.</p>
                                            </figcaption>
                                        </figure>
                                    </li>
                                </ul>
                            </div>

                            <h2 class="church-section-heading">[ Event Location ]</h2>
                            <div class="church-event-map"><div id="map"></div></div>

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
