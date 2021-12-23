
<!-- branche navarre service( extend=> menu.blade.php) -->
<!-- @section('menu')
				@foreach($categories as $categorie)                 
                        <li><a href="{{url('/services/'.$categorie->slug)}}">{{$categorie->name}}</a></li>
                @endforeach
    @endsection -->

	<!--end=> branche navarre service  -->

@extends('master')
    @section('content')


   <br><br> <br><br><br> 
   <!-- introduction -->

<div class="container section-padding-10">
    <div class="row">
        <div class="col-12">
            <div class="col-md-6 col-lg-12">
                <div class="animate__animated animate__bounceInUp   wow zoomIn" data-wow-delay="0.2s">
                    <h3 style="font-family:Times New Roman, Times, serif;"> Les Services </h3> 
                </div>
               
            </div>
        </div>
    </div>

    
</div>

  <!--end introduction -->
    <!--================Blog Area =================-->
    <div class="blog_area section-padding-100-50">
        <div class="container">
            <div class="row">
                <!-- Single Blog Area -->
                @foreach($posts->chunk(9) as $chunk)
                @foreach($chunk as $post)
                @if($post->category)
                <div class="col-md-6 col-lg-4">
                    <div class="single-blog-area mb-50">
                        <!-- Single Blog Thumb -->
                        <div class="blog-thumb" style="width: 150;height: 10;">
                           
                        <a  href="{{ url('/blog/'.$post->slug)}}">
                            <img src="{{ asset('/storage/'.$post->image)}}" alt="" style=" border-radius: 8px; ">
                        </a>
                        
                            <div class="blog-badge">{{$post->category->slug}}</div>
                            
                        </div>
                        <!-- Single Blog Content -->
                        <div class="single-blog-content mt-20">
                            <span>{{Carbon\Carbon::parse($post->created_at)->toFormattedDateString()}}</span>
                            <a href="single-blog.html">
                                <h5>{{$post->title}}</h5>
                            </a>
                            <p>{{ Str::limit($post->excerpt, 30)}}...<a href="{{ url('/blog/'.$post->slug)}}">Read more</a></p>
                        </div>
                        
                    </div>
                </div>
                @endif
                @endforeach
                @endforeach

                
            </div>
         <!-- pagination!!!!!! -->
            <nav class="blog-pagination justify-content-center d-flex mb-50">
                <div class="column is-half" align="left">
                       @if(!($posts->currentPage() ==1 ))
                        <a href="{{$posts->previousPageUrl()}}" class="button is-dark" style="padding: 10px 100px;">
                        <!-- <span>Precedent</span> -->
                        <button type="submit" class="btn btn-dark">&laquo; Previous</button>     
                        </a>
                         @endif 
                </div>
                <div class="column is-half" align="right">
                   @if($posts->hasMorePages())

                   <a href="{{$posts->nextPageUrl()}}" class="button is-dark" style="padding: 10px 100px;">
                   <!-- <span>Suivant</span> -->
                   <button type="submit" class="btn btn-dark">Next &raquo;</button>     
                   </a>
                   @endif            
                </div>
            </nav>
        <!--end  pagination!!!!!! -->

        </div>
    </div>
    <!--================Blog Area =================-->
     <!--================réalisé par anwar mohamed elkahza =================-->

    @endsection