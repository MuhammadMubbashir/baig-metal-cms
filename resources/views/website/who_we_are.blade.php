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
<div class="about-area default-padding">
<div class="container">
    <div class="row">
        <!-- Start About Content -->
        <div class="about-content content-left">
            <div class="col-md-6 info">
                <h2>We're knowledgeable about making benefits higher</h2>
                <p>
                    Demesne far hearted suppose venture excited see had has. Dependent on so extremely delivered by. Yet &#xFEFF;no jokes worse her why. Bed one supposing breakfast day fulfilled off depending questions. Whatever boy her exertion his extended. Ecstatic followed handsome drawings entirely mrs one yet outweigh. Of acceptance insipidity remarkably is invitation.
                </p>
                <ul>
                    <li><i class="icon_check"></i> Solution for small &amp; large businesses</li>
                    <li><i class="icon_check"></i> Ease you get credit loan amount in your bank account</li>
                </ul>
                <div class="author">
                    <div class="content">
                        <div class="thumb">
                            <img src="{{ asset('assets/images/1_1.jpg') }}" alt="Thumb">
                        </div>
                        <div class="info">
                            <h4>William Blanchard</h4>
                            <span>CEO &amp; Company founder</span>
                        </div>
                    </div>
                    <div class="signature">
                        <img src="{{  asset('assets/images/signature.png') }}" alt="signature">
                    </div>
                </div>
            </div>
            <div class="col-md-6 thumb">
                <img src="{{  asset('assets/images/7.jpg') }}" alt="Thumb">
                <img src="{{ asset('assets/images/6.jpg') }}" alt="Thumb">
            </div>
        </div>
        <!-- End About -->

    </div>
</div>
</div>
<!-- who we are end -->
@endsection
