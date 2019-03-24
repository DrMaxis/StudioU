  
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