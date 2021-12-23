

                                                
<!-- branche navarre service( extend=> menu.blade.php) -->
<!-- @section('menu')
				@foreach($categories as $categorie)                 
                        <li><a href="{{url('/services/'.$categorie->slug)}}">{{$categorie->name}}</a></li>
                @endforeach
    @endsection -->
	<!--end=> branche navarre service  -->
@extends('master')
    @section('content')
 
    <div class="container">
            @if(session('status'))
                 <div class="notification is-success">
                     {{session('status')}}
                </div>
            @endif
        </div>          
     <!-- flash Message  form contact -->
    <!-- Contact Area Start -->
    <section class="contact-our-area section-padding-100-0" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h6>Contact</h6>
                        <h4>Contact with our support</h4>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-11 col-md-11 col-lg-5">
                    <div class="contact-bg-pattern mb-100">
                        <div class="contact-information">
                            <div class="contact-information">
                                <!-- Single Contact Info -->
                                <div class="single-contact-info d-flex align-items-center">
                                    <div class="icon">
                                        <i class="fa fa-location-arrow"></i>
                                    </div>
                                    <div class="contact-info">
                                        <h5 class="mb-1">Our head office address</h5>
                                        <p class="mb-0">202, Grasselli Street.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Contact Info -->
                            <div class="single-contact-info d-flex align-items-center mt-50">
                                <div class="icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="contact-info">
                                    <h5 class="mb-1">Call Us On</h5>
                                    <p class="mb-0">+8801254695</p>
                                </div>
                            </div>
                        </div>

                        <div class="contact-information">
                            <!-- Single Contact Info -->
                            <div class="single-contact-info d-flex align-items-center mt-50">
                                <div class="icon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="contact-info">
                                    <h5 class="mb-1">Email Us At</h5>
                                    <p class="mb-0">themezome@gmail.com</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
           
                <div class="col-lg-7">
                    <!-- Contact Form -->
                    <div class="contact_from_area clearfix mb-100">
                        <div class="contact_form">
                            <form action="{{url('/contact')}}" method="post" id="main_contact_form">
                                    {{csrf_field()}}
                                <div class="contact_input_area">
                                    <div id="success_fail_info"></div>
                                    <div class="row">
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30"  name="name" id="name"  value="{{old('name')}}" class="input  @if($errors->has('name'))is-danger @endif" placeholder="First Name" required>
                                            </div>
                                            @if($errors->has('name'))
                                                <p class="help is-danger">{{$errors->first('name')}}</p>
                                            @endif
                                        </div>
                                    
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control mb-30" name="email" value="{{old('email')}}" class="input  @if($errors->has('email'))is-danger @endif"  id="email" placeholder="E-mail" required>
                                            </div>
                                            @if($errors->has('email'))
                                                 <p class="help is-danger">{{$errors->first('email')}}</p>
                                            @endif
                                        </div>
                                       
                                        <!-- Form Group -->
                                        <div class="col-12">
                                            <div class="form-group">
                                                <textarea name="message" class="form-text-area mb-30"  id="message" cols="30" rows="6" class="textarea  @if($errors->has('message'))is-danger @endif" placeholder="Your Message *" required> {{old('message')}}</textarea>
                                            </div>
                                            @if($errors->has('message'))
                                                <p class="help is-danger">{{$errors->first('message')}}</p>
                                            @endif
                                        </div>
                                        <!-- Button -->
                                        <div class="col-12 text-center">
                                            <button type="submit" class="btn boxed-btn">Send Message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1662.0837717076856!2d-7.624488027757567!3d33.574998903159305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda7d2ba503044d9%3A0x683e3fd977d5160b!2zMTgxINi02KfYsdi5INi52KjYryDYp9mE2YXZiNmF2YbYjCDYp9mE2K_Yp9ixINin2YTYqNmK2LbYp9ihIDIwMDQy!5e0!3m2!1sar!2sma!4v1639570295234!5m2!1sar!2sma"
                 width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

        </div>
    </section>
    <!-- Contact Area End -->
    @endsection