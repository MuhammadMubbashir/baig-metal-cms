@extends("components.master")
@section('admin')

   <!-- Start Banner
    ============================================= -->
    <div class="banner-area banner-size" >
        <div id="bootcarousel" class="carousel inc-top-heading slide animate_text" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner text-light carousel-zoom">
                <div class="item active bg-cover" style="background-image: url({{ asset('assets/images/banner-images/banner-1.png') }});">
                    <div class="box-table shadow dark">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-2"></div>
                                    <div class="col-md-12 ">
                                        <div class="content">
                                            <h3 data-animation="animated slideInUp" class="banner-text">Welcome to <span>Baig Metal Craft Where</span></h3>
                                            <h2 data-animation="animated slideInDown" class="banner-text" style="font-size: 41px;background-color: #d7642b;padding: 1px;">Quality is not an act, It is a habit</h2>
                                            <p class="text-white">excellence in Sheet Metal Stampings & Precision Brass Machined OEM components since 2003</h2>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item bg-cover" style="background-image: url({{ asset('assets/images/banner-images/banner-2.jpg') }});">
                    <div class="box-table shadow dark">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="content">
                                            <h2 data-animation="animated slideInDown" class="banner-text" style="font-size: 41px;">ENGINEERING</h2>
                                            <p >We design customize Tools as per our customer’s Drawings. Also we have Reverse Engineering capabilities to design the Tools and Dies, if the Cad Data / Drawings are not available.</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item bg-cover" style="background-image: url({{ asset('assets/images/banner-images/banner-3.jpg') }});">
                    <div class="box-table shadow dark">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="content">
                                            <h2 data-animation="animated slideInDown" class="banner-text" style="font-size: 41px;">STAMPING</h2>
                                            <p >
                                                Our Core activity is Stamping, below is details of Stamping shop.</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item bg-cover" style="background-image: url({{ asset('assets/images/banner-images/banner-4.jpg') }});">
                    <div class="box-table shadow dark">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="content">
                                            <h2 data-animation="animated slideInDown" class="banner-text" style="font-size: 41px;">WELDING</h2>
                                            <p >
                                                Baig metal crafts welding shop is equipped with following:- Spot Welding, Projection Welding, Mig Welding, Automatic circular MIG Welding
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item bg-cover" style="background-image: url({{ asset('assets/images/banner-images/banner-5.jpg') }});">
                    <div class="box-table shadow dark">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="content">
                                            <h2 data-animation="animated slideInDown" class="banner-text" style="font-size: 41px;">PRECISION MACHINING</h2>
                                            <p>The Baig Metal Crafts is in precision machining since 2016, machine shop is equipped with the Cam Driven Swiss Sliding Head Auto Lathes.</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Wrapper for slides -->

            <!-- Left and right controls -->
            <a class="left carousel-control shadow" href="#bootcarousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control shadow" href="#bootcarousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
  <!-- Start Why Choose Us
    ============================================= -->
    <div class="container-fluid">
        <div class="choose-us-area ">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 ">
                    <div class="site-heading text-center">
                        <h2 class=" text-top1 ">About US</h2>
                        <p class="about-us-paragraph">
                            We are a dedicated team committed to providing the best solutions for our clients. Our expertise and passion drive us to deliver exceptional results and continuously innovate in our field.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Fixed Shape -->
            <div class="fixed-shape">
                <img src="{{ asset('assets/images/building-bg.png') }}" alt="Shape">
            </div>
            <!-- End Fixed Shape -->
            <div class="container">
                <div class="row item-flex center">
                    <div class="col-md-6 thumb">
                        <div class="thumb-box">
                            <img src="{{ asset('assets/images/about/Mission-Vision-1024x678.jpg') }}" alt="Thumb">
                            <img src="{{  asset('assets/images/about/RCvpHE.jpg') }}" alt="Thumb">
                        </div>
                    </div>
                    <div class="col-md-6 info">
                        <div class="content">
                            <!-- <h4>Why Choose Us</h4> -->
                            <h2 style="margin-bottom: -5px;">Our Vision</h2>
                            <p >
                                To become the reliable Stamping services provider in Global market by adding value for the stakeholders.
                            </p>
                            <h2 style="margin-bottom: -3px;">Our Mission</h2>
                            <p>
                                We are constantly striving to contribute to the Stamping industry by producing tailored Stampings with customer eccentric.  Our forte is Quality, Delivery, and Cost. Our process are embedded with sustainability, continuous monitoring, continuous improvement, and stressing core values at large.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
       </div>
        <!-- End Why Choose Us -->
           <!-- Star Team Area
        ============================================= -->
        <div class="mt-5">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="site-heading text-center mt-5">
                            <h2 class="text-top1 mt-5"> Our Client</h2>
                        </div>
                    </div>
                </div>
                <div class="brand-carousel section-padding owl-carousel">
                    <div class="single-logo"><img alt="" src="{{  asset('assets/images/Logo/honda.png') }}"></div>
                    <div class="single-logo"><img alt="" src="{{  asset('assets/images/Logo/Landirenzo.png') }}"></div>
                    <div class="single-logo"><img alt="" src="{{  asset('assets/images/Logo/loads.png') }}"></div>
                    <div class="single-logo"><img alt="" src="{{  asset('assets/images/Logo/ssgc.png') }}"></div>
                    <div class="single-logo"><img alt="" src="{{  asset('assets/images/Logo/suzuki.png') }}"></div>
                    <div class="single-logo"><img alt="" src="{{  asset('assets/images/Logo/toyota.png') }}"></div>
                    <div class="single-logo"><img alt="" src="{{  asset('assets/images/Logo/yamaha.png') }}"></div>
                </div>
            </div>
        </div>
        <!-- End Team Area -->

    <!-- Start Our Services
    ============================================= -->
    <div class="modern-services-area bg-gray default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading text-center">
                        {{-- <h4>Our services list</h4> --}}
                        <h2>What we’re offering</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="services-box text-center">
                    <!-- Single Item -->
                    <div class="single-item col-md-3 col-sm-6">
                        <div class="item">
                            <div class="icon">
                                <i class="flaticon-creativity"></i>
                            </div>
                            <div class="content">
                                <h4>Clients Management</h4>
                                <p>
                                    We understand the importance always approaching each work point integrally and believe.
                                </p>
                                <a href="#">Read More <i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-md-3 col-sm-6">
                        <div class="item">
                            <div class="icon">
                                <i class="flaticon-result"></i>
                            </div>
                            <div class="content">
                                <h4>Business Strategy</h4>
                                <p>
                                    We understand the importance always approaching each work point integrally and believe.
                                </p>
                                <a href="#">Read More <i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-md-3 col-sm-6">
                        <div class="item">
                            <div class="icon">
                                <i class="flaticon-meeting"></i>
                            </div>
                            <div class="content">
                                <h4>Resource Allocation</h4>
                                <p>
                                    We understand the importance always approaching each work point integrally and believe.
                                </p>
                                <a href="#">Read More <i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-md-3 col-sm-6">
                        <div class="item">
                            <div class="icon">
                                <i class="flaticon-money-1"></i>
                            </div>
                            <div class="content">
                                <h4>Capital Markets</h4>
                                <p>
                                    We understand the importance always approaching each work point integrally and believe.
                                </p>
                                <a href="#">Read More <i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5" >
        <div class="row">
            <div class="col-md-8 col-md-offset-2 ">
                <div class="site-heading text-center mt-5">
                    <h2 class="mt-5 text-top1">services</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- <h2 class="mt-5 text-center">Our services list</h2> -->

            <div class="col-lg-4 col-md-6 col-sm-12">
                <a href="#" class="card">
                  <div class="card__head">
                    <div class="card__image" style="background-image: url({{ asset('assets/images/services/Tool-Die-Designing-final-1024x607.png') }});"></div>
                    <div class="card__author">
                      <div class="author">
                        <i class="fas fa-cogs fa-3x"></i>
                        <div class="author__content">
                          <p class="author__header text-white">Engineering</p>
                          <p class="author__subheader">Precision Tool and Die Design</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card__body">
                    <h2 class="card__headline">Engineering</h2>
                    <p class="card__text">
                      At Baig Metal Company, we specialize in designing and customizing tools according to our customers' specifications. We also offer reverse engineering services for tool and die design when CAD data or drawings are unavailable. Our team uses advanced software to ensure precision and efficiency in all our projects.
                    </p>
                  </div>
                  <div class="card__foot">
                    <span class="card__link">Read more</span>
                  </div>
                  <div class="card__border"></div>
                </a>
              </div>

          <div class="col-lg-4 col-md-6 col-sm-12">
            <a href="#" class="card">
              <div class="card__head">
                <div class="card__image" style="background-image: url({{ asset('assets/images/services/DSC_0290-768x509.jpg') }});"></div>
                <div class="card__author">
                  <div class="author">
                    <i class="fas fa-tools fa-3x"></i>
                    <div class="author__content">
                      <p class="author__header">Welding</p>
                      <p class="author__subheader">Precision Welding Services</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card__body">
                <h2 class="card__headline">Welding</h2>
                <p class="card__text">
                  At Baig Metal Company, we offer top-notch welding services utilizing the latest technology and techniques. Our skilled welders ensure strong, precise, and clean welds for all types of metal projects. Whether it’s for structural components or custom fabrication, our welding services provide durability and reliability to meet your specific requirements.
                </p>
              </div>
              <div class="card__foot">
                <span class="card__link">Read more</span>
              </div>
              <div class="card__border"></div>
            </a>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-12">
            <a href="#" class="card">
              <div class="card__head">
                <div class="card__image" style="background-image: url({{ asset('assets/images/services/stamping-02.jpg') }});"></div>
                <div class="card__author">
                  <div class="author">
                    <i class="fas fa-hammer fa-3x"></i>
                    <div class="author__content">
                      <p class="author__header">Stamping</p>
                      <p class="author__subheader">Expert Metal Stamping Services</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card__body">
                <h2 class="card__headline">Stamping</h2>
                <p class="card__text">
                  Baig Metal Company specializes in precision metal stamping to meet a wide range of industrial needs. Our state-of-the-art stamping technology allows us to produce high-quality, intricate parts with exceptional accuracy and efficiency. Whether you need prototypes or large production runs, our stamping services ensure reliability and durability for...
                </p>
              </div>
              <div class="card__foot">
                <span class="card__link">Read more</span>
              </div>
              <div class="card__border"></div>
            </a>
          </div>

        </div>

        <div class="row" style="margin-top: 83px;">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <a href="#" class="card">
                  <div class="card__head">
                    <div class="card__image" style="background-image: url({{ asset('assets/images/services/PRECISIONMACHINING.jpg') }});"></div>
                    <div class="card__author">
                      <div class="author">
                        <i class="fas fa-cogs fa-3x"></i>
                        <div class="author__content">
                          <p class="author__header">Precision Machining</p>
                          <p class="author__subheader">Expert precision machining services for high-quality metal components.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card__body">
                    <h2 class="card__headline">Precision Machining</h2>
                    <p class="card__text">
                      At Baig Metal Company, we provide state-of-the-art precision machining services. Our advanced machinery and experienced team ensure that every component meets the highest standards of accuracy and quality. Whether you need custom parts for industrial applications or intricate components for specialized machinery, we have the expertise and equipment to deliver exceptional results.
                    </p>
                  </div>
                  <div class="card__foot">
                    <span class="card__link">Read more</span>
                  </div>
                  <div class="card__border"></div>
                </a>
              </div>

              <div class="col-lg-6 col-md-6 col-sm-12">
                <a href="#" class="card">
                  <div class="card__head">
                    <div class="card__image" style="background-image: url({{ asset('assets/images/services/QUALITY-ASSURANCE-01-768x1024.png') }});"></div>
                    <div class="card__author">
                      <div class="author">
                        <i class="fas fa-check-circle fa-3x"></i>
                        <div class="author__content">
                          <p class="author__header">Quality Assurance</p>
                          <p class="author__subheader">Ensuring top-notch quality in every project</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card__body">
                    <h2 class="card__headline">Quality Assurance</h2>
                    <p class="card__text">
                      At Baig Metal Company, our commitment to quality is unwavering. We implement rigorous quality assurance processes to ensure that every product meets the highest standards. Our dedicated team performs thorough inspections and tests to guarantee that our components are reliable and perform flawlessly. Trust us to deliver products that exceed your expectations in both quality and precision.
                    </p>
                  </div>
                  <div class="card__foot">
                    <span class="card__link">Read more</span>
                  </div>
                  <div class="card__border"></div>
                </a>
              </div>

          </div>
      </div>
    <!-- End Our Services -->


    <div class="mt-5">
        <div class="container mt-2">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading text-center mt-5">
                        <h2 class="text-top1 mt-5"> Certifications</h2>
                    </div>
                </div>
            </div>
            <div class="brand-carousel section-padding owl-carousel" id="brand-carousel">
                <div class="single-logo"><img alt="" src="{{ asset('assets/images/certificate/download (1).png') }}"></div>
                <div class="single-logo"><img alt="" src="{{ asset('assets/images/certificate/download.jpg') }}"></div>
                <div class="single-logo"><img alt="" src="{{  asset('assets/images/certificate/download.png') }}"></div>
            </div>

        </div>
    </div>

    <!-- Start Contact Area
    ============================================= -->
    <div class="contact-area default">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="site-heading text-center">
                    <h2 class="text-top1"> Contact Us</h2>
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
