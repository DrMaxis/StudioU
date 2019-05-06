  
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