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
                                                <li class="nav-item"><a class="nav-link" href="{{route('profile',auth()->user()->id)}}">Profile</a></li>
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
                                <li class="bread_crumb-item active"> Developers</li>
                            </ul>
                            <h1>Our Team</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--------doctors-------->
        <section class="team_all">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">

                    </div>
                    <div class="col-lg-4">
                        <div class="doctor_box type_two ">
                            <div class="image_box ">
                                <img src="{{asset('frontend/assets/image/16422364_1273308896096089_431169793703509732_o.jpg')}}" class="img-fluid " alt="best-doctors " />
                                <div class="overlay ">
                                    <ul>
                                        <li><a href="https://www.facebook.com/sazzad1417027.mahmud"><i class="fa fa-facebook "></i></a></li>
                                        <li><a href="# "><i class="fa fa-google "></i></a></li>
                                        <li><a href="sazzadmahmud01795355849@gmail.com "><i class="fa fa-skype "></i></a></li>

                                    </ul>
                                </div>
                            </div>
                            <div class="content_box ">
                                <a href="# " class="contact_doctor "><span class="fa fa-phone "></span>+8801795355849</a>
                                <div class="text_box ">
                                    <h2> <a href="# ">Sazzad Mahmud </a> </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">

                    </div>
                    <div class="col-lg-4">
                        <div class="doctor_box type_two ">
                            <div class="image_box ">
                                <img src="https://lh3.googleusercontent.com/lEex-7yd1JNAx5rxdAjwXOrjvBsEgif_LYTcgAWpPiP4CwsY7Yxn1js3LtU4QvPJexQ6KoYLs8pxjUz8drniO4aJ8nFWZZM4EHkRx3b2R9k_I0ubNmQvggmnIhqrkyxxFn7WmO70wV4xm_vsY_m1z8qRszF8NNcCE1L7CIV4m7daUeJmmTmrGI6Od3_muhbrrYEV6AoY9qllmd-Xwjpmriva3lF0nlMTMa8Z8DqfD2g5uG_rVzjPB-BMgQzdqe-U3UUaq_eHzVy3vlteoSsDwpZ0tZynefJQI1w8sve8eWHGHYQ9sJB--bBQaUYrYI2eCL5doO47wXxQ9GYdfNiqu0j0aO4hSmT4QEJatmuxUfj43skQd-dQbDXq-taJNRHsj2zP2YQLihJXA4pnKnYBfygQifKRie5h1IUwu6gdZKpsNS-2Tgbqbjb5wdKxRcgL_zo_-o6G2yzKerbeSWKkXSsXk9dQ4jXI_QvbaNFVp71Ams389yZItwA_80nSzdoDwJGnf9Hq0PN5m0COQRRZgPyYYDrZQitVSr6NoWu9nI8wEyKB3JNx-h9KenJHvNtN14gAdah3-_RAxo7d8fSHvnW_JS4A5j3HVXuWrZjOd0J2UKzBOZ6UjWbhdnSD5BKDB6Xrkn1_dbXsDpTGynGO-zAKCkuNeAlHw8FUgAirfjDRzJGTEbV1dbH1XTiCPA=w768-h512-no?authuser=0&fbclid=IwAR3hYfxjfuSV9NG-70hCsp-M1hziULvff4vw6G-3ICUcKWoGGzoI2MJQT-Y"
                                     class="img-fluid " alt="best-doctors " />
                                <div class="overlay ">
                                    <ul>
                                        <li><a href="https://www.facebook.com/bornilaboishakhi "><i class="fa fa-facebook "></i></a></li>
                                        <li><a href="mailto:dipankershaha@gmail.com"><i class="fa fa-google "></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="content_box ">
                                <a href="# " class="contact_doctor "><span class="fa fa-phone "></span>+8801759237037</a>
                                <div class="text_box ">
                                    <h2> <a href="# ">Md Mamun Uddin
                                        </a> </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="doctor_box type_two ">
                            <div class="image_box ">
                                <img style="width:100%" src="https://lh3.googleusercontent.com/0tgd2Zfz12LYKdkIOaRN5tYQQiY-zSQdsqYqgVao92BO-7G59GfuCeH6ybEq7yv9NMDlCBCANcXYH-Q6n5dHOwOotd7y4He-wxbGCu_ZHOSQe2CFinqC513AVG3CH_kLimhG66o7EtLociq1-MiOGjrT-mk9qj9t1tw_ru_kGN-1HODPJmqdozimwgzrBgOdfJHxJiQ9ItAe8Lu0ePNf1kiS2orKlNUt10sovV-dyhLWlKoYRKL3fvl_78K2DznWQ7iq5OPT7GPoEB6d5qot7--wWTIOktDnQ0_34mpfJTb3_Sgjejyf6LFDQbFi5QL5hxB7L74tgpO73ueV4ampCbDgBNN9sCT_QgqgasPBWsq7_R-RaWgbhmzhdyhRgPlGRu9CKKdjcogYj7YXdroqM6e1ct8Zn_zlK6vwffG_PLvi7hWaEIoJzuokOqOvCT_lCAzEZaPop417sPk_s0BUmVxIsZfSo5xplZRaCh-5ntA-OuPAZ2oRL3D564ctb2vZhEvbW_QAnDQN0fsf3D0cmbrDeNEoLWwTdSq031eU4RG2Ngw1U3bRI6CqVzzYjPLxPWLzvmV6cTrA_3ezJ-ODvj0ZkHajpVC-ENEDX7xcBvrg-Wu4WAjtHF68or36XT5k4ofZEy15zUawgHL1UAdkMwqCJKusg4vOLBzXglfA5ClxfhuhGaY2Mv9OU8ZS=w623-h625-no?authuser=1&fbclid=IwAR1pAES3T1v401mncIhovFXQhCIJKLo9dLl7GvreUSK7yv7Q32drdTLxelM" class="img-fluid " alt="best-doctors " />
                                <div class="overlay ">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook "></i></a></li>
                                        <li><a href="mailto:dipankershaha@gmail.com"><i class="fa fa-google "></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="content_box ">
                                <a href="# " class="contact_doctor "><span class="fa fa-phone "></span>+8801759237037</a>
                                <div class="text_box ">
                                    <h2> <a href="# ">
                                            Dipanker Shaha
                                        </a> </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="doctor_box type_two ">
                            <div class="image_box ">
                                <img style="width:100%" src="https://lh3.googleusercontent.com/m7aSkCrGT1GIOpyiOb7rEcGpEOcRjL3M_6Le7doMeNBFEdhJI9QEQUzI8hOUBpsr0Nw4jOJ1oH1aigfv3OY6wPowa1O6uIzw0X6GBoiXCEGADrtBY6QUtpgK4J5clmO96t-Bk34OMCA1Fj8mgRWEnPfgBw5DFtyNcRfj1vyarJ2YIedDVyb-ePmwXEpRI84dAbbAvy2vS5x440ipmgEdwTWyxWt_jloawuH_D0-4SdXtKrMNbxW7UexUaaaPgxKXYYbs71j6QisG-J4SlHF1u00LzcVMaTSB3RxpZ6WKiA5xuK4hYeGDLb1QkWIiPuxkus1yPuv_gxiM6yx1sd8U_QahNY-LoSxuzhQX5FG7_DpHiY70r0HD1_sdX8QAOSBY_10M3h8m7XF4A99i1F4V_2Z7Gh8AUNo1vB9GozC2LUsDW9-oie-Pv3Az1EWexa_uA1D0aLG6_r4RPLiXV9yS_8K0Sq0B74UiZ_v3TD-D8Ib_FyX-7IApwuwOJgpDkXHV_SM6OuVQu3vq-U0_-8lqEbf6nDUEK7jVWP3F8dMcpDtlV9moFVwVmyOtirWigaWSZmukXih3qICCDJVtKGVmJmP_hFSdaZ9d-PPJRBQ1E_mz-W8mTvcVUUJfdvfgff-On7fGmEKejE8V94YLeWvEEzVetSXnlCa-04l0kC2szs6_wBkJxf1pr49rvu0DIQ=w281-h211-no?authuser=4&fbclid=IwAR3Fb3NGRvr6gDK3eoGidFaaqLIDa9zGmEWW7Dc-SZKf_ouU8TPNIalMZJ0"
                                     class="img-fluid " alt="best-doctors " />
                                <div class="overlay ">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook "></i></a></li>
                                        <li><a href="mailto:akash.chandra.paul@g.bracu.ac.bd"><i class="fa fa-google "></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="content_box ">
                                <a href="# " class="contact_doctor "><span class="fa fa-phone "></span>+8801862648528</a>
                                <div class="text_box ">
                                    <h2> <a href="# ">
                                            Akash Chandra Paul
                                        </a> </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--------doctors-------->
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
<!---------mbile-navbar----->
<!-- /.side-menu__block -->
<div class="side-menu__block">
    <div class="side-menu__block-overlay custom-cursor__overlay">
        <div class="cursor "></div>
        <div class="cursor-follower"></div>
    </div>
    <!-- /.side-menu__block-overlay -->
    <div class="side-menu__block-inner">
        <div class="row ">
            <div class="col-lg-12 ">
                <div class="logo_site ">
                    <a href="index.html"><img src="{{asset('frontend/assets/image/home-1-logo.png')}}" alt="logo " /></a>
                </div>
                <div class="side-menu__block-contact ">
                    <h2>Quick Online Consultancy Only on Few Minutes</h2>
                    <div class="form_outer ">
                        <form>
                            <div class="from_group ">
                                <input type="text" name="name" placeholder="Name " />
                            </div>
                            <div class="from_group ">
                                <input type="email" name="email" placeholder="Email " />
                            </div>
                            <div class="from_group">
                                <input type="text" name="phone" placeholder="Phone " />
                            </div>
                            <div class="from_group">
                                <textarea rows="4" placeholder="Share Your Thoughts "></textarea>
                            </div>
                            <div class="from_group ">
                                <button  class="theme_btn tp_two" type="submit">Contact Us</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.side-menu__block-contact -->
                <div class="side-menu__block-contact ">
                    <h3 class="side-menu__block__title ">Contact Us</h3>
                    <!-- /.side-menu__block__title -->
                    <ul class="side-menu__block-contact__list ">
                        <li class="side-menu__block-contact__list-item ">
                            <i class="fa fa-map-marker "></i> Rock St 12, Newyork City, USA
                        </li>
                        <!-- /.side-menu__block-contact__list-item -->
                        <li class="side-menu__block-contact__list-item ">
                            <i class="fa fa-phone "></i>
                            <a href="tel:526-236-895-4732 ">(526) 236-895-4732</a>
                        </li>
                        <!-- /.side-menu__block-contact__list-item -->
                        <li class="side-menu__block-contact__list-item ">
                            <i class="fa fa-envelope "></i>
                            <a href="mailto:example@mail.com ">example@mail.com</a>
                        </li>
                        <!-- /.side-menu__block-contact__list-item -->
                        <li class="side-menu__block-contact__list-item ">
                            <i class="fa fa-clock-o "></i> Week Days: 09.00 to 18.00 Sunday: Closed
                        </li>
                        <!-- /.side-menu__block-contact__list-item -->
                    </ul>
                    <!-- /.side-menu__block-contact__list -->
                </div>
                <!-- /.side-menu__block-contact -->
                <p class="side-menu__block__text site-footer__copy-text "><a href="# ">corano</a> <i class="fa fa-copyright "></i> 2020 All Right Reserved</p>
            </div>
        </div>
        <!-- /.side-menu__block-inner -->
    </div>
</div>
<!-- /.side-menu__block -->
<!-- /.search-popup -->
<div class="search-popup">
    <div class="search-popup__overlay custom-cursor__overlay">
        <div class="cursor "></div>
        <div class="cursor-follower "></div>
    </div>
    <!-- /.search-popup__overlay -->
    <div class="search-popup__inner ">
        <form action="# " class="search-popup__form ">
            <input type="text" name="search" placeholder="Type here to Search.... ">
            <button type="submit"><i class="flaticon-magnifying-glass "></i></button>
        </form>
    </div>
    <!-- /.search-popup__inner -->
</div>
<!-- /.search-popup -->
<!-----------------------------------script-------------------------------------->
<script src="{{asset('frontend/assets/js/jquery.js')}}"></script>
<script src="{{asset('frontend/assets/js/popper.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/bsnav.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery-ui.js')}}"></script>

<script src="{{asset('frontend/assets/js/wow.js')}}"></script>
<script src="{{asset('frontend/assets/js/owl.js')}}"></script>
<script src="{{asset('frontend/assets/js/odometer.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/TweenMax.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/validator.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/appear.js')}}"></script>
<script src="{{asset('frontend/assets/js/moment.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery.flexslider-min.js')}}"></script>
<script src="{{asset('frontend/assets/js/pagenav.js')}}"></script>
<script src="{{asset('frontend/assets/js/custom.js')}}"></script>
</body>

</html>
