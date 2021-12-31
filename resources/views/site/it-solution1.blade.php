<!-- branche navarre service( extend=> menu.blade.php) -->

@extends('master')
    @section('content')
<br><br><br><br>

<div class="container section-padding-10">
    <div class="row">
        <div class="col-12">
            <div class="col-md-6 col-lg-12">
               
                <div class="animate__animated animate__bounceInUp   wow zoomIn" data-wow-delay="0.2s">
                    <h3 style="font-family:Times New Roman, Times, serif;"> title</h3> 
                </div>
            </div>
        </div>
    </div>
</div>

<!-- header -->
    <div class="call-to-desc-area">
        <div class="container section-padding-100">
            <div class="row">
                <div class="col-12">
                    <div class="call-to-action-area">
                        <div class="row">
                            <div class="col-12">
                                <div class="call-to-title text-center mb-50">
                                    <h2 class="text-black mb-0  wow zoomIn  animate__pulse">title</h2>
                                </div>
                            </div>

                            <!-- Single Content -->
                            <div class="col-md-6 col-lg-4 animated slideInRight">
                                <div class="single-call-desc-content ca-mb-50">
                                <div class="feature-img">
                            <img class="img-fluid" src="{{ asset('img/expo.jpg') }}" alt="" style=" border-radius: 8px;">
                        </div>
                                </div>
                            </div>

                            <!-- Single Content -->
                         

                            <!-- Single Content -->
                            <div class="col-md-6 col-lg-8 animated slideInRight">
                                <div class="single-call-desc-content">
                                  
                                    <p class="text-black  mb-0 " >Al Majlis Trading is a company founded on local traditions that have evolved over many years to help us become a leading importer in Qatar. Al Majlis Trading imports
                                                                  the highest quality products from around the world to fulfil the extensive needs of an economy experiencing unprecedented growth.
                                  </p>
                                  <ul>
                                      <li>1 :text</li>
                                      <li>2 :text</li>
                                      <li>3 :text</li>
                                  </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================ Blog Area end =================-->
    <!--================réalisé par anwar mohamed elkahza =================-->

    @endsection
