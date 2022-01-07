
@extends('master')
    @section('content')
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
    @endsection