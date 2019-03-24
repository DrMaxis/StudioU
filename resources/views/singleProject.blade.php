  
@extends('layouts.ui') 
@section('canonical-url')
{{URL::current()}}
@endsection
@section('xcss')



@endsection
 
@section('content') 
{{-- Orders Container --}}
@include('partials.singleProject.content')
@endsection

@section('xjs')


<script>


    
/*----------------------------
    9. Owl Carousel
    -----------------------------*/
 
        $('.owl-carousel').owlCarousel({
            stagePadding: 200,
            loop: true,
            margin: 10,
            nav: false,
            items: 1,
            dots: false,
            autoplay: true,
            lazyLoad: true,
            responsive: {
                0: {
                    items: 1,
                    stagePadding: 30
                },
                600: {
                    items: 1,
                    stagePadding: 100
                },
                1000: {
                    items: 1,
                    stagePadding: 200
                }
            }
        })





</script>

@endsection