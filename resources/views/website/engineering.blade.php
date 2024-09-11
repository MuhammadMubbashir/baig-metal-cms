@extends("components.master")
@section('admin')
<div class="page-title-area shadow dark bg-fixed text-center text-light" style="background-image: url({{ asset('asset/images/banner-images/banner-1.png') }});">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h1>Engineering</h1>
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
                    <li><a href="#">Services</a></li>
                    <li class="active">Engineering</li>
                </ul>
            </div>
        </div>
    </div>
</div>



<!-- start -->

<div class="blog-area bg-gray default-padding bottom-less" style="margin-bottom: 50px;">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="site-heading text-center">
                <h4>Services</h4>
                <h2>Engineering</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="blog-items">
            <!-- Single Item -->
            <div class="col-md-4 single-item">
                <div class="item">
                    <div class="thumb">
                        <a href="#">
                            <img src="{{ asset('assets/images/33.jpg') }}" alt="Thumb">
                            <div class="post-date">
                                12 Jul
                            </div>
                        </a>
                    </div>
                    <div class="info">
                        <div class="tags">
                            <a href="#">asset</a> ,
                            <a href="#">earning</a>
                        </div>
                        <h4>
                            <a href="#">Partiality motionless she inquietude contrasted</a>
                        </h4>
                        <p>
                            Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness something.
                        </p>
                    </div>
                   
                </div>
            </div>
            <!-- End Single Item -->
            <!-- Single Item -->
            <div class="col-md-4 single-item">
                <div class="item">
                    <div class="thumb">
                        <a href="#">
                            <img src="{{ asset('assets/images/11.jpg') }}" alt="Thumb">
                            <div class="post-date">
                                27 Apr
                            </div>
                        </a>
                    </div>
                    <div class="info">
                        <div class="tags">
                            <a href="#">Business</a>
                        </div>
                        <h4>
                            <a href="#">Motionless on reasonable projecting expression</a>
                        </h4>
                        <p>
                            Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness something.
                        </p>
                    </div>

                </div>
            </div>
            <!-- End Single Item -->
            <!-- Single Item -->
            <div class="col-md-4 single-item">
                <div class="item">
                    <div class="thumb">
                        <a href="#">
                            <img src="{{ asset('assets/images/22.jpg') }}" alt="Thumb">
                            <div class="post-date">
                                28 Aug
                            </div>
                        </a>
                    </div>
                    <div class="info">
                        <div class="tags">
                            <a href="#">asset</a> ,
                            <a href="#">earning</a>
                        </div>
                        <h4>
                            <a href="#">Contented get distrusts certainty nay are frankness</a>
                        </h4>
                        <p>
                            Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness something.
                        </p>
                    </div>

                </div>
            </div>
            <!-- End Single Item -->
        </div>
    </div>
</div>
</div>
<!-- end -->
@endsection
