@extends('layouts.frontend')
@section('content')

    <div class="church-subheader">
        <div class="church-subheader-text">
            <span class="church-subheader-transparent"></span>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Error 404</h1>
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
                            <li class="active">Error 404</li>
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

                    <div class="col-md-12">
                        <div class="church-error-page">
                            <div class="church-error-text">
                                <h2>Error</h2>
                                <img src="{{asset('images/error-title.png')}}" alt="">
                                <h3>Oops Nothing Found</h3>
                                <p>Looks like the page you're trying to visit does not exist. plz check the URL and try your luck again.</p>
                                <a href="/" class="church-btn">Back To Homepage</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--// Main Section \\-->

    </div>
    <!--// Main Content \\-->
    @stop
