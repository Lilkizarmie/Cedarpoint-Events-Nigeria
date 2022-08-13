<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=0">
    <meta name="description" content="Cedarpoint Events">
    <meta name="author" content="Event Planning Company">
    <title>CedarPoint Events - Decoration | Event Hall | Planning</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animsition.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/socicon.css') }}" rel="stylesheet">
    <link href="{{ asset('css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.fancybox.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon.png') }}">
    <link rel="manifest" href="favicon/site.html">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
</head>

<body class="theme-orange fixed-footer fixed-footer-lg">
    <div class="animsition">
        <div class="wrapper parallax-start">
            <header id="header" class="header header-fixed">
                <div class="container-fluid clearfix">
                    <div class="brand">
                        <a href="index.html">
                            <div class="brand-name text-texture">CP</div>
                            <div class="brand-text">Cedarpoint<br /> Events</div>
                        </a>
                    </div>
                    <button class="nav-toggle-btn a-nav-toggle">
                        <span class="nav-toggle-title">Menu</span>
                        <span class="nav-toggle nav-toggle-sm">
                            <span class="stick stick-1"></span>
                            <span class="stick stick-2"></span>
                            <span class="stick stick-3"></span>
                        </span>
                    </button>
                    <div class="hide-menu a-nav-toggle"></div>
                    <div class="menu">
                        <div class="menu-lang">
                            <a href="#" class="menu-lang-item active">Decouration</a>
                            <a href="#" class="menu-lang-item">Planning</a>
                            <a href="#" class="menu-lang-item">Rental Hub</a>
                        </div>
                        <div class="menu-main" id="accordion">
                            <ul>
                                <li><a href="index.html" class="active" class="animsition-link"
                                        data-animsition-out-class="fade-out" data-text="Home">Home</a></li>
                                <li><a href="about.html" class="animsition-link" data-animsition-out-class="fade-out"
                                        data-text="About Us">About Us</a></li>
                                <li><a href="services.html" class="animsition-link" data-animsition-out-class="fade-out"
                                        data-text="Services">Services</a></li>
                                <li><a href="gallery.html" class="animsition-link" data-animsition-out-class="fade-out"
                                        data-text="Gallery">Gallery</a></li>
                                <li><a href="#" class="animsition-link" data-animsition-out-class="fade-out"
                                        data-text="Shop">Shop</a>
                                </li>
                                <li><a href="#" class="animsition-link" data-animsition-out-class="fade-out"
                                        data-text="Blog">Blog</a>
                                </li>
                                <li><a href="contact.html" class="animsition-link" data-animsition-out-class="fade-out"
                                        data-text="Contact">Contact</a></li>
                            </ul>
                        </div>
                        <div class="menu-footer">
                            <ul class="social social-rounded">
                                <li><a href="#"><i class="socicon-twitter"></i></a></li>
                                <li><a href="#"><i class="socicon-facebook"></i></a></li>
                                <li><a href="#"><i class="socicon-googleplus"></i></a></li>
                            </ul>
                            <div class="menu-copyright">&copy; 2022 <strong>CEDARPOINT</strong>. All Rights
                                Reserved.<br /> design by
                                <strong>infixdev</strong>
                            </div>
                        </div>
                    </div>
            </header>
            <div class="project-card-mobile">
                <div class="section">
                    <div class="section-item">
                        <div class="container">
                            <h1 class="font-libre fs48 lh-sm"><strong>Couples<br /> wedding</strong></h1>
                            <div class="project-info">
                                <div class="row text-center">
                                    <div class="col-sm-6 col-md-3">
                                        <div class="project-info-item">
                                            <div class="project-info-title">Location</div>
                                            <div class="project-info-descr">California Art Gallery Museum</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="project-info-item">
                                            <div class="project-info-title">Date</div>
                                            <div class="project-info-descr">Branding, UI/UX Design,</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="project-info-item">
                                            <div class="project-info-title">Couples</div>
                                            <div class="project-info-descr">Feburary 25th, 2019</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="project-info-item">
                                            <div class="project-info-title">Theme</div>
                                            <div class="project-info-descr">LoganCee - Designer</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-md-center">
                                <div class="col-lg-10">
                                    <div class="lead mt100 text-black">Updated portraits of all Instrument employees
                                        for the new
                                        Instrument site.<br /> A unified look and background allows photos to mesh
                                        seamlessly online. To see
                                        it live check out</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section-item">
                        <div class="photo-list">



                            {{-- @foreach ($album->photos as $photo)
                <div class="photo-item wow fadeInLeft" data-wow-delay=".3s" data-wow-offset="100">
                    <div class="container"><img src="{{ asset('images/' . $photo->photo) }}" alt="" /></div>
                </div>
            @endforeach --}}
                        </div>
                    </div>
                    <div class="section-item">
                        <div class="container">
                            <ul class="social social-rounded mt100">
                                <li><a href="#" class="text-grey-light"><i class="socicon-twitter"></i></a>
                                </li>
                                <li><a href="#" class="text-grey-light"><i class="socicon-facebook"></i></a>
                                </li>
                                <li><a href="#" class="text-grey-light"><i class="socicon-googleplus"></i></a>
                                </li>
                                <li><a href="#" class="text-grey-light"><i class="socicon-tumblr"></i></a></li>
                                <li><a href="#" class="text-grey-light"><i class="socicon-rss"></i></a></li>
                            </ul>
                            <div class="mt100">
                                <button class="like-btn"><i class="icon ion-heart"></i></button>
                                <div class="text-grey mt-3">268 Liked</div>
                            </div>
                        </div>
                    </div>
                    <div class="section-item">
                        <div class="project-next-simple text-black font-libre"><a
                                href="single-project-branding.html">Next</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="footer-flash-about home-flash-dark">
                <div class="container">
                    Tell us more about what you want to accomplish with your event. We help you think of possible
                    solutions and
                    bring out that world class event.
                    <div class="mt-4"><a href="#" class="underline"><strong><span class="__cf_email__"
                                    data-cfemail="7c14191010133c10190b150f0f0809181513521f13">enquiries@cedarpointevent.com</span></strong></a>
                    </div>
                </div>
            </div>
            <div class="home-flash-dark pt-0 pb-0">
                <div class="container">
                    <hr class="mt-0 mb-0">
                </div>
            </div>
            <div class="footer-flash home-flash-dark">
                <div class="container">
                    <div class="footer-content-flash">
                        <div class="row">
                            <div class="col-md-4 col-6 mb-5">
                                <h5>Office</h5>
                                <div class="contact-item">4, New Era Road, Ipaja Rd,<br /> Lagos,&nbsp;100278</div>
                                <div class="contact-item"><a
                                        href="http://paul-themes.com/cdn-cgi/l/email-protection#c5ada0a9a9aa85a9a0b2acb6b6b1b0a1acaaeba6aa"><span
                                            class="__cf_email__"
                                            data-cfemail="9bf3fef7f7f4dbf7feecf2e8e8efeefff2f4b5f8f4">enquiries@cedarpointevent.com</span></a>
                                </div>
                                <div class="contact-item"><a href="tel:+2348031555002" class="phone-link">+234 803
                                        155 5002</a></div>
                            </div>
                            <div class="col-md-3 col-6 mb-5">
                                <h5>help</h5>
                                <ul class="footer-nav">
                                    <li><a href="#">FAQs</a></li>
                                    <li><a href="#">Terms & Conditions</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Help</a></li>
                                    <li><a href="#">Services</a></li>
                                </ul>
                            </div>
                            <div class="col-md-2 col-6 mb-5">
                                <h5>quick links</h5>
                                <ul class="footer-nav">
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Contact</a></li>
                                    <li><a href="#">Career</a></li>
                                    <li><a href="#">Blog</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3 col-6 mb-5">
                                <ul class="social social-rounded">
                                    <li><a href="#"><i class="socicon-twitter"></i></a></li>
                                    <li><a href="#"><i class="socicon-facebook"></i></a></li>
                                    <li><a href="#"><i class="socicon-googleplus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="site-info">
                        <div class="row">
                            <div class="col-6">
                                <div class="copyright text-left">&copy; 2022 <strong>CEDARPOINT EVENTS</strong>. All
                                    Rights Reserved.
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-right">Design by <strong><a
                                            href="http://infixdev.co">infixdev</a></strong></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="../../../../code.jquery.com/jquery-1.12.4.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="{{asset('js/jquery.min.js')}}"><\/script>')
    </script>
    <script src="{{ asset('js/smoothscroll.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/animsition.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/jquery.pagepiling.min.js') }}"></script>
    <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('js/TweenMax.min.js') }}"></script>
    <script src="{{ asset('js/ScrollMagic.min.js') }}"></script>
    <script src="{{ asset('js/animation.gsap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.viewport.js') }}"></script>
    <script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
