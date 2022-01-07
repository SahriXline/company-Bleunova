
<header>

                    <nav class="navbar fixed-top  navbar-expand-lg navbar-white bg-white  ">
                    <div class="container">
                                    <div class="logo ">
                                        <a href="{{ url('/') }}">
                                                                        
                                            <img class="" src=" {{ asset('img/BlueNova.png') }}" alt="" style="width: 310px;">
                                                                            
                                        </a>
                                    </div>

                    <button class="navbar-toggler navbar-light bg-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse container" id="navbarSupportedContent" style="margin-left:200px">
                        <ul class="navbar-nav mr-auto " id="navigation">

                        <li class="">
                            <a class="nav-link" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="">
                            <a class="nav-link" href="{{ url('/about') }}">About</a>
                        </li>
                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Service
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{url('/service/travaux')}}">Construction FitOut</a>
                            <a class="dropdown-item" href="{{url('/service/exportimport')}}">Export Import</a>
                            <a class="dropdown-item" href="{{url('/service/it')}}">it-solution</a>
                            
                        </li>
                        <li class="">
                        
                            <a class="nav-link" href="{{ url('/blog') }}">Blog</a>
                        </li>
                        <li class="">
                        
                        <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
                    </li>
                        </ul>
                    
                    </div>
                    </div>
                    </nav>
  
</header>



