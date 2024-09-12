@extends("components.master")
@section('admin')
<div class="page-title-area shadow dark bg-fixed text-center text-light" style="background-image: url({{ asset('assets/images/banner-images/banner-1.png') }});">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h1>Who We Are</h1>
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
                    <li><a href="#">About</a></li>
                    <li class="active">Who We Are</li>
                </ul>
            </div>
        </div>
    </div>
</div>




<!-- who we are start -->
<div class="about-area">
<div class="container">
    <div class="row">
        <!-- Start About Content -->
        <div class="about-content content-left">
            <div class="col-md-5 info">
                <h2>About Baig Metal</h2>
                <p>
                   Baig Metal Crafts started Sheet metal Stamping business with a humble start in 2003, as Tier 2, Vendor/Supplier to OEM’s i.e. Toyota, Suzuki, and Honda. Since then we have expanded our facility and became Tier1, Vendor/Supplier to Yamaha, Landi Renzo Pakistan (CNG Regulator Manufacturer – Italian Based), and Sui Southern Gas Company (Natural Gas Distributor and Diaphragm Gas Meter Manufacturer – Pakistan). </p>
        </div>
            <div class="col-md-7 thumb">
                <img src="{{  asset('assets/\images\engineering/service-02-1024x832.jpg') }}" alt="Thumb">
                <img src="{{ asset('assets/images/about/RCvpHE.jpg') }}" alt="Thumb">
            </div>
        </div>
        <!-- End About -->

    </div>
</div>
</div>
<!-- who we are end -->
@endsection
