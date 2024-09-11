@extends("components.master")
@section('admin')
<div class="page-title-area shadow dark bg-fixed text-center text-light" style="background-image: url({{ asset("assets/images/banner/20.jpg") }});">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h1>Contact Us</h1>
            </div>
        </div>
    </div>
</div>

<div class="breadcrumb-area bg-gray text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <ul class="breadcrumb">
                    <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                    <li class="active">Contact</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Start Contact Area
============================================= -->
<div class="contact-area default">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="site-heading text-center">
                <h2 class="text-top1"> </h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="contact-items">
            <div class="row">
                <div class="col-md-6 address">
                    <div class="address-items text-center text-light" style="background-image: url({{ asset('assets/images/engineering/Tool-Die-1024x678.jpg') }});">
                        <ul class="info">
                            <li>
                                <div class="icon"><i class="flaticon-location"></i></div>
                                <h4>Office Location</h4>
                                <span>H-160 / Z-24, Phase-11<br> Karachi, Karachi City,<br> Sindh 75340</span>
                            </li>
                            <li>
                                <div class="icon"><i class="flaticon-call-center"></i></div>
                                <h4>Phone</h4>
                                <span>+111-7328-4499</span>
                            </li>
                            <li>
                                <div class="icon"><i class="flaticon-email"></i> </div>
                                <h4>Email</h4>
                                <span>info@baigmetal.com.pk</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 form-box">
                    <h2 style="color: #222289;">Let's lalk about your idea</h2>
                    <p>
                        Our next drew much you with rank. Tore many held age hold rose than our. She literature sentiments any contrasted. Set aware joy sense young now tears china shy.
                    </p>
                    <form action="assets/mail/contact.php" method="POST" class="contact-form">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group">
                                    <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group comments">
                                    <textarea class="form-control" id="comments" name="comments" placeholder="Tell Us About Project *"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row" style="margin-top: 15px;">
                                <button type="submit" name="submit" id="submit">
                                    Send Message <i class="fa fa-paper-plane"></i>
                                </button>
                            </div>
                        </div>
                        <!-- Alert Message -->
                        <div class="col-md-12 alert-notification">
                            <div id="message" class="alert-msg"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Contact Area -->

@endsection
