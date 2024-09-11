@extends("components.master")
@section('admin')
<div class="portfolio-area default-padding-top">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="site-heading text-center">
                    <h4>Portfolio</h4>
                    <h2>Recent Gallery</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container-full">
        <div class="gallery-items-area">
            <div class="col-md-12 gallery-content">

                <div class="row magnific-mix-gallery masonary">
                    <div class="gallery-items portfolio-carousel owl-carousel owl-theme">
                        <!-- Single Item -->
                        <div class="pf-item">
                            <div class="effect-box">
                                <div class="thumb">
                                    <img src="{{ asset('assets/images/1.jpg') }}" alt="thumb">
                                </div>
                                <div class="info">
                                    <div class="left">
                                        <h4><a href="gallery-single.html">Marketing Plan</a></h4>
                                        <p>business, finance</p>
                                    </div>
                                    <div class="right">
                                        <a href="assets/img/portfolio/1.jpg" class="item popup-link"><i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="pf-item">
                            <div class="effect-box">
                                <div class="thumb">
                                    <img src="{{  asset('assets/images/3_1.jpg') }}" alt="thumb">
                                </div>
                                <div class="info">
                                    <div class="left">
                                        <h4><a href="gallery-single.html">Business Analysis</a></h4>
                                        <p>business, finance</p>
                                    </div>
                                    <div class="right">
                                       <a href="assets/img/portfolio/3.jpg" class="item popup-link"><i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="pf-item">
                            <div class="effect-box">
                                <div class="thumb">
                                    <img src="{{ asset('assets/images/2.jpg') }}" alt="thumb">
                                </div>
                                <div class="info">
                                    <div class="left">
                                        <h4><a href="gallery-single.html">Profit Analysis</a></h4>
                                        <p>business, finance</p>
                                    </div>
                                    <div class="right">
                                        <a href="assets/img/portfolio/2.jpg" class="item popup-link"><i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="pf-item">
                            <div class="effect-box">
                                <div class="thumb">
                                    <img src="{{ asset('assets/images/8.jpg') }}" alt="thumb">
                                </div>
                                <div class="info">
                                    <div class="left">
                                        <h4><a href="gallery-single.html">Global Business</a></h4>
                                        <p>business, finance</p>
                                    </div>
                                    <div class="right">
                                        <a href="assets/img/portfolio/8.jpg" class="item popup-link"><i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="pf-item">
                            <div class="effect-box">
                                <div class="thumb">
                                    <img src="{{ asset('assets/images/1.jpg') }}" alt="thumb">
                                </div>
                                <div class="info">
                                    <div class="left">
                                        <h4><a href="gallery-single.html">Success Report</a></h4>
                                        <p>business, finance</p>
                                    </div>
                                    <div class="right">
                                        <a href="assets/img/portfolio/4.jpg" class="item popup-link"><i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="pf-item">
                            <div class="effect-box">
                                <div class="thumb">
                                    <img src="{{ asset('assets/images/6.jpg') }}" alt="thumb">
                                </div>
                                <div class="info">
                                    <div class="left">
                                        <h4><a href="gallery-single.html">Marketing Plan</a></h4>
                                        <p>business, finance</p>
                                    </div>
                                    <div class="right">
                                        <a href="assets/img/portfolio/6.jpg" class="item popup-link"><i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
