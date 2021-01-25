@extends('layouts.main-layout')

@section('content')
  <div class="content">
    <h1>HomePage</h1>
    <h2><a class="" href="  {{Route('blog')}}  ">Vai al Blog </a></h2>
    <h2><a class="" href="  {{Route('about')}}  ">Vai all'About</a></h2>
  </div>
@endsection
