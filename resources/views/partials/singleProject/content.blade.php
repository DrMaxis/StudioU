<div class="project-content-area ptb-100 vc mt-40">
    <div class="container">
        <div class="row">

            <div class="col-md-8 col-sm-12 m0-a">
            
                <div class="project-details">
                    <div class="project-img">
                        <img src="{{contentImage($work->image)}}" alt="blog-image">
                    </div>

                    <h3 class="semi-title">{!!$work->subtitle!!}</h3>
                    <div class="mb-20 tpdesc">{!!$work->top_description!!}</div>

                    <div class="project-img project-single-img">
                        <div class="row">
                            <div class="col-sm-10 mt-30">
                                {{-- <img src="{{asset('assets/imgs/dummy/10.jpg')}}" alt="blog-image"> --}}
                                <div class="single-blog">

                                    <div class="blog-img">
                                            <div class="sliderWrapper">
                                                    <div class="slider">
                                                            <img id="scimg" class="active" src="{{contentImage($work->image)}}">
                                                        @if($work->showcase_images) @foreach(json_decode($work->showcase_images, true) as $image)
                                                      <img id="scimg"  src="{{contentImage($image)}}">
                                                      @endforeach
                                                    @endif
                                                    </div>
                                                    <nav class="slider-nav">
                                                      <ul>
                                                        <li class="arrow">
                                                          <a class="previous">
                                                            <span>
                                                              <i class="ion-arrow-left-c"></i>
                                                            </span>
                                                          </a>
                                                        </li>
                                                        <li class="arrow">
                                                          <a class="next">
                                                            <span>
                                                              <i class="ion-arrow-right-c"></i>
                                                            </span>
                                                          </a>
                                                        </li>
                                                      </ul>
                                                    </nav>
                                                  </div>


                                    </div>



                                </div>
                            </div>
                            {{--
                            <div class="col-sm-6 mt-30">
                                <img src="{{asset('assets/imgs/dummy/10.jpg')}}" alt="blog-image">
                            </div> --}}
                        </div>
                    </div>
                    <div class="mb-20 tpdesc">{!!$work->bottom_description!!}</div>

               
                    <div class="project-share mtb-50">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-6 m0-a">

                                <ul class="list-inline">
                                    <li class="list-inline-item" ><a href="{{$work->live_link}}"><span >Live Site</span></a></li>
                                    <li class="list-inline-item" ><a href="{{$work->git_link}}"><span >GitHub Project</span></a></li>
                                    <li class="list-inline-item" ><a href="{{route('front-page')}}"><span >Go Back</span></a></li>
                                    
                                </ul>
                            </div>
          
                        </div>
                      
                    </div>
                 
                  
                </div>
                
            </div>
        </div>
    </div>
</div>