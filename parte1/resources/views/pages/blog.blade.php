@extends('layouts.main-layout')

@section('content')
  <div class="content">
    <h1>Blog</h1>
    <h2><a class="" href="  {{Route('home')}}  ">Vai all'Home </a></h2>
    <h2><a class="" href="  {{Route('about')}}  ">Vai all'About</a></h2>
  </div>
@endsection
