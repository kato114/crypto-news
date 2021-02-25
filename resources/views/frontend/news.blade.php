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
                        <div class="col-lg-12 mt-4">
                            <h3>Search</h3>
                        </div>
                        <div class="col-lg-12">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button">Search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mt-4">
                            <h3>Topic</h3>
                        </div>
                        <div class="col-lg-12">
                            <button class="btn btn-outline-primary btn-filter btn-filter-topic" value="Digital+Dollar ">The Digital Dollar</button>
                            <button class="btn btn-outline-primary btn-filter btn-filter-topic" value="Digital+Euro ">The Digital Euro</button>
                            <button class="btn btn-outline-primary btn-filter btn-filter-topic" value="Futures ">Futures contracts</button>
                            <button class="btn btn-outline-primary btn-filter btn-filter-topic" value="Mining ">Mining crypto</button>
                            <button class="btn btn-outline-primary btn-filter btn-filter-topic" value="Stablecoins ">Stablecoins</button>
                            <button class="btn btn-outline-primary btn-filter btn-filter-topic" value="Tanalysis ">Technical Analysiss</button>
                            <button class="btn btn-outline-primary btn-filter btn-filter-topic" value="Taxes ">IRS and Taxes</button>
                            <button class="btn btn-outline-primary btn-filter btn-filter-topic" value="Upgrade ">Upgrades and Hard Forks</button>
                            <button class="btn btn-outline-primary btn-filter btn-filter-topic" value="Whales">Whales Buying and Selling</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mt-4">
                            <h3>Sentiment</h3>
                        </div>
                        <div class="col-lg-12">
                            <button class="btn btn-outline-primary btn-filter btn-filter-sentiment" value="neutral">Neutral</button>
                            <button class="btn btn-outline-primary btn-filter btn-filter-sentiment" value="positive">Positive</button>
                            <button class="btn btn-outline-primary btn-filter btn-filter-sentiment" value="negative">Negative</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mt-4">
                            <h3>Date</h3>
                        </div>
                        <div class="col-lg-12">
                            <button class="btn btn-outline-primary btn-filter btn-filter-date" value="last5min">Last 5min</button>
                            <button class="btn btn-outline-primary btn-filter btn-filter-date" value="last10min">Last 10min</button>
                            <button class="btn btn-outline-primary btn-filter btn-filter-date" value="last15min">Last 15min</button>
                            <button class="btn btn-outline-primary btn-filter btn-filter-date" value="last30min">Last 30min</button>
                            <button class="btn btn-outline-primary btn-filter btn-filter-date" value="last45min">Last 45min</button>
                            <button class="btn btn-outline-primary btn-filter btn-filter-date" value="last60min">Last 60min</button>
                            <br>
                            <button class="btn btn-outline-primary btn-filter btn-filter-date" value="today">Today</button>
                            <button class="btn btn-outline-primary btn-filter btn-filter-date" value="yesterday">Yesterday</button>
                            <button class="btn btn-outline-primary btn-filter btn-filter-date" value="last7days">Last 7days</button>
                            <button class="btn btn-outline-primary btn-filter btn-filter-date" value="last30days">Last 30days</button>
                            <button class="btn btn-outline-primary btn-filter btn-filter-date" value="last60days">Last 60days</button>
                            <button class="btn btn-outline-primary btn-filter btn-filter-date" value="last90days">Last 90days</button>
                            <button class="btn btn-outline-primary btn-filter btn-filter-date" value="yeartodate">Year to Date</button>
                        </div>
                    </div>
                </div>
            </section>
            <section class="block-wrapper mb-20">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="ts-title-item">
                                <h2 class="ts-title">
                                    <span>Latest News</span>
                                </h2>
                            </div>
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
                            <div class="p-30">
                                <div class="ts-title-item">
                                    <h2 class="ts-title">
                                        <span>Ticket Crypto News</span>
                                    </h2>
                                </div>
                                <div id="tik_post_list" class="post-list"></div>
                            </div>
                            <div class="p-30">
                                <div class="ts-title-item">
                                    <h2 class="ts-title">
                                        <span>General Crypto News</span>
                                    </h2>
                                </div>
                                <div id="gen_post_list" class="post-list"></div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="widgets widgets-item  widgets-populer-post">
                                        <h3 class="widget-title">Neutral Sentiment</h3>
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
                                </div>
                                <div class="col-lg-4">
                                    <div class="widgets widgets-item  widgets-populer-post">
                                        <h3 class="widget-title">Positive Sentiment</h3>
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
                                </div>
                                <div class="col-lg-4">
                                    <div class="widgets widgets-item  widgets-populer-post">
                                        <h3 class="widget-title">Negative Sentiment</h3>
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
                                </div>
                            </div>
                        </div>
                        <!-- col end-->
                        <div class="col-lg-3">
                            <div class="widgets widgets-item">
                                <h3 class="widget-title">Exchange Websites</h3>

                                <div class="ts-overlay-style">
                                    <div class="item">
                                        <div class="ts-post-thumb">
                                            <a href="#">
                                                <img class="img-fluid" src="{{ asset('assets/frontend/images/exchanges/binance.png') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="overlay-post-content">
                                            <div class="post-content">
                                                <h3 class="post-title">
                                                    <a href="https://www.binance.com/en?ref=1016259">www.binance.com</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="ts-overlay-style">
                                    <div class="item">
                                        <div class="ts-post-thumb">
                                            <a href="#">
                                                <img class="img-fluid" src="{{ asset('assets/frontend/images/exchanges/kucoin.png') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="overlay-post-content">
                                            <div class="post-content">
                                                <h3 class="post-title">
                                                    <a href="https://www.kucoin.com/">www.kucoin.com</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="ts-overlay-style">
                                    <div class="item">
                                        <div class="ts-post-thumb">
                                            <a href="#">
                                                <img class="img-fluid" src="{{ asset('assets/frontend/images/exchanges/coinbase.png') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="overlay-post-content">
                                            <div class="post-content">
                                                <h3 class="post-title">
                                                    <a href="https://www.coinbase.com/">www.coinbase.com</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="ts-overlay-style">
                                    <div class="item">
                                        <div class="ts-post-thumb">
                                            <a href="#">
                                                <img class="img-fluid" src="{{ asset('assets/frontend/images/exchanges/hitbtc.png') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="overlay-post-content">
                                            <div class="post-content">
                                                <h3 class="post-title">
                                                    <a href="https://hitbtc.com/btc-to-usdt">www.hitbtc.com</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="ts-overlay-style">
                                    <div class="item">
                                        <div class="ts-post-thumb">
                                            <a href="#">
                                                <img class="img-fluid" src="{{ asset('assets/frontend/images/exchanges/gate.png') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="overlay-post-content">
                                            <div class="post-content">
                                                <h3 class="post-title">
                                                    <a href="https://www.gate.io/">www.gate.io</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="ts-overlay-style">
                                    <div class="item">
                                        <div class="ts-post-thumb">
                                            <a href="#">
                                                <img class="img-fluid" src="{{ asset('assets/frontend/images/exchanges/coinbase_pro.png') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="overlay-post-content">
                                            <div class="post-content">
                                                <h3 class="post-title">
                                                    <a href="https://pro.coinbase.com/">pro.coinbase.com</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="ts-overlay-style">
                                    <div class="item">
                                        <div class="ts-post-thumb">
                                            <a href="#">
                                                <img class="img-fluid" src="{{ asset('assets/frontend/images/exchanges/kraken.png') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="overlay-post-content">
                                            <div class="post-content">
                                                <h3 class="post-title">
                                                    <a href="https://www.kraken.com/en-us/">www.kraken.com</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="ts-overlay-style">
                                    <div class="item">
                                        <div class="ts-post-thumb">
                                            <a href="#">
                                                <img class="img-fluid" src="{{ asset('assets/frontend/images/exchanges/gemni.png') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="overlay-post-content">
                                            <div class="post-content">
                                                <h3 class="post-title">
                                                    <a href="https://www.gemini.com/">www.gemini.com</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="ts-overlay-style">
                                    <div class="item">
                                        <div class="ts-post-thumb">
                                            <a href="#">
                                                <img class="img-fluid" src="{{ asset('assets/frontend/images/exchanges/mxc.png') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="overlay-post-content">
                                            <div class="post-content">
                                                <h3 class="post-title">
                                                    <a href="https://www.mxc.co/">www.mxc.co</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="ts-overlay-style">
                                    <div class="item">
                                        <div class="ts-post-thumb">
                                            <a href="#">
                                                <img class="img-fluid" src="{{ asset('assets/frontend/images/exchanges/bittrex.png') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="overlay-post-content">
                                            <div class="post-content">
                                                <h3 class="post-title">
                                                    <a href="https://bittrex.com/home/markets">global.bittrex.com</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="ts-overlay-style">
                                    <div class="item">
                                        <div class="ts-post-thumb">
                                            <a href="#">
                                                <img class="img-fluid" src="{{ asset('assets/frontend/images/exchanges/bitforex.png') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="overlay-post-content">
                                            <div class="post-content">
                                                <h3 class="post-title">
                                                    <a href="https://www.bitforex.com/en/">www.bitforex.com</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="ts-overlay-style">
                                    <div class="item">
                                        <div class="ts-post-thumb">
                                            <a href="#">
                                                <img class="img-fluid" src="{{ asset('assets/frontend/images/exchanges/hotbit.png') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="overlay-post-content">
                                            <div class="post-content">
                                                <h3 class="post-title">
                                                    <a href="https://www.hotbit.pro/">www.hotbit.pro</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- row end-->
                </div>
                <!-- container end-->
            </section>
        </div>
    </section>
@endsection
@section('script')
<script>
    $(document).ready(function() {

        $(".btn-filter-topic").on('click', function() {
            $(this).toggleClass('active');
        })

        $(".btn-filter-sentiment").on('click', function() {
            if($(this).hasClass('active')) {
                $(".btn-filter-sentiment").removeClass('active');
            } else {
                $(".btn-filter-sentiment").removeClass('active');
                $(this).toggleClass('active');
            }
        })

        $(".btn-filter-date").on('click', function() {
            if($(this).hasClass('active')) {
                $(".btn-filter-date").removeClass('active');
            } else {
                $(".btn-filter-date").removeClass('active');
                $(this).toggleClass('active');
            }
        })

        var displayNewsData = function(selector, data) {
            var days = ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"];
            var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

            for(var i = 0; i < data.length; i++) {
                var date = new Date(data[i]["date"]);
                date = days[date.getDay()] + ', ' + date.getDate() + ' ' + months[date.getMonth()] + ' ' + date.getFullYear();

                $(selector).append(
                    '<div class="row mb-10">\
                        <div class="col-md-4">\
                            <div class="ts-post-thumb">\
                                <a href="' + data[i]["news_url"] + '" target="blank">\
                                    <img class="img-fluid" src="' + data[i]["image_url"] + '" alt="">\
                                </a>\
                            </div>\
                        </div>\
                        <div class="col-md-8">\
                            <div class="post-content">\
                                <h3 class="post-title md">\
                                    <a href="' + data[i]["news_url"] + '" target="blank">' + data[i]["title"] + '</a>\
                                </h3>\
                                <ul class="post-meta-info">\
                                    <li>\
                                        <i class="fa fa-clock-o"></i>\
                                        ' + date + '\
                                    </li>\
                                </ul>\
                                <p>' + data[i]["text"] + '</p>\
                            </div>\
                        </div>\
                    </div>'
                )
            }
        }

        var loadGeneralNews = function() {
            $.ajax({
                method: "POST",
                url: "{{ route('get_news') }}",
                data: {
                    _token: "{{ csrf_token() }}",
                    url: 'https://cryptonews-api.com/api/v1/category?section=general',
                }
            })
            .done(function( msg ) {
                console.log(msg);
                return;

                var data = JSON.parse(msg)
                if(data["errors"] === undefined) displayNewsData('#gen_post_list', data["data"])
            });
        }

        var loadTicketNews = function() {
            $.ajax({
                method: "POST",
                url: "{{ route('get_news') }}",
                data: {
                    _token: "{{ csrf_token() }}",
                    url: 'https://cryptonews-api.com/api/v1?tickers=BTC,ETH,XRP',
                }
            })
            .done(function( msg ) {
                console.log(msg);
                return;

                var data = JSON.parse(msg)
                if(data["errors"] === undefined) displayNewsData('#tik_post_list', data["data"])
            });
        }

        loadGeneralNews();
        loadTicketNews();
    });
</script>
@endsection
