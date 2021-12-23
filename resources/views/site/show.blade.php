<!-- branche navarre service( extend=> menu.blade.php) -->
@section('menu')
				@foreach($categories as $categorie)                 
                        <li><a href="{{url('/services/'.$categorie->slug)}}">{{$categorie->name}}</a></li>
                @endforeach
    @endsection

	<!--end=> branche navarre service  -->
@extends('master')
    @section('content')

   
<br><br><br><br>

<div class="container section-padding-10">
    <div class="row">
        <div class="col-12">
            <div class="col-md-6 col-lg-12">
               
                <div class="animate__animated animate__bounceInUp   wow zoomIn" data-wow-delay="0.2s">
                    <h3 style="font-family:Times New Roman, Times, serif;"> {{$post->category->name}}</h3> 
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
                                    <h2 class="text-black mb-0  wow zoomIn  animate__pulse">{{$post->title}}</h2>
                                </div>
                            </div>

                            <!-- Single Content -->
                            <div class="col-md-6 col-lg-4 animated slideInRight">
                                <div class="single-call-desc-content ca-mb-50">
                                <div class="feature-img">
                            <img class="img-fluid" src="{{ asset('/storage/'.$post->image)}}" alt="" style=" border-radius: 8px;">
                        </div>
                                </div>
                            </div>

                            <!-- Single Content -->
                         

                            <!-- Single Content -->
                            <div class="col-md-6 col-lg-8 animated slideInRight">
                                <div class="single-call-desc-content">
                                    <!-- <h4>{{$post->title}}</h4> -->
                                    <p class="text-black  mb-0 " >{!!$post->body !!}</p>
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
