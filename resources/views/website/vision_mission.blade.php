@extends("components.master")
@section('admin')
<div class="page-title-area shadow dark bg-fixed text-center text-light" style="background-image: url({{ asset('assets/images/banner-images/banner-1.png') }});">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h1>Vision & Mission</h1>
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
                    <li class="active">Vision & Mission</li>
                </ul>
            </div>
        </div>
    </div>
</div>



<!-- vision & mission Satrt -->
<div class="about-area solid default-padding">
<div class="container">
    <div class="about-items">
        <div class="row item-flex center">
            <div class="col-md-6 thumb-box">
                <div class="thumb">
                    <img src="{{ asset('assets/images/about/DSC_0261.JPG') }}" alt="Thumb">
                    <img src="{{ asset('assets/images/about/Mission-Vision-1024x678.jpg') }}" alt="Thumb">
                </div>
            </div>
            <div class="col-md-6 info">
                <h2>Vision</h2>
                <p>To become the reliable Stamping services provider in Global market by adding value for the stakeholders.  </p>
                <h2>Mission</h2>
                <p>We are constantly striving to contribute to the Stamping industry by producing tailored Stampings with customer eccentric.  Our forte is Quality, Delivery, and Cost. Our process are embedded with sustainability, continuous monitoring, continuous improvement, and stressing core values at large. </p>
               </div>
        </div>
    </div>
</div>
</div>
<!-- vision & mission End -->
@endsection
