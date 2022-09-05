@extends('layouts.single')

@section('main-container')
    <div class="section">
        <div class="section-item text-left">
            <div class="container">
                <div class="row align-items-end mt50">
                    <div class="col-sm-8 mb90">
                        <h3 class="section-item-title-xs">about us</h3>
                        <h1 class="h2-flash font-abril mb65">History of our creation</h1>
                        <div class="fs18 text-grey">We are a full event management company that offers event Consltancy,
                            Planning/Management and Design for both Corporate and Social Events. Our aim is to help our
                            clients achieve their dream events by giving expression to the kind of events they dream of.
                        </div>
                    </div>
                    <div class="col-sm-4 mb90">
                        <div class="rounded-logo">
                            <svg viewBox="0 0 200 200">
                                <path id="textPath" d="M 85,0 A 85,85 0 0 1 -85,0 A 85,85 0 0 1 85,0"
                                    transform="translate(100,100)" fill="none" stroke-width="0"></path>
                                <g font-size="20px">
                                    <text text-anchor="start">
                                        <textPath xlink:href="#textPath" startOffset="0%">• &nbsp; Cedarpoint events &nbsp;
                                            • &nbsp; Event Hub</textPath>
                                    </text>
                                </g>
                            </svg>
                            <div class="logo">CPE</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10">
                        <blockquote class="blockquote blockquote-status text-left mt-3 mb-0">
                            <div class="font-libre">“We are the one stop solution to that event planning need, we will plan,
                                manage, and host that event from start to finish”</div>
                            <footer><strong class="fs18 text-black">Funke Bassey,</strong><br /> CEO Founder Cedarpoint
                                Events</footer>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-item">
            <div class="container-fluid">
                <div class="image mask-skew wow fadeIn" data-wow-offset="150" data-wow-duration="0.2s" data-wow-delay=".3s">
                    <div class="mask wow slideInLeft" data-wow-offset="150" data-wow-duration="1.2s" data-wow-delay=".3s">
                        <div class="inside"></div>
                    </div>
                    <img src="img/about-01.jpg" alt="" class="img-fluid" />
                </div>
            </div>
        </div>
        <div class="section-item text-left">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <h3 class="section-item-title-xs">What makes us the best</h3>
                        <h1 class="h2-flash font-abril">Throw an event in grand style</h1>
                    </div>
                </div>
                <div class="row horizontal-service-list">
                    <div class="col-lg-4">
                        <div class="horizontal-service-item wow fadeInUp" data-wow-delay=".2s">
                            <div class="num">1.</div>
                            <div class="horizontal-service-item-photo"><img src="img/horizontal-pic2.png"
                                    alt="" class="photo-position" /></div>
                            <div class="horizontal-service-item-title">Excellent &amp;&nbsp;Communication skills</div>
                            <div class="horizontal-service-item-descr text-grey">We are always in touch all the way through,
                                from start to finish, we keep our clients informed..</div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="horizontal-service-item wow fadeInUp" data-wow-delay=".4s">
                            <div class="num">2.</div>
                            <div class="horizontal-service-item-photo"><img src="assets/img/horizontal-pic3.png"
                                    alt="" class="photo-position" /></div>
                            <div class="horizontal-service-item-title">Modern <br /> Decouration</div>
                            <div class="horizontal-service-item-descr text-grey">Exclusive decour tailored for you, we pay
                                attention to every details, from the indoor douration to the outdoor decourations</div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="horizontal-service-item wow fadeInUp" data-wow-delay=".6s">
                            <div class="num">3.</div>
                            <div class="horizontal-service-item-photo photo3"><img src="assets/img/horizontal-pic4.png"
                                    alt="" class="photo-position" /></div>
                            <div class="horizontal-service-item-title">Professional <br /> Team</div>
                            <div class="horizontal-service-item-descr text-grey">Dedicated team to make that dream event
                                happen from ever</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-item text-left">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <h3 class="section-item-title-xs">our culture</h3>
                        <h1 class="h2-flash font-abril">Friendly &amp; Professional</h1>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 mb30">
                        <div class="image mask-skew wow fadeIn" data-wow-offset="150" data-wow-duration="0.2s"
                            data-wow-delay=".3s">
                            <div class="mask wow slideInLeft" data-wow-offset="150" data-wow-duration="1.2s"
                                data-wow-delay=".3s">
                                <div class="inside"></div>
                            </div>
                            <img src="img/about-02.jpg" alt="" class="img-fluid" />
                        </div>
                    </div>
                    <div class="col-sm-6 mb30">
                        <div class="image mask-skew wow fadeIn" data-wow-offset="150" data-wow-duration="0.2s"
                            data-wow-delay=".6s">
                            <div class="mask wow slideInLeft" data-wow-offset="150" data-wow-duration="1.2s"
                                data-wow-delay=".6s">
                                <div class="inside"></div>
                            </div>
                            <img src="img/about-03.jpg" alt="" class="img-fluid" />
                        </div>
                    </div>
                    <div class="col-sm-12 mb30">
                        <div class="image mask-skew wow fadeIn" data-wow-offset="150" data-wow-duration="0.2s"
                            data-wow-delay=".3s">
                            <div class="mask wow slideInLeft" data-wow-offset="150" data-wow-duration="1.2s"
                                data-wow-delay=".3s">
                                <div class="inside"></div>
                            </div>
                            <img src="img/about-04.jpg" alt="" class="img-fluid" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-item text-left">
            <div class="container">
                <h3 class="section-item-title-xs">our partners</h3>
                <h1 class="h2-flash font-abril">Your succesful events, Our reputation!</h1>
                <div class="row no-gutters partner-list partner-bordered">
                    <div class="col partner-item"><span class="inside"><img src="img/pic12.png"
                                alt="" /></span></div>
                    <div class="col partner-item"><a href="#" class="inside"><img src="img/pic13.png"
                                alt="" /></a></div>
                    <div class="col partner-item"><a href="#" class="inside"><img src="img/pic14.png"
                                alt="" /></a></div>
                    <div class="col partner-item"><a href="#" class="inside"><img src="img/pic15.png"
                                alt="" /></a></div>
                    <div class="col partner-item"><a href="#" class="inside"><img src="img/pic16.png"
                                alt="" /></a></div>
                    <div class="col partner-item"><a href="#" class="inside"><img src="img/pic17.png"
                                alt="" /></a></div>
                    <div class="col partner-item"><a href="#" class="inside"><img src="img/pic18.png"
                                alt="" /></a></div>
                    <div class="col partner-item"><a href="#" class="inside"><img src="img/pic20.png"
                                alt="" /></a></div>
                    <div class="col partner-item"><a href="#" class="inside"><img src="img/pic21.png"
                                alt="" /></a></div>
                    <div class="col partner-item"><a href="#" class="inside"><img src="img/pic22.png"
                                alt="" /></a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="section text-center testimonial">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <div class="a-reviews-carousel carousel-center-v owl-carousel owl-theme wow fadeIn"
                        data-wow-delay=".5s">
                        <div class="reviews-carousel-item">
                            <div class="inside">
                                <div class="reviews-carousel-text font-libre">“Everything was perfect.......i am glad we
                                    picked you guys...i will recommend you over and over.”</div>
                                <div class="mt60">
                                    <div class="text-uppercase text-primary fs18"><strong>Olubukunola</strong></div>
                                    <div class="mt10 fs14">Groom <span class="text-grey-light">at</span> <a
                                            href="#">#Theebbwedding2022</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="reviews-carousel-item">
                            <div class="inside">
                                <div class="reviews-carousel-text font-libre">"paid attention to details, really love the
                                    decourations, event was on point, they really pulled it off."</div>
                                <div class="text-uppercase text-primary fs18"><strong></strong></div>
                                <div class="reviews-carousel-author"><strong>Bride</strong> <span
                                        class="text-grey-light">at</span> #Ayobola2022</div>
                            </div>
                        </div>
                        <div class="reviews-carousel-item">
                            <div class="inside">
                                <div class="reviews-carousel-text font-libre">"mama you too try abeg...you made our
                                    day...it's obvious you did more than we paid for"</div>
                                <div class="reviews-carousel-author"><strong>Bride</strong> <span
                                        class="text-grey-light">at</span> #Themandate2022</div>
                            </div>
                        </div>
                        <div class="reviews-carousel-item">
                            <div class="inside">
                                <div class="reviews-carousel-text font-libre">"You brought our ideas to life, even more
                                    than we imagined it to be. I am greatful, honestly you did more than magic"</div>
                                <div class="reviews-carousel-author"><strong>Groom</strong> <span
                                        class="text-grey-light">at</span>#ROOndezvous</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
