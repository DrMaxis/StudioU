<!--/-/-/-/-/-/-/-/-/
    Begin New & Featured Products
-/-/-/-/-/-/-/-/-/-->
<div class="new-products-banner vc pb-100">
        <div class="container">
            <div class="row mb-100">
                <!--/-/-/-/-/-/-/-/-/ 
                        Begin Single Banner  
                    -/-/-/-/-/-/-/-/-/-->

                    @foreach($works as $work) 
                    <div class="col-sm-5 img-banner-r skewl ">
                   
                           
                            
                            <div class="img-banner-content-r">
          
                            <a href="{{route('single-work', $work->slug)}}">
                          
                                <img class="banner-main-img" src="{{contentImage($work->image)}}" alt="project-banner">
                            </a>
        
                        
                        </div>
                    </div>
                    @endforeach
                <!--/-/-/-/-/-/-/-/-/ 
                        End Single Banner  
                    -/-/-/-/-/-/-/-/-/-->
            </div>

        
            <div class="intro-section-links">
                    <div class="col-md-6 col-sm-3 m0-a mt-40">
                        <div class="intro-links">

                            <ul class="list-inline">
                                <li class="intro-link list-inline-item">
                                    <a href="{{route('front-page')}}">Home</a>
                                </li>
                                <li class="intro-link list-inline-item">
                                    <a href="https://github.com/DrMaxis">Github</a>
                                </li>
                                <li class="intro-link list-inline-item">
                                    <a href="{{getResume($aboutMe->resume)}}">Resume</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>


        </div>
        <!--/-/-/-/-/-/-/-/-/ 
                End Container 
            -/-/-/-/-/-/-/-/-/-->
    </div>
    <!--/-/-/-/-/-/-/-/-/ 
            End New Products Banner 
        -/-/-/-/-/-/-/-/-/-->