<div class="jumbotron vc transparent">

    <div class="container" style="z-index:10;">


        <div class="row">


            <div class="col-md-10 m0-a">


                <div class="intro-secton">


@foreach($aboutMe -> take(1) as $myInfo) 
                    <div class="col-md-6 col-sm-6 m0-a">
                        <!-- Single Blog Start -->
                        
                        <div class="single-blog">
                            <div class="blog-img">

                                <a href="#"><img class="avi-img" src="{{contentImage($myInfo->image)}}" alt="avi-image"></a>
                            </div>

                            <h2>{!!$myInfo->title!!}</h2>

                            <div class="intro-content">
                                <p class="mt-30">{!!$myInfo->description!!}</p>
                            </div>
                        </div>
                        <!-- Single Blog End -->
                    </div>
                    @endforeach
                </div>
                <div class="intro-section-links">
                    <div class="col-md-6 col-sm-3 m0-a">
                        <div class="intro-links">

                            <ul class="list-inline">
                                <li class="intro-link list-inline-item">
                                    <a href="{{route('works')}}">Current Work</a>
                                </li>
                                <li class="intro-link list-inline-item">
                                    <a href="https://github.com/DrMaxis">Github</a>
                                </li>
                                <li class="intro-link list-inline-item">
                                    <a href="{{getResume($myInfo->resume)}}">Resume</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
</div>