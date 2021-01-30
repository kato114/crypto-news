@extends('layout.front')
@section('content')
    <!-- ========== Start Banner Area ============= -->
    <section id="particles-js" class="banner_area">
        <div class="swiper_content">
            <div class="custom_container">
                <div class="row">
                    <div class="col-xl-6 col-sm-12 col-md-7 order-md-first">
                        <div class="slider_left">
                            <h2>Digital <span>Currency</span></h2>
                            <h1>Encryption <span>Techniques</span></h1>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.dummy text of the printing and typesetting industry. Lorem Ipsum.</p>
                            <div class="slider_btn">
                                <a href="#" class="btn_one">Join With US</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-sm-0 col-md-5 order-first">
                        <div class="slider_right">
                            <img src="{{ asset('assets/frontend/images/slider-right.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== End Banner Area ============= -->

    <!-- ========== End Banner Bottom Area ============= -->
    <section class="banner_bottom_area" style="margin-top: 0px;">
        <div class="container_fluid">
            <div class="marquee">
                <div class="moving-item overlay">
                    <h2>LTCU (LTCU)</h2>
                    <h3>$9,646.93 <span>6.01%</span></h3>
                </div>
                <div class="moving-item">
                    <h2>Bitcoin (BTC)</h2>
                    <h3>$6,647.87 <span>7.01%</span></h3>
                </div>
                <div class="moving-item overlay">
                    <h2>Monero (XMR)</h2>
                    <h3>$7,648.74 <span>8.01%</span></h3>
                </div>
                <div class="moving-item">
                    <h2>Zcash (ZEC)</h2>
                    <h3>$6,649.63 <span>9.01%</span></h3>
                </div>
                <div class="moving-item overlay">
                    <h2>Monero (XMR)</h2>
                    <h3>$5,645.82 <span>2.01%</span></h3>
                </div>
                <div class="moving-item">
                    <h2>SAN (SAN)</h2>
                    <h3>$4,644.55 <span>5.01%</span></h3>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </section>
    <!-- ========== End Banner Bottom Area ============= -->

    <!-- ========== End ICO Market Area ============= -->
    <section class="ico_market_area padding_140" id="what_ico">
        <div class="custom_container">
            <div class="row">
                <div class="offset-xl-1 col-xl-5 col-sm-12 col-md-6">
                    <div class="ico_market_left">
                        <h1>What is ICO Crypto <span>Market</span> <br>Capitalizations!</h1>
                        <p>Start learning about Bitcoin with interactive tutorials. It’s fun, easy, and takes only a few minutes!consectetur ligula erat, sed consectetur mi faucibus a. Donec sit amet consectetur ligula. Proin turpis est, olor sit amet, consectetu
                        .sodales.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur consectetur ligula erat, sed consectetur mi faucibus.
                            consectetur adipiscing elit. Curabitur consectetur ligula erat, sed consectetur mi faucibus.</p>
                        <a href="#" class="btn_one">start now</a>
                    </div>
                </div>
                <div class="col-xl-5 col-sm-12 col-md-6">
                    <div class="ico_market_right">
                        <img src="{{ asset('assets/frontend/images/feature-right.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== End ICO Market Area ============= -->

    <!-- ========== End ICO Feature Area ============= -->
    <section class="ico_feature_area padding_140">
        <div class="custom_container">
            <div class="section_title">
                <h1>What is <span>Mining Pool</span></h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur consectetur ligula erat, sed consectetur mi faucibus a. Donec sit amet consectetur.</p>
            </div>
            <div class="row">
                <div class="col-xl-6 col-sm-12 col-md-6">
                    <div class="ico_feature_left">
                        <img src="{{ asset('assets/frontend/images/feature-left.png') }}" alt="">
                    </div>
                </div>
                <div class="col-xl-6 col-sm-12 col-md-6">
                    <div class="ico_feature_right">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed deiusmotempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                        <ul class="ico_feature_list">
                            <li>
                                <span class="flaticon-database"></span>
                                <b>Organize prioritize</b> – sit amet consectetur
                            </li>
                            <li>
                                <span class="flaticon-database-1"></span>
                                <b>How can we help</b> – established fact that a reader
                            </li>
                            <li>
                                <span class="flaticon-database-2"></span>
                                <b>Customer has an issue</b> – simply dummy text printing
                            </li>
                            <li>
                                <span class="flaticon-shape"></span>
                                <b>Help desk software</b> – there are many
                            </li>
                            <li>
                                <span class="flaticon-server"></span>
                                <b>Transform Communication</b> – perspiciatis unde
                            </li>
                        </ul>
                        <div class="ico_feature_btn">
                            <a href="#" class="btn_one">Mining Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== End ICO Market Area ============= -->

    <!-- ========== Start Currency Slider Area ============= -->
    <section class="currency_slider_area padding_140">
        <div class="owl-carousel price-two-active">
            <div class="price-two-item">
                <div class="item-img">
                    <img src="{{ asset('assets/frontend/images/coin-one.png') }}" alt="">
                    <div class="title h3">Menro</div>
                    <div class="rate h4">494.08</div>
                </div>
                <div class="price-two-des">
                    <h3>80%</h3>
                    <div class="date">
                        <p>6m month week 24h</p>
                    </div>
                    <div class="buy-btn"><a href="#" class="btn_one">Buy Menro</a></div>
                </div>
            </div>
            <div class="price-two-item">
                <div class="item-img">
                    <img src="{{ asset('assets/frontend/images/coin-two.png') }}" alt="">
                    <div class="title h3">zCash</div>
                    <div class="rate h4">494.08</div>
                </div>
                <div class="price-two-des">
                    <h3>80%</h3>
                    <div class="date">
                        <p>6m month week 24h</p>
                    </div>
                    <div class="buy-btn"><a href="#" class="btn_one">Buy zCash</a></div>
                </div>
            </div>
            <div class="price-two-item">
                <div class="item-img">
                    <img src="{{ asset('assets/frontend/images/coin-three.png') }}" alt="">
                    <div class="title h3">Santiment</div>
                    <div class="rate h4">494.08</div>
                </div>
                <div class="price-two-des">
                    <h3>80%</h3>
                    <div class="date">
                        <p>6m month week 24h</p>
                    </div>
                    <div class="buy-btn"><a href="#" class="btn_one">Buy Santiment</a></div>
                </div>
            </div>
            <div class="price-two-item">
                <div class="item-img">
                    <img src="{{ asset('assets/frontend/images/coin-four.png') }}" alt="">
                    <div class="title h3">Bit Coin</div>
                    <div class="rate h4">494.08</div>
                </div>
                <div class="price-two-des">
                    <h3>80%</h3>
                    <div class="date">
                        <p>6m month week 24h</p>
                    </div>
                    <div class="buy-btn"><a href="#" class="btn_one">Buy Bit Coin</a></div>
                </div>
            </div>
            <div class="price-two-item">
                <div class="item-img">
                    <img src="{{ asset('assets/frontend/images/coin-five.png') }}" alt="">
                    <div class="title h3">Bit Coin</div>
                    <div class="rate h4">494.08</div>
                </div>
                <div class="price-two-des">
                    <h3>80%</h3>
                    <div class="date">
                        <p>6m month week 24h</p>
                    </div>
                    <div class="buy-btn"><a href="#" class="btn_one">Buy Bit Coin</a></div>
                </div>
            </div>
            <div class="price-two-item">
                <div class="item-img">
                    <img src="{{ asset('assets/frontend/images/coin-five.png') }}" alt="">
                    <div class="title h3">Bit Coin</div>
                    <div class="rate h4">494.08</div>
                </div>
                <div class="price-two-des">
                    <h3>80%</h3>
                    <div class="date">
                        <p>6m month week 24h</p>
                    </div>
                    <div class="buy-btn"><a href="#" class="btn_one">Buy Bit Coin</a></div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== Start Currency Slider Area ============= -->

    <!-- ========== End ICO Token Area ============= -->
    <section class="ico_token padding_top_140" id="token_sale">
        <div class="custom_container">
            <div class="section_title">
                <h1>Exchange <span>token</span></h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur consectetur
                ligula erat, sed consectetur mi faucibus a. Donec sit amet consectetur.</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="ico_cont_down">
                            <a href="#" class="btn_two">Exchange Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== End ICO Token Area ============= -->

    <!-- ========== Start ICO Service Area ============= -->
    <section class="ico_service_area padding_140">
        <div class="custom_container">
            <div class="row">
                <div class="col-xl-3 col-sm-6">
                    <div class="ico_single_ser">
                        <div class="ico_single_ser_img">
                            <img src="{{ asset('assets/frontend/images/ser-one.png') }}" alt="">
                        </div>
                        <h3>Exclusive Tokens</h3>
                        <p>Lorem ipsum dolor sit am consectetur adipiscing elit. Curabitur consectetur ligula erat, sed consectetu.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="ico_single_ser">
                        <div class="ico_single_ser_img">
                            <img src="{{ asset('assets/frontend/images/ser-two.png') }}" alt="">
                        </div>
                        <h3>ICO Tokens exchange</h3>
                        <p>Lorem ipsum dolor sit am consectetur adipiscing elit. Curabitur consectetur ligula erat, sed consectetu.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="ico_single_ser">
                        <div class="ico_single_ser_img">
                            <img src="{{ asset('assets/frontend/images/ser-three.png') }}" alt="">
                        </div>
                        <h3>Digital Currency</h3>
                        <p>Lorem ipsum dolor sit am consectetur adipiscing elit. Curabitur consectetur ligula erat, sed consectetu.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="ico_single_ser">
                        <div class="ico_single_ser_img">
                            <img src="{{ asset('assets/frontend/images/ser-four.png') }}" alt="">
                        </div>
                        <h3>Exclusive Tokens</h3>
                        <p>Lorem ipsum dolor sit am consectetur adipiscing elit. Curabitur consectetur ligula erat, sed consectetu.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== End ICO Service Area ============= -->

    <!-- ========== Start ICO distribution token Area ============= -->
    <section class="ico_dis_token_area padding_140">
        <div class="container">
            <div class="section_title">
                <h1>Distribution of <span>tokens</span></h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur consectetur
                ligula erat, sed consectetur mi faucibus a. Donec sit amet consectetur.</p>
            </div>
            <div class="ico_dis_token_content">
                <div class="ico_dis_token_top">
                    <ul>
                        <li>
                            gift code
                            <span class="flaticon-money-bag-with-dollar-symbol"></span>
                        </li>
                        <li>
                            Ethereum
                            <span class="flaticon-king-crown"></span>
                        </li>
                        <li>
                            Bitcoin
                            <span class="flaticon-bitcoin"></span>
                        </li>
                        <li>
                            Partners
                            <span class="flaticon-bitcoin-network-symbol"></span>
                        </li>
                    </ul>
                </div>
                <img src="{{ asset('assets/frontend/images/distribute-token.png') }}" alt="">
                <div class="ico_dis_token_bottom">
                    <ul>
                        <li>
                            <span class="flaticon-cogwheel"></span>
                            Litecoin
                        </li>
                        <li>
                            <span class="flaticon-king-crown"></span>
                            Partners
                        </li>
                        <li>
                            <span class="flaticon-cogwheel"></span>
                            Monero
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== End ICO distribution token Area ============= -->

    <!-- ========== Start ICO Team Area ============= -->
    <section class="ico_team_area padding_140">
        <div class="custom_container">
            <div class="section_title">
                <h1>Latest <span>News</span></h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur consectetur
                ligula erat, sed consectetur mi faucibus a. Donec sit amet consectetur.</p>
            </div>
            <div class="row">
                <div class="offset-xl-1 col-xl-10">
                    <div class="row">
                        <div class="col-xl-3">
                            <figure class="ico_single_team">
                                <div class="ico_single_img">
                                    <img src="{{ asset('assets/upload/news/1.jpg') }}" alt="">
                                </div>
                                <figcaption>
                                    <p>13 Feb 2021, Post By: Kb Arif</p>
                                    <a href="#">
                                        <h3>
                                            Bitcoin is most Popular from other cryptocurrency.
                                            <span>There are many variations passages of Lorem Ipsum available, the majority have suffered alteration in some form.</span>
                                        </h3>
                                    </a>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-xl-3">
                            <figure class="ico_single_team">
                                <div class="ico_single_img">
                                    <img src="{{ asset('assets/upload/news/2.jpg') }}" alt="">
                                </div>
                                <figcaption>
                                    <p>13 Feb 2021, Post By: Kb Arif</p>
                                    <a href="#">
                                        <h3>
                                            Bitcoin is most Popular from other cryptocurrency.
                                            <span>There are many variations passages of Lorem Ipsum available, the majority have suffered alteration in some form.</span>
                                        </h3>
                                    </a>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-xl-3">
                            <figure class="ico_single_team">
                                <div class="ico_single_img">
                                    <img src="{{ asset('assets/upload/news/3.jpg') }}" alt="">
                                </div>
                                <figcaption>
                                    <p>13 Feb 2021, Post By: Kb Arif</p>
                                    <a href="#">
                                        <h3>
                                            Bitcoin is most Popular from other cryptocurrency.
                                            <span>There are many variations passages of Lorem Ipsum available, the majority have suffered alteration in some form.</span>
                                        </h3>
                                    </a>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-xl-3">
                            <figure class="ico_single_team">
                                <div class="ico_single_img">
                                    <img src="{{ asset('assets/upload/news/4.jpg') }}" alt="">
                                </div>
                                <figcaption>
                                    <p>13 Feb 2021, Post By: Kb Arif</p>
                                    <a href="#">
                                        <h3>
                                            Bitcoin is most Popular from other cryptocurrency.
                                            <span>There are many variations passages of Lorem Ipsum available, the majority have suffered alteration in some form.</span>
                                        </h3>
                                    </a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== End ICO Team Area ============= -->
@endsection
