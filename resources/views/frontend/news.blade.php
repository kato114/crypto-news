@extends('layout.front')
@section('content')
	<link href="{{ asset('assets/frontend/css/news-style.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/frontend/css/responsive.css') }}" rel="stylesheet">

    <!-- ========== Start Breadcrumb Area ============= -->
    <section class="ico_breadcrumb_area">
        <h1><span>News</span></h1>
    </section>
    <!-- ========== Start Breadcrumb Area ============= -->

    <!-- ========== End ICO Market Area ============= -->
    <section class="currency_slider_area pt-5">
        <div class="custom_container">
            <!-- block wrapper start-->
            <section class="block-wrapper mb-20">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="col-lg-8 pr-0">
                                    <div class="ts-overlay-style featured-post featured-post-style">
                                        <div class="item" style="background-image:url({{ asset('assets/upload/news/bitcoin1.jpg') }})">
                                            <div class="overlay-post-content">
                                                <div class="post-content">
                                                    <a class="post-cat" href="#">Bitcoin</a>
                                                    <h2 class="post-title lg">
                                                        <a href="#">Clothing and Accessories for the Fashionable Crypto Trader</a>
                                                    </h2>
                                                    <ul class="post-meta-info">
                                                        <li>
                                                            <i class="fa fa-clock-o"></i>
                                                            March 21, 2019</li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="fa fa-comments"> </i> Comments</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!--/ Featured post end -->
                                        </div>
                                    </div>
                                    <!-- ts overlay end-->
                                </div>
                                <!-- col end-->
                                <div class="col-lg-4 ts-grid-style-3 featured-post p-1">
                                    <div class="ts-overlay-style ">
                                        <div class="item" style="background-image: url({{ asset('assets/upload/news/bitcoin2.jpg') }});">

                                            <div class="overlay-post-content">
                                                <div class="post-content">
                                                    <a class="post-cat" href="#">Bitcoin</a>
                                                    <h3 class="post-title">
                                                        <a href="#">20 More Crypto Adoption Cases Throughout the World</a>
                                                    </h3>
                                                    <span class="post-date-info">
                                                        <i class="fa fa-clock-o"></i>
                                                        March 21, 2019
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end item-->
                                    </div>
                                    <!-- ts overly end-->
                                    <div class="ts-overlay-style">
                                        <div class="item" style="background-image: url({{ asset('assets/upload/news/bitcoin3.jpg') }});">

                                            <div class="overlay-post-content">
                                                <div class="post-content">
                                                    <a class="post-cat" href="#">Ethereum</a>
                                                    <h3 class="post-title">
                                                        <a href="#">Bitcoin And Altcoins Signaling Bearish Continuation</a>
                                                    </h3>
                                                    <span class="post-date-info">
                                                        <i class="fa fa-clock-o"></i>
                                                        March 21, 2019
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end item-->
                                    </div>
                                    <!-- ts overly end-->
                                </div>
                            </div>
                        </div>
                        <!-- col end-->
                        <div class="col-lg-3 pl-0">
                            <div class="right-sidebar">
                                <div class="widgets">
                                    <a href="#" class="currency-list-items currency-blue-dark-heighlight">
                                        <h4>Ethereum</h4>
                                        <h4>EtH</h4>
                                        <span>Over all</span>
                                        <div class="currency-right-content">
                                            <h4>+114.57%</h4>
                                            <span>
                                                <i class="fa fa-caret-down"></i>$0.022</span>
                                        </div>
                                        <img src="{{ asset('assets/frontend/images/bitcoin2.png') }}" alt="">
                                    </a>
                                    <!-- currency list item end-->
                                    <a href="#" class="currency-list-items currency-yellow-heighlight">
                                        <h4>Bitcoin</h4>
                                        <h4>Bit</h4>
                                        <span>Over all</span>
                                        <div class="currency-right-content">
                                            <h4>+114.57%</h4>
                                            <span>
                                                <i class="fa fa-caret-down"></i>$0.022</span>
                                        </div>
                                        <img src="{{ asset('assets/frontend/images/bitcoin1.png') }}" alt="">
                                    </a>
                                    <!-- currency list item end-->
                                    <a href="#" class="currency-list-items currency-gray-heighlight">
                                        <h4>Litecoin</h4>
                                        <h4>ltc</h4>
                                        <span>Over all</span>
                                        <div class="currency-right-content">
                                            <h4>+114.57%</h4>
                                            <span>
                                                <i class="fa fa-caret-down"></i>$0.022</span>
                                        </div>
                                        <img src="{{ asset('assets/frontend/images/litcoin.png') }}" alt="">
                                    </a>
                                    <!-- currency list item end-->
                                    <a href="#" class="currency-list-items currency-blue-heighlight">
                                        <h4>LISK</h4>
                                        <h4>lsk</h4>
                                        <span>Over all</span>
                                        <div class="currency-right-content">
                                            <h4>+114.57%</h4>
                                            <span>
                                                <i class="fa fa-caret-down"></i>$0.022</span>
                                        </div>
                                        <img src="{{ asset('assets/frontend/images/lisk.png') }}" alt="">
                                    </a>
                                    <!-- currency list item end-->
                                    <a href="#" class="currency-list-items currency-green-heighlight">
                                        <h4>Game Credits</h4>
                                        <h4>Game</h4>
                                        <span>Over all</span>
                                        <div class="currency-right-content">
                                            <h4>+114.57%</h4>
                                            <span>
                                                <i class="fa fa-caret-down"></i>$0.022</span>
                                        </div>
                                        <img src="{{ asset('assets/frontend/images/game.png') }}" alt="">
                                    </a>
                                    <!-- currency list item end-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end-->
                </div>
                <!-- container end-->
            </section>
            <!-- block wrapper end-->

            <!-- block wrapper start-->
            <section class="block-wrapper mb-20">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="left-sidebar">
                                <div class="widgets post-list-item bg-dark-item">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation">
                                            <a class="active" href="#home" aria-controls="home" role="tab" data-toggle="tab">
                                                <i class="fa fa-clock-o"></i>
                                                Recent
                                            </a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">
                                                <i class="fa fa-heart"></i>
                                                Favorites
                                            </a>
                                        </li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active ts-grid-box post-tab-list" id="home">
                                            <div class="post-content media">
                                                <img class="d-flex sidebar-img" src="{{ asset('assets/upload/news/bitcoin1.jpg') }}" alt="">
                                                <div class="media-body">
                                                    <span class="post-tag">
                                                        <a href="#" class="yellow-color"> Bitcoin</a>
                                                    </span>
                                                    <h4 class="post-title">
                                                        <a href="#">ICOs Hit New Low, but Picking Up</a>
                                                    </h4>
                                                </div>
                                            </div>
                                            <!--post-content end-->
                                            <div class="post-content media ">
                                                <img class="d-flex sidebar-img" src="{{ asset('assets/upload/news/bitcoin2.jpg') }}" alt="">
                                                <div class="media-body">
                                                    <span class="post-tag">
                                                        <a href="#" class="yellow-color"> ethiliam</a>
                                                    </span>
                                                    <h4 class="post-title">
                                                        <a href="#">Bitcoin Extends Range While</a>
                                                    </h4>
                                                </div>
                                            </div>
                                            <!--post-content end-->
                                            <div class="post-content media">
                                                <img class="d-flex sidebar-img" src="{{ asset('assets/upload/news/bitcoin3.jpg') }}" alt="">
                                                <div class="media-body">
                                                    <span class="post-tag">
                                                        <a href="#" class="yellow-color"> blockchain</a>
                                                    </span>
                                                    <h4 class="post-title">
                                                        <a href="#">Bitcoin And Altcoins Signaling</a>
                                                    </h4>
                                                </div>
                                            </div>
                                            <!--post-content end-->
                                            <div class="post-content media">
                                                <img class="d-flex sidebar-img" src="{{ asset('assets/upload/news/bitcoin4.jpg') }}" alt="">
                                                <div class="media-body">
                                                    <span class="post-tag">
                                                        <a href="#" class="yellow-color"> banking</a>
                                                    </span>
                                                    <h4 class="post-title">
                                                        <a href="#">20 More Crypto Adoption Cases</a>
                                                    </h4>
                                                </div>
                                            </div>
                                            <!--post-content end-->
                                            <div class="post-content media">
                                                <img class="d-flex sidebar-img" src="{{ asset('assets/upload/news/bitcoin5.jpg') }}" alt="">
                                                <div class="media-body">
                                                    <span class="post-tag">
                                                        <a href="#" class="yellow-color"> blockchain</a>
                                                    </span>
                                                    <h4 class="post-title">
                                                        <a href="#">Clothing and Accessories for the</a>
                                                    </h4>
                                                </div>
                                            </div>
                                            <!--post-content end-->
                                            <div class="post-content media">
                                                <img class="d-flex sidebar-img" src="{{ asset('assets/upload/news/bitcoin1.jpg') }}" alt="">
                                                <div class="media-body">
                                                    <span class="post-tag">
                                                        <a href="#" class="yellow-color"> Bitcoin</a>
                                                    </span>
                                                    <h4 class="post-title">
                                                        <a href="#">ICOs Hit New Low, but Production</a>
                                                    </h4>
                                                </div>
                                            </div>
                                            <!--post-content end-->
                                            <div class="post-content media">
                                                <img class="d-flex sidebar-img" src="{{ asset('assets/upload/news/bitcoin2.jpg') }}" alt="">
                                                <div class="media-body">
                                                    <span class="post-tag">
                                                        <a href="#" class="yellow-color"> Banking</a>
                                                    </span>
                                                    <h4 class="post-title">
                                                        <a href="#">ride out Hurricane Florence on a boat</a>
                                                    </h4>
                                                </div>
                                            </div>
                                            <!--post-content end-->

                                        </div>
                                        <!--ts-grid-box end -->

                                        <div role="tabpanel" class="tab-pane ts-grid-box post-tab-list" id="profile">
                                            <div class="post-content media">
                                                <img class="d-flex sidebar-img" src="{{ asset('assets/upload/news/bitcoin3.jpg') }}" alt="">
                                                <div class="media-body">
                                                    <span class="post-tag">
                                                        <a href="#" class="yellow-color"> blockchain</a>
                                                    </span>
                                                    <h4 class="post-title">
                                                        <a href="#">Apple introduces larger Apple Watch </a>
                                                    </h4>
                                                </div>
                                            </div>
                                            <!--post-content end-->
                                            <div class="post-content media ">
                                                <img class="d-flex sidebar-img" src="{{ asset('assets/upload/news/bitcoin4.jpg') }}" alt="">
                                                <div class="media-body">
                                                    <span class="post-tag">
                                                        <a href="#" class="yellow-color"> Bitcoin</a>
                                                    </span>
                                                    <h4 class="post-title">
                                                        <a href="#">18 month old shoots himself by gun </a>
                                                    </h4>
                                                </div>
                                            </div>
                                            <!--post-content end-->
                                            <div class="post-content media">
                                                <img class="d-flex sidebar-img" src="{{ asset('assets/upload/news/bitcoin5.jpg') }}" alt="">
                                                <div class="media-body">
                                                    <span class="post-tag">
                                                        <a href="#" class="yellow-color"> Banking</a>
                                                    </span>
                                                    <h4 class="post-title">
                                                        <a href="#">18 month old shoots himself by gun </a>
                                                    </h4>
                                                </div>
                                            </div>
                                            <!--post-content end-->
                                            <div class="post-content media">
                                                <img class="d-flex sidebar-img" src="{{ asset('assets/upload/news/bitcoin1.jpg') }}" alt="">
                                                <div class="media-body">
                                                    <span class="post-tag">
                                                        <a href="#" class="yellow-color"> blockchain</a>
                                                    </span>
                                                    <h4 class="post-title">
                                                        <a href="#">18 month old shoots himself by gun </a>
                                                    </h4>
                                                </div>
                                            </div>
                                            <!--post-content end-->
                                            <div class="post-content media">
                                                <img class="d-flex sidebar-img" src="{{ asset('assets/upload/news/bitcoin2.jpg') }}" alt="">
                                                <div class="media-body">
                                                    <span class="post-tag">
                                                        <a href="#" class="yellow-color"> Bitcoin</a>
                                                    </span>
                                                    <h4 class="post-title">
                                                        <a href="#">18 month old shoots himself by gun </a>
                                                    </h4>
                                                </div>
                                            </div>
                                            <!--post-content end-->
                                            <div class="post-content media">
                                                <img class="d-flex sidebar-img" src="{{ asset('assets/upload/news/bitcoin3.jpg') }}" alt="">
                                                <div class="media-body">
                                                    <span class="post-tag">
                                                        <a href="#" class="yellow-color"> blockchain</a>
                                                    </span>
                                                    <h4 class="post-title">
                                                        <a href="#">18 month old shoots himself by gun </a>
                                                    </h4>
                                                </div>
                                            </div>
                                            <!--post-content end-->
                                            <div class="post-content media">
                                                <img class="d-flex sidebar-img" src="{{ asset('assets/upload/news/bitcoin4.jpg') }}" alt="">
                                                <div class="media-body">
                                                    <span class="post-tag">
                                                        <a href="#" class="yellow-color"> bitcoin</a>
                                                    </span>
                                                    <h4 class="post-title">
                                                        <a href="#">18 month old shoots himself by gun </a>
                                                    </h4>
                                                </div>
                                            </div>
                                            <!--post-content end-->

                                        </div>
                                        <!--ts-grid-box end -->
                                    </div>
                                    <!-- tab content end-->
                                </div>
                                <!--widgets end-->
                            </div>
                            <!-- left sidebar end-->
                        </div>
                        <!-- col end-->
                        <div class="col-lg-9 category-post-style1">
                            <div class="ts-title-item">
                                <h2 class="ts-title">
                                    <span>Crypto Aims</span>
                                </h2>
                            </div>
                            <!-- ts title item end-->
                            <div class="row mb-10">
                                <div class="col-lg-7">
                                    <div class="ts-post-thumb">
                                        <a href="#">
                                            <img class="img-fluid" src="{{ asset('assets/upload/news/bitcoin2.jpg') }}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- end col-->
                                <div class="col-lg-5 align-self-center">
                                    <div class="post-content">
                                        <a href="#" class="post-cat">Bitcoin</a>
                                        <h3 class="post-title md">
                                            <a href="#">Clothing and Accessories for the Crypto Trader</a>
                                        </h3>
                                        <ul class="post-meta-info">
                                            <li class="author">
                                                <a href="#">
                                                    <img src="{{ asset('assets/upload/avatar/author.png') }}" alt=""> Donald Ramos
                                                </a>
                                            </li>
                                            <li>
                                                <i class="fa fa-clock-o"></i>
                                                March 21, 2019
                                            </li>

                                        </ul>
                                        <p>
                                            Black farmers in the US’s South faced with the continued failure their efforts to run farm their launched a lawsuit claiming
                                            that “white racism” is to blame
                                        </p>
                                    </div>
                                </div>
                                <!-- col end-->
                            </div>
                            <!-- row end-->
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="item mb-20">

                                        <div class="ts-post-thumb">
                                            <a class="post-cat" href="#">blockchain</a>
                                            <a href="#">
                                                <img class="img-fluid" src="{{ asset('assets/upload/news/bitcoin5.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="post-content">
                                            <h3 class="post-title">
                                                <a href="#">ICOs Hit New Low, but Production Adoption Picking Up</a>
                                            </h3>
                                            <span class="post-date-info">
                                                <i class="fa fa-clock-o"></i>
                                                March 21, 2019
                                            </span>
                                        </div>
                                    </div>
                                    <!-- item end-->
                                </div>
                                <!-- col end-->
                                <div class="col-md-4">
                                    <div class="item mb-20">

                                        <div class="ts-post-thumb">
                                            <a class="post-cat" href="#">Bitcoin</a>
                                            <a href="#">
                                                <img class="img-fluid" src="{{ asset('assets/upload/news/bitcoin1.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="post-content">
                                            <h3 class="post-title">
                                                <a href="#">Bitcoin Extends Range While Ethereum Hits New Yearly Low</a>
                                            </h3>
                                            <span class="post-date-info">
                                                <i class="fa fa-clock-o"></i>
                                                March 21, 2019
                                            </span>
                                        </div>
                                    </div>
                                    <!-- item end-->
                                </div>
                                <!-- col end-->
                                <div class="col-md-4 ">
                                    <div class="item">

                                        <div class="ts-post-thumb">
                                            <a class="post-cat" href="#">Bitcoin</a>
                                            <a href="#">
                                                <img class="img-fluid" src="{{ asset('assets/upload/news/bitcoin2.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="post-content">
                                            <h3 class="post-title">
                                                <a href="#">More Crypto Adoption Cases Throughout the World</a>
                                            </h3>
                                            <span class="post-date-info">
                                                <i class="fa fa-clock-o"></i>
                                                March 21, 2019
                                            </span>
                                        </div>
                                    </div>
                                    <!-- item end-->
                                </div>
                                <!-- col end-->
                            </div>
                            <!-- row end-->
                        </div>
                        <!-- col end-->
                    </div>
                    <!-- row end-->
                </div>
                <!-- container end-->
            </section>
            <!-- block wrapper end-->

            <!-- block wrapper start-->
            <section class="block-wrapper p-30">
                <div class="container">
                    <div class="ts-title-item bg-gray">
                        <h2 class="ts-title">
                            <span>Watch Now</span>
                        </h2>
                    </div>
                    <!-- title item end-->
                    <div class="row ts-grid-item ts-overlay-item">
                        <div class="col-md-4">
                            <div class="ts-overlay-style">
                                <div class="item">
                                    <div class="ts-post-thumb">
                                        <a class="post-cat" href="#">Bitcoin</a>
                                        <a href="#">
                                            <img class="img-fluid" src="{{ asset('assets/upload/news/bitcoin2.jpg') }}" alt="">
                                        </a>
                                        <a href="https://www.youtube.com/watch?v=uZmz6fGRVW4" class="ts-video-icon">
                                            <i class="fa fa-play-circle-o "></i>
                                        </a>
                                    </div>
                                    <div class="overlay-post-content">
                                        <div class="post-content">
                                            <h3 class="post-title">
                                                <a href="#">Tourism in Dubai is booming international tourist most visited place</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <!-- end item-->
                            </div>
                            <!-- ts overlay style end-->
                        </div>
                        <!-- col end-->
                        <div class="col-md-4">
                            <div class="ts-overlay-style">
                                <div class="item">
                                    <div class="ts-post-thumb">
                                        <a class="post-cat" href="#">Ethiliam</a>
                                        <a href="#">
                                            <img class="img-fluid" src="{{ asset('assets/upload/news/bitcoin3.jpg') }}" alt="">
                                        </a>
                                        <a href="https://www.youtube.com/watch?v=uZmz6fGRVW4" class="ts-video-icon">
                                            <i class="fa fa-play-circle-o "></i>
                                        </a>
                                    </div>
                                    <div class="overlay-post-content">
                                        <div class="post-content">
                                            <h3 class="post-title">
                                                <a href="#">Clothing and Accessories for the Fashionable Crypto Trader</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <!-- end item-->
                            </div>
                            <!-- ts overlay style end-->
                        </div>
                        <!-- col end-->
                        <div class="col-md-4">
                            <div class="ts-overlay-style">
                                <div class="item">
                                    <div class="ts-post-thumb">
                                        <a class="post-cat" href="#">Banking</a>
                                        <a href="#">
                                            <img class="img-fluid" src="{{ asset('assets/upload/news/bitcoin4.jpg') }}" alt="">
                                        </a>
                                        <a href="https://www.youtube.com/watch?v=uZmz6fGRVW4" class="ts-video-icon">
                                            <i class="fa fa-play-circle-o "></i>
                                        </a>
                                    </div>
                                    <div class="overlay-post-content">
                                        <div class="post-content">
                                            <h3 class="post-title">
                                                <a href="#">Bitcoin Extends Range While Ethereum Hits New Yearly Low</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <!-- end item-->
                            </div>
                            <!-- ts overlay style end-->
                        </div>
                        <!-- col end-->
                    </div>
                    <!-- row end-->
                </div>
                <!-- container end-->
            </section>
            <!-- block wrapper end-->

            <section class="block-wrapper p-30 hot-topics-item">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="ts-title-item">
                                <h2 class="ts-title">
                                    <span>Hot Topics</span>
                                </h2>
                            </div>
                            <div class="post-list">
                                <!-- ts title end-->
                                <div class="row mb-10">
                                    <div class="col-md-4">
                                        <div class="ts-post-thumb">
                                            <a href="#">
                                                <img class="img-fluid" src="{{ asset('assets/upload/news/bitcoin1.jpg') }}" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <!-- col lg end-->
                                    <div class="col-md-8">
                                        <div class="post-content">
                                            <h3 class="post-title md">
                                                <a href="#">Decentralized Bitcoin Exchange Hodl Hodl to Launch OTC Desk for Large Traders</a>
                                            </h3>
                                            <ul class="post-meta-info">
                                                <li>
                                                    <a href="#"> Donald Ramos</a>
                                                </li>
                                                <li>
                                                    <i class="fa fa-clock-o"></i>
                                                    March 21, 2019
                                                </li>
                                            </ul>
                                            <p>
                                                Black farmers in the US’s South faced with the continued failure their efforts to run farm their launched a lawsuit claiming
                                                that “white racism” is to blame for their inability to their produce crop yields.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- row end-->
                                <div class="row mb-10">
                                    <div class="col-md-4">
                                        <div class="ts-post-thumb">
                                            <a href="#">
                                                <img class="img-fluid" src="{{ asset('assets/upload/news/bitcoin2.jpg') }}" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <!-- col lg end-->
                                    <div class="col-md-8">
                                        <div class="post-content">
                                            <h3 class="post-title md">
                                                <a href="#"> Mexican leader wants to end cartel violence to end cartel violence with peace tour</a>
                                            </h3>
                                            <ul class="post-meta-info">
                                                <li>
                                                    <a href="#">Ramos Donald </a>
                                                </li>
                                                <li>
                                                    <i class="fa fa-clock-o"></i>
                                                    March 21, 2019
                                                </li>
                                            </ul>
                                            <p>
                                                Black farmers in the US’s South faced with the continued failure their efforts to run farm their launched a lawsuit claiming
                                                that “white racism” is to blame for their inability to their produce crop yields.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- row end-->
                                <div class="row mb-10">
                                    <div class="col-md-4">
                                        <div class="ts-post-thumb">
                                            <a href="#">
                                                <img class="img-fluid" src="{{ asset('assets/upload/news/bitcoin3.jpg') }}" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <!-- col lg end-->
                                    <div class="col-md-8">
                                        <div class="post-content">
                                            <h3 class="post-title md">
                                                <a href="#">Clothing and Accessories for the Fashionable Accessories for the Fashionable Crypto Trader</a>
                                            </h3>
                                            <ul class="post-meta-info">
                                                <li>
                                                    <a href="#"> Donald Ramos</a>
                                                </li>
                                                <li>
                                                    <i class="fa fa-clock-o"></i>
                                                    March 21, 2019
                                                </li>
                                            </ul>
                                            <p>
                                                Black farmers in the US’s South faced with the continued failure their efforts to run farm their launched a lawsuit claiming
                                                that “white racism” is to blame for their inability to their produce crop yields.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- row end-->
                                <div class="row mb-10">
                                    <div class="col-md-4">
                                        <div class="ts-post-thumb">
                                            <a href="#">
                                                <img class="img-fluid" src="{{ asset('assets/upload/news/bitcoin4.jpg') }}" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <!-- col lg end-->
                                    <div class="col-md-8">
                                        <div class="post-content">
                                            <h3 class="post-title md">
                                                <a href="#">How to get the most How to get the most when selling your old iPhoneold iPhone</a>
                                            </h3>
                                            <ul class="post-meta-info">
                                                <li>
                                                    <a href="#">Ramos Donald</a>
                                                </li>
                                                <li>
                                                    <i class="fa fa-clock-o"></i>
                                                    March 21, 2019
                                                </li>
                                            </ul>
                                            <p>
                                                Black farmers in the US’s South faced with the continued failure their efforts to run farm their launched a lawsuit claiming
                                                that “white racism” is to blame for their inability to their produce crop yields.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- row end-->
                                <div class="row mb-10">
                                    <div class="col-md-4">
                                        <div class="ts-post-thumb">
                                            <a href="#">
                                                <img class="img-fluid" src="{{ asset('assets/upload/news/bitcoin5.jpg') }}" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <!-- col lg end-->
                                    <div class="col-md-8">
                                        <div class="post-content">
                                            <h3 class="post-title md">
                                                <a href="#">Decentralized Bitcoin Exchange Hodl Hodl to Launch OTC Desk for Large Traders</a>
                                            </h3>
                                            <ul class="post-meta-info">
                                                <li>
                                                    <a href="#">Devid Ronald</a>
                                                </li>
                                                <li>
                                                    <i class="fa fa-clock-o"></i>
                                                    March 21, 2019
                                                </li>
                                            </ul>
                                            <p>
                                                Black farmers in the US’s South faced with the continued failure their efforts to run farm their launched a lawsuit claiming
                                                that “white racism” is to blame for their inability to their produce crop yields.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- row end-->
                                <div class="ts-pagination text-center mt-15">
                                    <ul class="pagination">
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-angle-double-left"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-angle-left"></i>
                                            </a>
                                        </li>
                                        <li class="active">
                                            <a href="#">1</a>
                                        </li>
                                        <li>
                                            <a href="#">2</a>
                                        </li>
                                        <li>
                                            <a href="#">3</a>
                                        </li>
                                        <li>
                                            <a href="#">4</a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-angle-double-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- col end-->
                        <div class="col-lg-3">
                            <div class="widgets widgets-item ts-social-list-item">
                                <h3 class="widget-title">
                                    Follow us
                                </h3>
                                <ul>
                                    <li class="ts-facebook">
                                        <a href="#">
                                            <i class="fa fa-facebook"></i>
                                            <b>5.5 k </b>
                                            <span>Likes</span>
                                        </a>

                                    </li>
                                    <li class="ts-google-plus">
                                        <a href="#">
                                            <i class="fa fa-google-plus"></i>
                                            <b>5.5 k </b>
                                            <span>Follwers</span>
                                        </a>

                                    </li>
                                    <li class="ts-twitter">
                                        <a href="#">
                                            <i class="fa fa-twitter"></i>
                                            <b>12.5 k </b>
                                            <span>Follwers</span>
                                        </a>
                                    </li>
                                    <li class="ts-pinterest">
                                        <a href="#">
                                            <i class="fa fa-pinterest-p"></i>
                                            <b>5.5 k </b>
                                            <span>Photos</span>
                                        </a>
                                    </li>
                                    <li class="ts-linkedin">
                                        <a href="#">
                                            <i class="fa fa-linkedin"></i>
                                            <b>5.5 k </b>
                                            <span>Follwers</span>
                                        </a>
                                    </li>
                                    <li class="ts-youtube">
                                        <a href="#">
                                            <i class="fa fa-youtube"></i>
                                            <b>5.5 k </b>
                                            <span>Follwers</span>
                                        </a>
                                    </li>
                                    <li class="ts-instragram">
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                            <b>5.5 k </b>
                                            <span>Follwers</span>
                                        </a>
                                    </li>
                                    <li class="ts-dribble">
                                        <a href="#">
                                            <i class="fa fa-dribbble"></i>
                                            <b>5.5 k </b>
                                            <span>Follwers</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- widgets end-->


                            <div class="widgets widgets-item  widgets-populer-post">
                                <h3 class="widget-title">Populer Post</h3>
                                <div class="ts-overlay-style">
                                    <div class="item">
                                        <div class="ts-post-thumb">
                                            <a href="#">
                                                <img class="img-fluid" src="{{ asset('assets/upload/news/bitcoin1.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="overlay-post-content">
                                            <div class="post-content">
                                                <h3 class="post-title">
                                                    <a href="#">Tourism in Dubai is boom international tourist</a>
                                                </h3>
                                                <ul class="post-meta-info">
                                                    <li>
                                                        <i class="fa fa-clock-o"></i>
                                                        March 21, 2019
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ts-overlay-style  end-->

                                <div class="post-content media">
                                    <img class="d-flex sidebar-img" src="{{ asset('assets/upload/news/bitcoin2.jpg') }}" alt="">
                                    <div class="media-body align-self-center">
                                        <h4 class="post-title">
                                            <a href="#">Tesla just lost its head of global finance</a>
                                        </h4>
                                    </div>
                                </div>
                                <!-- post content end-->
                                <div class="post-content media">
                                    <img class="d-flex sidebar-img" src="{{ asset('assets/upload/news/bitcoin3.jpg') }}" alt="">
                                    <div class="media-body align-self-center">
                                        <h4 class="post-title">
                                            <a href="#">easy teriyaki chicken with broccoli </a>
                                        </h4>
                                    </div>
                                </div>
                                <!-- post content end-->
                                <div class="post-content media">
                                    <img class="d-flex sidebar-img" src="{{ asset('assets/upload/news/bitcoin4.jpg') }}" alt="">
                                    <div class="media-body align-self-center">
                                        <h4 class="post-title">
                                            <a href="#">Tesla just lost its head of global finance </a>
                                        </h4>
                                    </div>
                                </div>
                                <!-- post content end-->
                            </div>
                            <!-- widgets end-->
                            <div class="widgets widgets-item widget-banner">
                                <a href="#">
                                    <img class="img-fluid" src="{{ asset('assets/upload/banner/sidebar-banner1.jpg') }}" alt="">
                                </a>
                            </div>
                            <!-- widgets end-->
                        </div>
                        <!-- col end-->
                    </div>
                </div>
            </section>
        </div>
    </section>
@endsection
