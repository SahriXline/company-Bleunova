
<!-- branche navarre service( extend=> menu.blade.php) -->
<!-- @section('menu')
				@foreach($categories as $categorie)                 
                        <li><a href="{{url('/services/'.$categorie->slug)}}">{{$categorie->name}}</a></li>
                @endforeach
    @endsection -->

	<!--end=> branche navarre service  -->
@extends('master')
    @section('content')
   
    <!-- Breadcrumb-start -->
    <!-- <section class="breadcrumb breadcrumb_bg bg-overlay bg-img" style="background-image: url(img/bg-img/10.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item text-center">
                            <h2>About</h2>
                            <p><a href="index.html">Home .</a> <span>About us</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Breadcrumb-end -->

    <!-- About Area -->
    <div class="about-us-area section-padding-100-50" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="why-we-content-text mb-50">
                        <h1 class="mb-15">{{setting('bluenova.titleAboutUS')}}</h1>
                        <h6  style="font-family:Times New Roman, Times, serif;">{{setting('bluenova.About')}}</h6 >
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="why-we-thum mb-50">
                    <img src="img/BlueNova.png" alt="">
                        <img src="img/bg-img/29.png" alt="">
                    </div>
                </div>
            </div>

          
        </div>
    </div>
    <!-- About Area -->
     <!--================réalisé par anwar mohamed elkahza =================-->
    @endsection