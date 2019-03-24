  
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

<script>


(function () {
    const items = document.querySelectorAll('#scimg');
const itemCount = items.length;
const nextItem = document.querySelector('.next');
const previousItem = document.querySelector('.previous');
let count = 0;

function showNextItem() {
  items[count].classList.remove('active');

  if(count < itemCount - 1) {
    count++;
  } else {
    count = 0;
  }

  items[count].classList.add('active');
  console.log(count);
}

function showPreviousItem() {
  items[count].classList.remove('active');

  if(count > 0) {
    count--;
  } else {
    count = itemCount - 1;
  }

  items[count].classList.add('active');
  console.log(count);
}

nextItem.addEventListener('click', showNextItem);
previousItem.addEventListener('click', showPreviousItem);
})();



</script>
@endsection