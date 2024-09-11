@extends("components.master")
@section('admin')

<div class="page-title-area shadow dark bg-fixed text-center text-light"
        style="background-image: url({{ asset('assets/images/banner-images/banner-1.png') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Quality Policy</h1>
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
                        <li class="active">Quality Policy</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>



<!-- qulity Start -->
<div class="expertise-area shape-theme default-padding bg-cover mt-5" style="background-image: url({{ asset('assets/images/1.jpg') }});">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-6 our-expertise text-light">
                <h4>Our expertise</h4>
                <div class="expertise-items">
                    <div class="item">
                        <h2>Market Research</h2>
                        <p>
                            Now led tedious shy lasting females off. Dashwood marianne in of entrance be
                            on wondered possible building. Wondered sociable he carriage in speedily
                            margaret. Up devonshire of he thoroughly insensible alteration. An mr
                            settling occasion insisted distance ladyship so. Not attention say frankness
                            intention out dashwoods now curiosity. Stronger ecstatic as no judgment
                            daughter speedily thoughts. Worse downs nor might she court did nay forth
                            these.
                        </p>
                        <ul>
                            <li>
                                <h4>Completed projects</h4>
                                <span>30K</span>
                            </li>
                            <li>
                                <h4>Success Rate</h4>
                                <span>90%</span>
                            </li>
                        </ul>
                        <a class="btn btn-light border btn-md" href="#">Get Started</a>
                    </div>
\
                </div>
            </div>
        </div>
    </div>
</div>
<!-- qulity End -->
@endsection
