@extends('layouts.default')
@section('title')
    Home
@endsection
@section('content')
    <section class="banner--wrapper-area crypto-patern">
        <div class="banner home-banner1">
            <div class="bit-coin-shapes"> <img class="sp1 cmn-shapes spin" src="img/banner/banner-shape/bit-sshapes1.png"
                    alt=""> <img class="sp2 cmn-shapes rotate3d" src="img/banner/banner-shape/bit-sshapes2.png" alt=""> <img
                    class="sp3 cmn-shapes spin" src="img/banner/banner-shape/bit-sshapes3.png" alt=""> <img
                    class="sp4 cmn-shapes rotate2d" src="img/banner/banner-shape/bit-sshapes4.png" alt=""> <img
                    class="sp5 cmn-shapes rotate3d" src="img/banner/banner-shape/bit-sshapes5.png" alt=""> <img
                    class="sp6 cmn-shapes spin" src="img/banner/banner-shape/bit-sshapes6.png" alt=""> <img
                    class="sp7 cmn-shapes rotate3d" src="img/banner/banner-shape/bit-sshapes7.png" alt=""> <img
                    class="sp8 cmn-shapes rotate3d" src="img/banner/banner-shape/bit-sshapes8.png" alt=""> <img
                    class="sp9 cmn-shapes rotate3d" src="img/banner/banner-shape/bit-sshapes3.png" alt=""> <img
                    class="sp10 cmn-shapes rotate3d" src="img/banner/banner-shape/bit-sshapes4.png" alt=""> <img
                    class="sp11 cmn-shapes rotate3d" src="img/banner/banner-shape/bit-sshapes5.png" alt=""> </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-xl-5 col-md-6">
                        <div class="banner--inner-text">
                            <h1 data-animate="fadeInUp" data-delay=".2"><span>COME TO THE FUTURE</span>
                                WITH YOUR TRADING SKILLS
                            </h1>
                            <p data-animate="fadeInUp" data-delay=".4"> AS WE AWAIT YOU WITH
                                PROPRIETARY FUNDS
                                IN THE MARKET PLACE ...</p>
                            {{-- <a href="{{route('login')}}" class="btn waves-effect mr-2" data-animate="fadeInUp" data-delay=".6">SIGN IN</a> --}}
                            <a href="{{route('register')}}" class="btn waves-effect" data-animate="fadeInUp" data-delay=".6">GET STARTED</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6 offset-xl-1 col-md-6" style="padding-top: 100px">
                        <div class="overlay-bubble" data-animate="fadeInUp" data-delay=".4">
                            <div class="overlay-bubble-1"></div><img src="img/dot.png" alt="" class="dot-dot">
                        </div>
                        <div class="bannar-image-inner" data-animate="fadeInUp" data-delay=".4"> <img src="img/monitors.png"
                                alt="banner image">
                            {{-- <img src="img/bigbit-img.png" alt=""
                            class="move-1"> <img src="img/smlbit-img.png" alt="" class="move-2"> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pt-20 crypto-patern">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    {{-- <div class="offset-xl-2 col-xl-10"> --}}
                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container" style="overflow: hidden">
                        <div class="tradingview-widget-container__widget"></div>
                        {{-- <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/"
                                rel="noopener" target="_blank"><span class="blue-text">Markets</span></a> by
                            TradingView</div> --}}
                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
                            {
                                "symbols": [{
                                        "proName": "FOREXCOM:SPXUSD",
                                        "title": "S&P 500"
                                    },
                                    {
                                        "proName": "FOREXCOM:NSXUSD",
                                        "title": "US 100"
                                    },
                                    {
                                        "proName": "FX_IDC:EURUSD",
                                        "title": "EUR/USD"
                                    },
                                    {
                                        "proName": "BITSTAMP:BTCUSD",
                                        "title": "Bitcoin"
                                    },
                                    {
                                        "proName": "BITSTAMP:ETHUSD",
                                        "title": "Ethereum"
                                    }
                                ],
                                "showSymbolLogo": false,
                                "colorTheme": "dark",
                                "isTransparent": false,
                                "displayMode": "adaptive",
                                "locale": "en"
                            }
                        </script>
                    </div>
                    <!-- TradingView Widget END -->
                    {{-- <div class="price--update-wrap">
                    <div class="update-heading">
                        <h2 class="text-white">Price Update</h2>
                    </div>
                    <div class="price--update-carousel">
                        <div class="owl-carousel price-carousel">
                            <div class="item">
                                <div class="single--update-wrap">
                                    <h5>BTC</h5>
                                    <p><span class='down-icon'><i class="fa fa-caret-down"
                                                aria-hidden="true"></i></span>2.61</p>
                                    <p>$ 6,825.77</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="single--update-wrap">
                                    <h5>ETH</h5>
                                    <p><span class='up-icon'><i class="fa fa-caret-up"
                                                aria-hidden="true"></i></span>2.61</p>
                                    <p>$ 6,825.77</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="single--update-wrap">
                                    <h5>XMR</h5>
                                    <p><span class='down-icon'><i class="fa fa-caret-down"
                                                aria-hidden="true"></i></span>2.61</p>
                                    <p>$ 6,825.77</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="single--update-wrap">
                                    <h5>ZEC</h5>
                                    <p><span class='up-icon'><i class="fa fa-caret-up"
                                                aria-hidden="true"></i></span>2.61</p>
                                    <p>$ 6,825.77</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="single--update-wrap">
                                    <h5>ETH</h5>
                                    <p><span class='up-icon'><i class="fa fa-caret-up"
                                                aria-hidden="true"></i></span>2.61</p>
                                    <p>$ 6,825.77</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="single--update-wrap">
                                    <h5>BTC</h5>
                                    <p><span class='down-icon'><i class="fa fa-caret-down"
                                                aria-hidden="true"></i></span>2.61</p>
                                    <p>$ 6,825.77</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="single--update-wrap">
                                    <h5>USD</h5>
                                    <p><span class='up-icon'><i class="fa fa-caret-up"
                                                aria-hidden="true"></i></span>2.61</p>
                                    <p>$ 6,825.77</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="single--update-wrap">
                                    <h5>BTC</h5>
                                    <p><span class='up-icon'><i class="fa fa-caret-up"
                                                aria-hidden="true"></i></span>2.61</p>
                                    <p>$ 6,825.77</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="single--update-wrap">
                                    <h5>URO</h5>
                                    <p><span class='up-icon'><i class="fa fa-caret-up"
                                                aria-hidden="true"></i></span>2.61</p>
                                    <p>$ 6,825.77</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="single--update-wrap">
                                    <h5>NTH</h5>
                                    <p><span class='up-icon'><i class="fa fa-caret-up"
                                                aria-hidden="true"></i></span>2.61</p>
                                    <p>$ 6,825.77</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="single--update-wrap">
                                    <h5>SIA</h5>
                                    <p><span class='up-icon'><i class="fa fa-caret-up"
                                                aria-hidden="true"></i></span>2.61</p>
                                    <p>$ 6,825.77</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="single--update-wrap">
                                    <h5>MAS</h5>
                                    <p><span class='up-icon'><i class="fa fa-caret-up"
                                                aria-hidden="true"></i></span>2.61</p>
                                    <p>$ 6,825.77</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                </div>
            </div>
        </div>
    </section>
    <section class="pt-140 pb-80 crypto-patern">
        <div class="container">
            {{-- <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-8">
                    <div class="section-title text-center mb-30"> <img src="img/icons/balb.svg" alt=""
                            class="svg">
                        <h2>PROGRAM BENEFITS</h2>
                        <h2>(Earn as a
                            Professional
                            Trader)</h2>
                    </div>
                </div>
            </div> --}}
            <div class="service-wrap">
                <div class="row">
                    <div class="col-md-6">
                        <div class="single--service-inner">
                            {{-- <div class="single--service-icon"> <img src="img/icons/service-icon1.png" alt="">
                                <div class="underline-wrap">
                                    <div class="unerline"> <span></span> <span></span> <span></span> </div>
                                </div>
                            </div> --}}
                            <div class="single-service-text">
                                <h3  class="py-1 text-white">SYNTHETIC ( DERIV ) DEMO
                                    TRADING COMPETITION</h3>
                                <ul>
                                    <li>Enter the competition with $10 fee</li>
                                    <li>Win $250 - $2500 trading account</li>
                                    <li>Ten (10) lucky winners will emerge monthly
                                    </li>
                                </ul>
                                <div class="px-2 bg-primary text-light">
                                    <h5 class="py-1 text-white">SYNTHETIC FUNDED ACCOUNTS</h5>
                                </div>
                                <h4 class="text-white mt-4">$25 - $250 </h4>
                                <h4 class="text-white"> $50 - $500</h4>
                                <h4 class="text-white"> $100 - $1000</h4>
                                <h4 class="text-white"> $250 - $2500</h4>
                                <h4 class="text-white"> $500 - $5000</h4>
                                <h4 class="text-white"> $1,000 - $10,000</h4>
                                <h4 class="text-white"> $2,500 - $25,000</h4>
                                <h4 class="text-white"> $5,000 - $50,000</h4>
                                {{-- <p>Learn about support & resistance,
                                    risk management and more.
                                    Graduate to the semi-professional
                                    status (COMING SOON)
                                </p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="single--service-inner">
                            {{-- <div class="single--service-icon"> <img src="img/icons/service-icon2.png" alt="">
                                <div class="underline-wrap">
                                    <div class="unerline"> <span></span> <span></span> <span></span> </div>
                                </div>
                            </div> --}}
                            <div class="single-service-text">
                                <h3 class="text-white">FOREX DEMO
                                    TRADING COMPETITION
                                </h3>
                                <ul>
                                    <li>Enter the competition with $10 fee</li>
                                    <li>Win $10000 - $100000 t trading account</li>
                                    <li>Ten (10) lucky winners will emerge monthly
                                    </li>
                                </ul>
                                <div class="px-2 bg-primary text-light">
                                    <h5 class="py-1 text-white">FOREX FUNDED ACCOUNTS</h5>
                                </div>
                                <h4 class="text-white mt-4">$75 - $5000 </h4>
                                <h4 class="text-white"> $99 - $10,000</h4>
                                <h4 class="text-white"> $200 - $25,000</h4>
                                <h4 class="text-white"> $350 - $50,000</h4>
                                <h4 class="text-white"> $500 - $100,000</h4>
                                <h4 class="text-white"> $950 - $200,000</h4>
                                <h4 class="text-white"> $1,100 - $250,000</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pb-80 crypto-patern">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-8">
                    <div class="section-title text-center mb-30"> <img src="img/icons/balb.svg" alt=""
                            class="svg">
                        <h2>PROGRAM BENEFITS</h2>
                        <h2>(Earn as a
                            Professional
                            Trader)</h2>
                    </div>
                </div>
            </div>
            <div class="service-wrap">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single--service-inner">
                            <div class="single--service-icon"> <img src="img/icons/service-icon1.png" alt="">
                                <div class="underline-wrap">
                                    <div class="unerline"> <span></span> <span></span> <span></span> </div>
                                </div>
                            </div>
                            <div class="single-service-text">
                                <h4>Forex Academy</h4>
                                <p>Learn about support & resistance,
                                    risk management and more.
                                    Graduate to the semi-professional
                                    status (COMING SOON)
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single--service-inner">
                            <div class="single--service-icon"> <img src="img/icons/service-icon2.png" alt="">
                                <div class="underline-wrap">
                                    <div class="unerline"> <span></span> <span></span> <span></span> </div>
                                </div>
                            </div>
                            <div class="single-service-text">
                                <h4>Pay Once</h4>
                                <p>Our programs are available in a
                                    one.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single--service-inner">
                            <div class="single--service-icon"> <img src="img/icons/service-icon3.png" alt="">
                                <div class="underline-wrap">
                                    <div class="unerline"> <span></span> <span></span> <span></span> </div>
                                </div>
                            </div>
                            <div class="single-service-text">
                                <h4>We are always by your side</h4>
                                <p>24/5 support is available to all our
                                    community, day or night we are
                                    there for you. Our interest co-align
                                    with your success. We are always
                                    there to assist when needed.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single--service-inner">
                            <div class="single--service-icon"> <img src="img/icons/service-icon4.png" alt="">
                                <div class="underline-wrap">
                                    <div class="unerline"> <span></span> <span></span> <span></span> </div>
                                </div>
                            </div>
                            <div class="single-service-text">
                                <h4>We are a Community</h4>
                                <p>Talk actively with us, our community and our fans on discord. We provide talks
                                    and information in real time to actively promote good behaviour in trading. join
                                    our discord and see what all the fuss is about!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single--service-inner">
                            <div class="single--service-icon"> <img src="img/icons/service-icon5.png" alt="">
                                <div class="underline-wrap">
                                    <div class="unerline"> <span></span> <span></span> <span></span> </div>
                                </div>
                            </div>
                            <div class="single-service-text">
                                <h4>Insurence Protection</h4>
                                <p>There are many variations of Packages that we have</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single--service-inner">
                            <div class="single--service-icon"> <img src="img/icons/service-icon6.png" alt="">
                                <div class="underline-wrap">
                                    <div class="unerline"> <span></span> <span></span> <span></span> </div>
                                </div>
                            </div>
                            <div class="single-service-text">
                                <h4>Cost & Tax Effecient</h4>
                                <p>There are many variations of Cost & Tax Effecient</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pt-140 crypto-patern home1-section-bg1">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-8">
                    <div class="section-title text-center mb-30"> <img src="img/icons/balb.svg" alt=""
                            class="svg">
                        <h2>Join our ever-growing family & Earn</h2>
                    </div>
                </div>
            </div>
            <div style="display:flex; justify-content:space-between; align-items:center" class="hide-sm">
                <img src="{{ asset('img/bull.png') }}" alt="" style="width: 120px">
                <div style="background: #fff; width: 200px; height: 2px"></div>
                <img src="{{ asset('img/bull.png') }}" alt="" style="width: 120px">
                <div style="background: #fff; width: 200px; height: 2px"></div>
                <img src="{{ asset('img/bull.png') }}" alt="" style="width: 120px">
            </div>
            {{-- <div class="d-flex flex-md-row-reverse justify-content-between">
                <div class="4">
                    <h2 style="color: #fff">40,000+</h2>
                    <h4 style="color: #f8f8f8">Happy Traders</h4>
                </div>
                <div class="4">
                    <h2 style="color: #fff">100,000,000,000+</h2>
                    <h4 style="color: #f8f8f8">Trading Volume Monthly</h4>
                </div>
                <div class="4">
                    <h2 style="color: #fff">120+</h2>
                    <h4 style="color: #f8f8f8">Different Countries</h4>
                </div>
            </div> --}}
            <div style="display:flex; justify-content:space-between; align-items:center; margin: 50px; 0px;"
                class="hide-sm">
                <div>
                    <h2 style="color: #fff">40,000+</h2>
                    <h4 style="color: #f8f8f8">Happy Traders</h4>
                </div>
                <div>
                    <h2 style="color: #fff">100,000,000,000+</h2>
                    <h4 style="color: #f8f8f8">Trading Volume Monthly</h4>
                </div>
                <div>
                    <h2 style="color: #fff">120+</h2>
                    <h4 style="color: #f8f8f8">Different Countries</h4>
                </div>
            </div>
            <div class="row mt-20">
                <div class="col-md-12 text-center">
                    <img src="{{ asset('img/tsl_logo.png') }}" alt="TSF logo" style="width: 140px">

                    <a href="{{ route('login') }}" class="btn btn-danger ml-4 btn-no-border">
                        <span class="d-block">Start Now</span>
                    </a>
                </div>
                {{-- <div class="col-md-6">
                    <img src="{{asset('img/tsl_logo.png')}}" alt="TSF logo" style="width: 140px">

                </div> --}}
            </div>
        </div>
    </section>
    {{-- <section class="pt-140 pb-110 crypto-patern home1-section-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-8">
                    <div class="section-title text-center mb-30"> <img src="img/icons/flag.svg" alt=""
                            class="svg">
                        <h2>Earn as a Professional Trader</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="step-timeline">
                        <div class="step-timeline-item timeline-active">
                            <div class="timeline-element"> <span class="poppins">01</span>
                                <h4>Create Your Wallet</h4>
                            </div>
                            <div class="timeline-content">
                                <div class="timeline-icon">
                                    <div class="timeline-icon-img"> <img src="img/icons/timeline1.svg" alt=""
                                            class="svg"> </div>
                                    <div class="underline-wrap">
                                        <div class="unerline"> <span></span> <span></span> <span></span> </div>
                                    </div>
                                </div>
                                <p> We have multiple programs to fit your expertise Choose one of our programs and
                                    start trading</p>
                            </div>
                        </div>
                        <div class="step-timeline-item">
                            <div class="timeline-element"> <span class="poppins">02</span>
                                <h4>Make Payment</h4>
                            </div>
                            <div class="timeline-content">
                                <div class="timeline-icon">
                                    <div class="timeline-icon-img"> <img src="img/icons/timeline2.svg" alt=""
                                            class="svg"> </div>
                                    <div class="underline-wrap">
                                        <div class="unerline"> <span></span> <span></span> <span></span> </div>
                                    </div>
                                </div>
                                <p> To Join our ever growing Family </p>
                            </div>
                        </div>
                        <div class="step-timeline-item">
                            <div class="timeline-element"> <span class="poppins">03</span>
                                <h4>Start Earning</h4>
                            </div>
                            <div class="timeline-content">
                                <div class="timeline-icon">
                                    <div class="timeline-icon-img"> <img src="img/icons/timeline3.svg" alt=""
                                            class="svg"> </div>
                                    <div class="underline-wrap">
                                        <div class="unerline"> <span></span> <span></span> <span></span> </div>
                                    </div>
                                </div>
                                <p> Once your Payment is made, START EARNING! </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <section class="pt-140 pb-80 crypto-patern">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div id="update-chart" style="height: 500px"></div>
                </div>
                <div class="col-lg-4">
                    <div class="trading--update-text">
                        <h2>Join our ever-growing family & Earn</h2>
                        <p>we have multiple programs to fit your expertise. Choose one of our programs and start
                            trading, earn bonuses and profit-splits.</p><a href="#" class="btn waves-effect">Start
                            Now!</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <section class="pt-140 pb-140 crypto-patern">
        <div class="app--full-width">
            <div class="app-overlay-bg d-lg-block d-none" data-bg-img="img/mobile-bg.png"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-lg-10">
                                <div class="app-heading">
                                    <h2>Download TSF App Now</h2>
                                    <p>It is a long established fact that a reader will be distracted by the read
                                        able content of a page when looking at its layout.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="single-app-info">
                                    <div class="app-icon"> <img src="img/icons/service-icon1.png" alt=""> </div>
                                    <div class="app-text">
                                        <h4>Forex Academy</h4>
                                        <p>Learn about support & resistance,
                                            risk management and more.
                                            Graduate to the semi-professional
                                            status (COMING SOON)
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="single-app-info">
                                    <div class="app-icon"> <img src="img/icons/service-icon2.png" alt=""> </div>
                                    <div class="app-text">
                                        <h4>Live Transaction</h4>
                                        <p>Check out our live transaction </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="single-app-info">
                                    <div class="app-icon"> <img src="img/icons/service-icon3.png" alt=""> </div>
                                    <div class="app-text">
                                        <h4>Pay Once</h4>
                                        <p>Our programs are available in a
                                            one</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="single-app-info">
                                    <div class="app-icon"> <img src="img/icons/service-icon4.png" alt=""> </div>
                                    <div class="app-text">
                                        <h4>We are a Community</h4>
                                        <p>Talk actively with us, our community and our fans on discord. We provide
                                            talks and information in real time to actively promote good behaviour in
                                            trading. join our discord and see what all the fuss is about!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="app-info-btn"> <a href="#" class="dosis waves-effect btn"><img
                                            src="img/icons/play.png" alt="" class="svg"><span
                                            class="text"><span>Available On</span> Google Play Store</span></a>
                                    <a href="#" class="dosis waves-effect btn"><img src="img/icons/apple.png" alt=""
                                            class="svg"><span class="text"><span>Available On</span>
                                            apple
                                            Play Store</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="mobile-app">
                            <div class="mobile-image"> <img src="img/mobile.png" alt=""> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
@endsection
