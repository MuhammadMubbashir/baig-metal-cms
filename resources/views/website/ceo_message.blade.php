@extends("components.master")
@section('admin')

<div class="page-title-area shadow dark bg-fixed text-center text-light" style="background-image: url({{ asset('assets/images/banner-images/banner-1.png') }});">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h1>CEO's Message</h1>
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
                    <li class="active">CEO's Message</li>
                </ul>
            </div>
        </div>
    </div>
</div>



<!-- Ceo Satrt -->
<div class="about-area fixed-features default-padding-bottom mt-5">
<div class="container">
   <div class="row about-items item-flex center">
        <div class="col-md-7 about-info">
            <h2>We're knowledgeable about <br> <strong>making benefits</strong> higher</h2>
            <p>
                Dashwoods eagerness oh extensive as discourse sportsman frankness. Husbands see disposed surprise likewise humoured yet pleasure. Fifteen no inquiry cordial so resolve garrets as. Impression was estimating surrounded solicitude indulgence son shy.
            </p>

        </div>
        <div class="col-md-5 thumb">
            <img src="{{ asset('assets/images/7.jpg') }}" alt="Thumb">
        </div>
    </div>

</div>
</div>
<!-- Ceo End -->
@endsection
