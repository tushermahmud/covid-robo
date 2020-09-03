<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta property="og:title" content="Covid19">
    <meta property="og:image" content="{{asset('frontend/assets/')}}">
    <meta property="og:description" content="Covid-19">
    <meta name="full-screen" content="yes">
    <meta name="theme-color" content="#020018">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>Covid19 | Nobel Corona Virus</title>
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/fonts/font/flaticon.css')}}">
    <!---------favicon--------------->
    <link rel="icon" type="image/png" href="{{asset('frontend/assets/image/favicon.png')}}" sizes="16x16">
    <!---------favicon--------------->
</head>
<body class="home_page_two">
<div class="page_wapper">
    <!--Start Preloader-->
    <div class="preloader">
        <div class="preloader_box">
            <div class="loader">
                <div class="circle item0"></div>
                <div class="circle item1"></div>
                <div class="circle item2"></div>
            </div>
        </div>
    </div>
    <!--End Preloader -->
    <!--Header-->
    <header class="header_v2">
        <section class="header_top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-3 col-md-3">
                                <div class="heading">
                                    <h2>Today Updates</h2>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9">
                                <div class="news_inner">
                                    <div class="owl-carousel owl-theme single_items">
                                        <div class="mid-text">
                                            <p><a href="#">Stabilitech's COVID-19 Vaccine Intended to Be Delivered in a Disruptive Thermally Stable Oral Capsule</a></p>
                                        </div>
                                        <div class="mid-text">
                                            <p><a href="#"> Controlled Release Drug Delivery Market Size Worth $69.8 Billion by 2027: Grand View Research, Inc.</a></p>
                                        </div>
                                        <div class="mid-text">
                                            <p><a href="#">  Drug Delivery Market Size Worth $69.8 Billion by 2027: Grand View Research, Inc.
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="text_right">
                            <div class="social_media_icon">
                                <ul class="clearfix">
                                    <li>
                                        <a href="#" class="has-tooltip">
                                            <span class="fa fa-facebook"></span>
                                            <div class="c-tooltip">
                                                <div class="tooltip-inner">Facebook</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="has-tooltip">
                                            <span class="fa fa-twitter"></span>
                                            <div class="c-tooltip">
                                                <div class="tooltip-inner">Twitter</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="has-tooltip">
                                            <span class="fa fa-linkedin"></span>
                                            <div class="c-tooltip">
                                                <div class="tooltip-inner">Linkedin</div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="navbar_outer">
            <div class="navbar navbar-expand-lg  bsnav bsnav-sticky bsnav-sticky-slide">
                <div class="container">
                    <a class="navbar-brand" href="{{route('home')}}">
                        <img src="{{asset('frontend/assets/image/logo.png')}}" class="img-fluid log_normal" alt="img">
                    </a>
                    <button class="navbar-toggler toggler-spring"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse scroll-nav">
                        <ul class="navbar-nav navbar-mobile navbar_left  ml-auto" id="nav">
                            <li class="nav-item nav_item activ">
                                <a class="nav-link link_hd" href="{{url('/')}}">Home</a>
                            </li>
                            <li class="nav-item nav_item"><a class="nav-link link_hd" href="{{route('about')}}">About </a></li>
                            <li class="nav-item nav_item"><a class="nav-link link_hd" href="{{route('affactedCountries')}}">Statistics</a></li>
                            <li class="nav-item nav_item">
                                <a class="nav-link link_hd" href="{{route('doctor')}}">  Doctor  </a>
                            </li>
                            <li class="nav-item nav_item">
                                <a class="nav-link link_hd" href="{{route('plasma')}}">  Plasma  </a>
                            </li>
                            <li class="nav-item nav_item">
                                <a class="nav-link link_hd" href="{{route('entertainment')}}">  Entertainment  </a>
                            </li>
                            <li class="nav-item nav_item dropdown">
                                <a class="nav-link link_hd" href="#">  <i class="fa fa-user"></i>  </a>
                                <ul class="navbar-nav submenu">
                                    @if (Route::has('login'))
                                        <div class="top-right links">
                                            @if (Auth::check())
                                                <li class="nav-item"><a class="nav-link" href="{{ url('/logout') }}">Logout</a></li>
                                                <li class="nav-item"><a class="nav-link" href="#">Profile</a></li>
                                            @else
                                                <li class="nav-item"><a class="nav-link" href="{{ url('/login') }}">Login</a></li>
                                                <li class="nav-item"><a class="nav-link" href="{{ url('/register') }}">Register</a></li>
                                            @endif
                                        </div>
                                    @endif
                                </ul>
                            </li>
                            <li class="nav-item nav_item"><a class="nav-link link_hd" href="{{route('contact')}}">Contact</a></li>
                            <li class="nav-item nav_item"><a class="nav-link link_hd" href="{{route('transaction')}}">Donations</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

    </header>
    <!--Header-->
    <!------main-content------>
    <main class="main-content">
        <section class="page_title">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 d-flex">
                        <div class="content_box">
                            <ul class="bread_crumb text-center">
                                <li class="bread_crumb-item"><a href="#">Home</a></li>
                                <li class="bread_crumb-item active"> Plasma Donation for Covid-19</li>
                            </ul>
                            <h1>Please Donate Plasma</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about type_one">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading icon_dark tp_one">
                            <h6>Available Plasma</h6>
                            <span class="flaticon-virus icon"></span>
                        </div>
                        <div class="about_content">
                            <div class="card" style="width: 100%;">
                                <div class="card-body">
                                    <h5 class="card-title">Please Fill These Form If you need plasma.</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">We charge only 200 taka for the entire service. This charge is kept reasonable for everyone</h6>
                                    {!!Form::model($plasmarecipent ?? '',[
                                        'method'=>'POST',
                                        'route' =>'plasma.recipent.store',
                                        'files'=>true
                                    ])!!}
                                    @csrf
                                    <div class="form-group {{$errors->has('plasma_recipent_name')?'has-error':''}}">
                                        <label for="plasma_recipent_name">Name</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="plasma_recipent_name">
                                        @if($errors->has('plasma_recipent_name'))
                                            <span class="help-block">{{$errors->first('plasma_recipent_name')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('plasma_recipent_email')?'has-error':''}}">
                                        <label for="plasma_recipent_email">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="plasma_recipent_email">
                                        @if($errors->has('plasma_recipent_email'))
                                            <span class="help-block">{{$errors->first('plasma_recipent_email')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('plasma_recipent_phone')?'has-error':''}}">
                                        <label for="phone">Phone Number</label>
                                        <input type="text" class="form-control" id="phone" name="plasma_recipent_phone">
                                        @if($errors->has('plasma_recipent_phone'))
                                            <span class="help-block">{{$errors->first('plasma_recipent_phone')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('covid_recipent_verified')?'has-error':''}}">
                                        <label style="display: block">Covid positive Verified Image</label>
                                        <input type="file" class="form-control" id="covid_recipent_verified" name="covid_recipent_verified">
                                        <label for="covid_recipent_verified" style="padding:15px 30px;background:#000;color:#fff">Browse File</label>
                                        @if($errors->has('covid_recipent_verified'))
                                            <span class="help-block">{{$errors->first('covid_recipent_verified')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('plasma_need_verified_doctor')?'has-error':''}}">
                                        <label style="display: block">Covid positive Recovered Image</label>
                                        <input type="file" class="form-control" id="plasma_need_verified_doctor" name="plasma_need_verified_doctor">
                                        <label for="plasma_need_verified_doctor" style="padding:15px 30px;background:#000;color:#fff">Browse File</label>
                                        @if($errors->has('plasma_need_verified_doctor'))
                                            <span class="help-block">{{$errors->first('plasma_need_verified_doctor')}}</span>
                                        @endif
                                    </div>
                                    <div class="input-group mb-3 {{$errors->has('recipent_blood_group')?'has-error':''}}">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="inputGroupSelect01">Options</label>
                                        </div>
                                        <select class="custom-select" id="inputGroupSelect01" name="recipent_blood_group">
                                            <option selected>Choose...</option>
                                            <option>A+</option>
                                            <option>A-</option>
                                            <option>B+</option>
                                            <option>B-</option>
                                            <option>AB+</option>
                                            <option>AB-</option>
                                        </select>
                                        @if($errors->has('recipent_blood_group'))
                                            <span class="help-block">{{$errors->first('recipent_blood_group')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('hospital_address')?'has-error':''}}">
                                        <label for="hospital_address">Hospital Address</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="hospital_address">
                                        @if($errors->has('plasma_recipent_name'))
                                            <span class="help-block">{{$errors->first('hospital_address')}}</span>
                                        @endif
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    {!!Form::close()!!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="footer type_three">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-xs-12">
                        <div class="footer_widgets type_three">
                            <h3 class="widgets_title">About</h3>
                            <div class="inner_widgets">
                                <ul class="links">
                                    <li><a href="#">Situation Reports</a></li>
                                    <li><a href="#">Advice For Public</a></li>
                                    <li><a href="#">Prevention</a></li>
                                    <li><a href="#">Coronavirus Symptoms</a></li>
                                    <li><a href="#">Donor & Partners</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="footer_widgets type_three">
                            <h3 class="widgets_title">Prevention</h3>
                            <div class="inner_widgets">
                                <ul class="links">
                                    <li><a href="#">Wash your hands</a></li>
                                    <li><a href="#">Avoid touching your</a></li>
                                    <li><a href="#">Avoid close contact</a></li>
                                    <li><a href="#">Stay home if you are sick</a></li>
                                    <li><a href="#">Immediately wash your </a></li>
                                    <li><a href="#">Wear a facemask</a></li>
                                    <li><a href="#">Keep surfaces  clean</a></li>
                                    <li><a href="#">Cover your mouth  </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="footer_widgets type_three">
                            <h3 class="widgets_title">Follow the steps</h3>
                            <div class="inner_widgets">
                                <ul class="links">
                                    <li><a href="#"> Soap on Hand</a></li>
                                    <li><a href="#"> Palm to Palm</a></li>
                                    <li><a href="#"> Between Fingers</a></li>
                                    <li><a href="#"> Back to Hands</a></li>
                                    <li><a href="#"> Clean with Water</a></li>
                                    <li><a href="#">Focus on Wrist</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="footer_widgets type_three">
                            <h3 class="widgets_title logo">
                                <a href="index.html"><img src="{{asset('frontend/assets/image/logo.png')}}" class="img-fluid" alt="logo" /></a>
                            </h3>
                            <div class="inner_widgets">
                                <p>A novel coronavirus is a new coronavirus that has not been previously identified. The virus causing coronavirus disease 2019 (COVID-19)</p>
                                <div class="social_media_icon">
                                    <ul class="clearfix">
                                        <li>
                                            <a href="#" class="has-tooltip">
                                                <span class="fa fa-facebook"></span>
                                                <div class="c-tooltip">
                                                    <div class="tooltip-inner">Facebook</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="has-tooltip">
                                                <span class="fa fa-twitter"></span>
                                                <div class="c-tooltip">
                                                    <div class="tooltip-inner">Twitter</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="has-tooltip">
                                                <span class="fa fa-linkedin"></span>
                                                <div class="c-tooltip">
                                                    <div class="tooltip-inner">Linkedin</div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer_last type_three">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <p>Copyright © 2020 Tusher. All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-------------main-centent-end--------------->
    </main>
    <!-------------pagewapper-end--------------->
</div>
<!--Scroll to top-->
<a href="# " id="scroll" class="default-bg " style="display: inline;"><span class="fa fa-angle-up "></span></a>
<!---------mbile-navbar----->
<div class="bsnav-mobile ">
    <div class="bsnav-mobile-overlay"></div>
    <div class="navbar ">
        <button class="navbar-toggler toggler-spring mobile-toggler"><span class="fa fa-close "></span></button>
    </div>
</div>

<!-----------------------------------script-------------------------------------->
<script src="{{asset('frontend/assets/js/jquery.js')}}"></script>
<script src="{{asset('frontend/assets/js/popper.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/bsnav.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery-ui.js')}}"></script>
<script src="{{asset('frontend/assets/js/wow.js')}}"></script>
<script src="{{asset('frontend/assets/js/owl.js')}}"></script>
<script src="{{asset('frontend/assets/js/swiper.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery.fancybox.js')}}"></script>
<script src="{{asset('frontend/assets/js/TweenMax.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/validator.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/appear.js')}}"></script>
<script src="{{asset('frontend/assets/js/moment.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery.flexslider-min.js')}}"></script>
<script src="{{asset('frontend/assets/js/pagenav.js')}}"></script>
<script src="{{asset('frontend/assets/js/custom.js')}}"></script>
</body>

</html>
