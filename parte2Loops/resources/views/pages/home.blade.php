@extends('layouts.main-layout')

@section('section')

  @foreach ($pagamenti as $key => $pagamento)

    @if ($loop -> even)
        <li class="red">
    @else
        <li class="green">
    @endif
        {{ $pagamento['id'] }}
        {{ $pagamento['status'] }}
        {{ $pagamento['price'] }}
    </li>

  @endforeach

@endsection
