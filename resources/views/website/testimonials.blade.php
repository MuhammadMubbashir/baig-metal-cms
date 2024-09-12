@extends("components.master")
@section('admin')
<div class="page-title-area shadow dark bg-fixed text-center text-light" style="background-image: url({{ asset("assets/images/banner/20.jpg") }});">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h1>Testimonials</h1>
            </div>
        </div>
    </div>
</div>
<div class="breadcrumb-area bg-gray text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <ul class="breadcrumb">
                    <li><a href="{{ route('index') }}"><i class="fas fa-home"></i> Home</a></li>
                    <li class="active">Testimonials</li>
                </ul>
            </div>
        </div>
    </div>
</div>
   <!-- Star Testimonials Area
    ============================================= -->
    <div class="testimonials-area carousel-shadow default-padding-bottom mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h4>Testimonials</h4>
                        <h2>What Client Says</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="testimonial-box">
                    <div class="row">
                        <div class="testimonial-items testimonial-carousel owl-carousel owl-theme">
                            <!-- Single Item -->
                            <div class="item1">
                                <i class="fas fa-quote-right"></i>
                                <p>
                                    Adieus except say barton put feebly favour consistence. Entreaties unpleasant sufficient few pianoforte discovered uncommonly ask. Morning cousins amongst in mr weather do neither. Warmth object matter course.
                                </p>
                                <div class="author">
                                    <div class="avatar">
                                        <img src="{{ asset('assets/images/1_2.jpg') }}" alt="Thumb">
                                    </div>
                                    <div class="info">
                                        <h4>Sunath park</h4>
                                        <span>Markeing Manager</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="item1">
                                <i class="fas fa-quote-right"></i>
                                <p>
                                    Adieus except say barton put feebly favour consistence. Entreaties unpleasant sufficient few pianoforte discovered uncommonly ask. Morning cousins amongst in mr weather do neither. Warmth object matter course.
                                </p>
                                <div class="author">
                                    <div class="avatar">
                                        <img src="{{ asset('assets/images/2_1.jpg') }}" alt="Thumb">
                                    </div>
                                    <div class="info">
                                        <h4>Marron Bua</h4>
                                        <span>Director</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="item1">
                                <i class="fas fa-quote-right"></i>
                                <p>
                                    Adieus except say barton put feebly favour consistence. Entreaties unpleasant sufficient few pianoforte discovered uncommonly ask. Morning cousins amongst in mr weather do neither. Warmth object matter course.
                                </p>
                                <div class="author">
                                    <div class="avatar">
                                        <img src="{{ asset('assets/images/3_1.jpg') }}" alt="Thumb">
                                    </div>
                                    <div class="info">
                                        <h4>Aunoath Jaru</h4>
                                        <span>Designer</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonials Area -->
@endsection
