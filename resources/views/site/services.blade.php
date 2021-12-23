
<!-- branche navarre service( extend=> menu.blade.php) -->
@section('menu')
				@foreach($categories as $categorie)                 
                        <li><a href="{{url('/posts/'.$categorie->slug)}}">{{$categorie->name}}</a></li>
                @endforeach
    @endsection

	<!--end=> branche navarre service  -->
@extends('master')
    @section('content')
   

    <!-- Header Area End -->

    <!-- Breadcrumb-start -->
    <section class="breadcrumb breadcrumb_bg bg-overlay bg-img" style="background-image: url(img/bg-img/10.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item text-center">
                            <h2>Service</h2>
                            <p><a href="index.html">Home .</a> <span>Service</span></p>
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
                            <img src="img/icon-img/1.svg" alt="">
                        </div>
                        <!-- Single Feature Text -->
                        <div class="feature-content-text">
                            <h4>Drag &amp; Drop Building</h4>
                            <p class="mb-0">Add, delete and move elements around on the front end of your website. No coding and no confusing back end options.</p>
                        </div>
                    </div>
                </div>

                <!-- Single Feature area -->
                <div class="col-md-6 col-lg-4">
                    <div class="single-feature-area text-center">
                        <!-- Feature Icon -->
                        <div class="feature-icon">
                            <img src="img/icon-img/2.svg" alt="">
                        </div>
                        <!-- Single Feature Text -->
                        <div class="feature-content-text">
                            <h4>Drag &amp; Drop Building</h4>
                            <p class="mb-0">Add, delete and move elements around on the front end of your website. No coding and no confusing back end options.</p>
                        </div>
                    </div>
                </div>

                <!-- Single Feature area -->
                <div class="col-md-6 col-lg-4">
                    <div class="single-feature-area text-center">
                        <!-- Feature Icon -->
                        <div class="feature-icon">
                            <img src="img/icon-img/3.svg" alt="">
                        </div>
                        <!-- Single Feature Text -->
                        <div class="feature-content-text">
                            <h4>Drag &amp; Drop Building</h4>
                            <p class="mb-0">Add, delete and move elements around on the front end of your website. No coding and no confusing back end options.</p>
                        </div>
                    </div>
                </div>

                <!-- Single Feature area -->
                <div class="col-md-6 col-lg-4">
                    <div class="single-feature-area text-center">
                        <!-- Feature Icon -->
                        <div class="feature-icon">
                            <img src="img/icon-img/4.svg" alt="">
                        </div>
                        <!-- Single Feature Text -->
                        <div class="feature-content-text">
                            <h4>Drag &amp; Drop Building</h4>
                            <p class="mb-0">Add, delete and move elements around on the front end of your website. No coding and no confusing back end options.</p>
                        </div>
                    </div>
                </div>

                <!-- Single Feature area -->
                <div class="col-md-6 col-lg-4">
                    <div class="single-feature-area text-center">
                        <!-- Feature Icon -->
                        <div class="feature-icon">
                            <img src="img/icon-img/5.svg" alt="">
                        </div>
                        <!-- Single Feature Text -->
                        <div class="feature-content-text">
                            <h4>Drag &amp; Drop Building</h4>
                            <p class="mb-0">Add, delete and move elements around on the front end of your website. No coding and no confusing back end options.</p>
                        </div>
                    </div>
                </div>

                <!-- Single Feature area -->
                <div class="col-md-6 col-lg-4">
                    <div class="single-feature-area text-center">
                        <!-- Feature Icon -->
                        <div class="feature-icon">
                            <img src="img/icon-img/6.svg" alt="">
                        </div>
                        <!-- Single Feature Text -->
                        <div class="feature-content-text">
                            <h4>Drag &amp; Drop Building</h4>
                            <p class="mb-0">Add, delete and move elements around on the front end of your website. No coding and no confusing back end options.</p>
                        </div>
                    </div>
                </div>

                <!-- Single Feature area -->
                <div class="col-md-6 col-lg-4">
                    <div class="single-feature-area text-center">
                        <!-- Feature Icon -->
                        <div class="feature-icon">
                            <img src="img/icon-img/7.svg" alt="">
                        </div>
                        <!-- Single Feature Text -->
                        <div class="feature-content-text">
                            <h4>Drag &amp; Drop Building</h4>
                            <p class="mb-0">Add, delete and move elements around on the front end of your website. No coding and no confusing back end options.</p>
                        </div>
                    </div>
                </div>

                <!-- Single Feature area -->
                <div class="col-md-6 col-lg-4">
                    <div class="single-feature-area text-center">
                        <!-- Feature Icon -->
                        <div class="feature-icon">
                            <img src="img/icon-img/8.svg" alt="">
                        </div>
                        <!-- Single Feature Text -->
                        <div class="feature-content-text">
                            <h4>Drag &amp; Drop Building</h4>
                            <p class="mb-0">Add, delete and move elements around on the front end of your website. No coding and no confusing back end options.</p>
                        </div>
                    </div>
                </div>

                <!-- Single Feature area -->
                <div class="col-md-6 col-lg-4">
                    <div class="single-feature-area text-center">
                        <!-- Feature Icon -->
                        <div class="feature-icon">
                            <img src="img/icon-img/9.svg" alt="">
                        </div>
                        <!-- Single Feature Text -->
                        <div class="feature-content-text">
                            <h4>Drag &amp; Drop Building</h4>
                            <p class="mb-0">Add, delete and move elements around on the front end of your website. No coding and no confusing back end options.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!--================réalisé par anwar mohamed elkahza =================-->

    
	@endsection
   


   

    