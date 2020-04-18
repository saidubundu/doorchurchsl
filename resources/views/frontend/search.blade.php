@extends('layouts.frontend')
@section('content')
    <div class="church-subheader">
        <div class="church-subheader-text">
            <span class="church-subheader-transparent"></span>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Search Result</h1>
                        <div class="clearfix"></div>
{{--                        <?php $term = request('term')?>--}}
{{--                        <p>{{$term}}</p>--}}
                    </div>
                </div>
            </div>
        </div>
        <div class="church-breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul>
                            <li><a href="/">Homepage</a></li>
                            <li class="active">Search Result</li>
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
                        @if(isset($searchResults))
                        <div class="church-search-result">
                            @if($searchResults->isEmpty())
                            <div class="church-search-result-text">
                                <img src="images/search-title.png" alt="">
                                <h2>We're sorry, but your search "{{$searchTerm}}" did not match</h2>
                                <p>Can't find what you need? Take a moment and do a search below or start from our homepage.</p>
                                <form action="{{route('search.result')}}">
                                    <input type="text" name="query" value="{{isset($searchTerm) ? $searchTerm : ''}}" onblur="if(this.value == '') { this.value ='Type Here'; }" onfocus="if(this.value =='Type Here') { this.value = ''; }" tabindex="0" type="text">
                                    <input type="submit" value="Search">
                                </form>
                                <div class="clearfix"></div>
                                <a href="/" class="church-blog-readmore church-bgcolor">Back To Homepage</a>
                            </div>
                            @else

                            <h2 class="church-section-heading">[ Showing result for "{{$searchTerm}}" ]</h2>
                            <div class="church-search-result-list">
                                <ul class="row">
                                    @foreach($searchResults->groupByType() as $type => $modelSearchResults)
                                        <h2><strong>{{ ucwords($type) }}</strong></h2>
                                    @foreach($modelSearchResults as $searchResult)
                                    <li class="col-md-12">
                                        <figure><img src="{{$searchResult->searchable->image_url ? $searchResult->searchable->image_url : '/images/holder/posts.png'}}" alt=""></figure>
                                        <div class="church-upcoming-event-text">
                                            <h6><a href="{{$searchResult->url}}">{{$searchResult->title}}</a></h6>
{{--                                            <time datetime="2008-02-14 20:00"><i class="icon church-calendar"></i>May 16, 2017 - May 27, 2017</time>--}}
{{--                                            <time datetime="2008-02-14 20:00"><i class="icon church-clock2"></i>7:00pm - 8:30pm</time>--}}
                                            <a href="{{$searchResult->url}}" class="church-simple-readmore-btn">Read More<i class="icon church-right-arrow"></i></a>
                                        </div>
                                    </li>
                                        @endforeach
                                    @endforeach

                                </ul>
                            </div>
                                @endif
                        </div>
                            @endif
                    </div>

                    <!--// Sidebar \\-->
                    <aside class="col-md-3">

                        <!--// Widget Search \\-->
                        <div class="widget widget_search">
                            <form action="{{route('search.result')}}">
                                <input type="text" name="query" value="{{isset($searchTerm) ? $searchTerm : ''}}" onblur="if(this.value == '') { this.value ='Type here'; }" onfocus="if(this.value =='Type here') { this.value = ''; }" tabindex="0" type="text">
                                <label><input type="submit" value=""></label>
                            </form>
                        </div>
                        <!--// Widget Search \\-->

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

                    </aside>
                    <!--// Sidebar \\-->

                </div>
            </div>
        </div>
        <!--// Main Section \\-->

    </div>
    @stop
