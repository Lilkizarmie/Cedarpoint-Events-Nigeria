@extends('layouts.single')

@section('main-container')
    <div class="section">
        <div class="section-item">
            <div class="container">
                <div class="mt50 mb60">
                    <div class="rounded-logo rounded-logo-md mb90 wow fadeInUp">
                        <svg viewBox="0 0 200 200">
                            <path id="textPath" d="M 85,0 A 85,85 0 0 1 -85,0 A 85,85 0 0 1 85,0"
                                transform="translate(100,100)" fill="none" stroke-width="0"></path>
                            <g font-size="20px">
                                <text text-anchor="start">
                                    <textPath xlink:href="#textPath" startOffset="0%">• &nbsp; Cedarpoint events &nbsp; •
                                        &nbsp; Event Hub</textPath>
                                </text>
                            </g>
                        </svg>
                        <div class="logo">CPE</div>
                    </div>
                    <h1 class="h1-lg mb20 wow fadeInUp" data-wow-delay=".2s"><a href="tel:+00853462188"
                            class="phone-link">+234 803 155 5002</a></h1>
                    <h2 class="fs42 wow fadeInUp" data-wow-delay=".4s"><a
                            href="http://paul-themes.com/cdn-cgi/l/email-protection#9af2fff6f6f5daf6ffedf3e9e9eeeffef3f5b4f9f5"
                            class="text-black text-underline"><span class="__cf_email__"
                                data-cfemail="452d2029292a052920322c36363130212c2a6b262a">enquiries@cedarpointevent.com</span></a>
                    </h2>
                    <h3 class="fs30 text-grey mt90 wow fadeInUp" data-wow-delay=".6s">4, New Era Road, Ipaja Rd, Lagos,
                        Nigeria, 100278</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="image mask-skew wow fadeIn" data-wow-offset="150" data-wow-duration="0.2s" data-wow-delay=".3s">
            <div class="mask wow slideInLeft" data-wow-offset="150" data-wow-duration="1.2s" data-wow-delay=".3s">
                <div class="inside"></div>
            </div>
            <img src="img/pic161.jpg" alt="" class="img-fluid" />
        </div>
    </div>
    <div class="section">
        <div class="section-item">
            <div class="container wow fadeInUp" data-wow-delay=".2s">
                <h3 class="fs36 mb120">Get In Touch</h3>
                <form action="#" class="text-left">
                    <div class="row">
                        <div class="col-sm-4 mb30">
                            <label class="label-custom">Name</label>
                            <input type="text" class="form-control form-control-custom" placeholder="Your name" />
                        </div>
                        <div class="col-sm-4 mb30">
                            <label class="label-custom">Email</label>
                            <input type="text" class="form-control form-control-custom"
                                placeholder="Your Email Address" />
                        </div>
                        <div class="col-sm-4 mb30">
                            <label class="label-custom">subject (obtional)</label>
                            <input type="text" class="form-control form-control-custom" placeholder="Subject" />
                        </div>
                        <div class="col-sm-12 mb30">
                            <label class="label-custom">message</label>
                            <textarea rows="9" cols="30" class="form-control form-control-custom" placeholder="Write your message here"></textarea>
                        </div>
                    </div>
                    <div class="mt40 text-center"><button class="btn btn-link fs18 text-black text-underline">send
                            message</button></div>
                </form>
            </div>
        </div>
    </div>
@endsection
