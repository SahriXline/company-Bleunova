

@extends('master')
    @section('content')
   

    <!-- Header Area End -->

    <!-- Breadcrumb-start -->
    <section class="breadcrumb breadcrumb_bg bg-overlay bg-img" style="background-image: url({{url('img/banner2.jpg')}});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item text-center">
                            <h2>Service Export Import</h2>
                            <p><a href="{{ url('/') }}">Home .</a> <span>Service Export Import </span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb-end -->

    <div class="feature-area gray-bg section-padding-100-50" id="service">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Single Feature area -->
                <div class="col-md-6 col-lg-4">
                    <div class="single-feature-area text-center">
                        <!-- Feature Icon -->
                        <div class="feature-icon">
                            <img src="{{ asset('img/icon-img/1.svg') }}" alt="">
                        </div>
                        <!-- Single Feature Text -->
                        <div class="feature-content-text">
                        <h4>Services</h4>
                            <p class="mb-0">"BlueNova Import Export" has the goal to represent your 
                                products on a national and international level. Thanks to the wide network of partners around the world, your import 
                                and export of food products will surely be successful with us. Our customer list is always updated: we do not stop expanding
                                ......<a href="{{ url('service/exportimport/1')}}">Read more</a></p>
                        </div>
                    </div>
                </div>

                <!-- Single Feature area -->
                <div class="col-md-6 col-lg-4">
                    <div class="single-feature-area text-center">
                        <!-- Feature Icon -->
                        <div class="feature-icon">
                            <img src="{{ asset('img/icon-img/2.svg') }}" alt="">
                        </div>
                        <!-- Single Feature Text -->
                        <div class="feature-content-text">
                        <h4>Quick assistance</h4>
                            <p class="mb-0">BlueNova  Import Export is at your full disposal for the 
                                import or export of food products at any time. For questions and updates concerning your business, please contact our customer support and information desk. We will be happy to help you and respond to your requests as soon as possible.
                                ......
                                 <a href="{{ url('service/exportimport/2')}}">Read more</a></p>
                        </div>
                    </div>
                </div>

                <!-- Single Feature area -->
                <div class="col-md-6 col-lg-4">
                    <div class="single-feature-area text-center">
                        <!-- Feature Icon -->
                        <div class="feature-icon">
                            <img src="{{ asset('img/icon-img/3.svg') }}" alt="">
                        </div>
                        <!-- Single Feature Text -->
                        <div class="feature-content-text">
                        <h4>Professional team</h4>
                            <p class="mb-0">BlueNova Import Export team has all the necessary skills for the import and export of food products.
                                 We protect the image of companies that turn to us with a proposal 
                                 for importing or exporting food products and we are convinced that we fully protect their interests......
                                 <a href="{{ url('service/exportimport/3')}}">Read more</a></p>
                        </div>
                    </div>
                </div>

              
            </div>
        </div>
    </div>
     <!--================réalisé par anwar mohamed elkahza =================-->

    
	@endsection
   


   

    