<div class="jumbotron vc transparent">

    <div class="container" style="z-index:10;">


        <div class="row">


            <div class="col-md-10 m0-a">


                <div class="intro-secton">


@foreach($aboutMe -> take(1) as $myInfo) 
                    <div class="col-md-6 col-sm-6 m0-a">
                
                        
                        <div class="single-blog">
                            <div class="blog-img">

                                <a href="#"><img class="avi-img" src="{{contentImage($myInfo->image)}}" alt="avi-image"></a>
                            </div>

                            <h2>{!!$myInfo->title!!}</h2>

                            <div class="intro-content">
                                <p class="mt-30">{!!$myInfo->description!!}</p>
                            </div>
                        </div>
                  
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

                <figure><embed src="https://wakatime.com/share/@Lotus/af48cbd3-673e-4eba-8ba3-a389d020f22c.svg"></embed></figure>


                <figure><embed src="https://wakatime.com/share/@Lotus/c5d7a4fe-ee34-474c-8425-7524b0119609.svg"></embed></figure>
            </div>
        </div>
    </div>
</div>
</div>