<div class="project-content-area ptb-100 vc mt-40">
    <div class="container">
        <div class="row">

            <div class="col-md-8 col-sm-12 m0-a">
                <!-- Blog Details Start -->
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
                                                        @if($work->showcase_images) @foreach(json_decode($work->showcase_images, true) as $image)
                                                      <img id="scimg" class="active" src="{{contentImage($image)}}">
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
                    <p class="mb-20">{!!$work->bottom_description!!}</p>

                    <!--  Blog-Share Start  -->
                    <div class="project-share mtb-50">
                        <div class="row">
                            <div class="col-lg-4 col-md-5 col-sm-6 m0-a">

                                <ul class="list-inline">
                                    <li><a href="{{$work->live_link}}"><span class="pull-left">Live Site</span></a></li>
                                </ul>
                            </div>
                            <div class="col-lg-4 col-md-5 col-sm-6 m0-a text-center">

                                <ul class="list-inline">
                                    <li><a href="{{route('front-page')}}"><span class="">Go Back</span></a></li>
                                </ul>
                            </div>

                            <div class="col-lg-4 col-md-5 col-sm-6 m0-a">

                                <ul class="list-inline">
                                    <li><a href="{{$work->git_link}}"><span class="pull-right">GitHub Project</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End of Row -->
                    </div>
                    <!--  Blog-Share End  -->
                    <!--  Blog-Pager Start  -->

                    <!--  Blog-Pager End  -->
                </div>
                <!-- Blog Details End -->
                <!-- Blog Realated Post Start -->

                <!-- Blog Realated Post Start -->
                <!-- Comment Area Start -->

                <!-- Comment Area End -->
                <!-- Contact Email Area Start -->

                <!-- Contact Email Area End -->
            </div>
        </div>
    </div>
</div>