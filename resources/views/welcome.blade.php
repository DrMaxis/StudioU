@extends('layouts.ui')

@section('xcss')
<style>

</style>

@endsection

@section('content')


@include('partials.welcome.intro')


@include('partials.welcome.projects')


@include('partials.welcome.contact')


@endsection


@section('xjs')
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.terminal/0.10.11/js/jquery.terminal.min.js'></script>
@endsection
