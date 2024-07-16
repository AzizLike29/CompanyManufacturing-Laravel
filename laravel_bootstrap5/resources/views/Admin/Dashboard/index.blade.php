@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center align-items-center min-vh-100">
  <div class="text-center">
    <img src="{{ URL::asset('img/coming-soon.jpg') }}" alt="coming-soon" class="mx-auto mb-4 w-100 h-auto" style="max-width: 12rem;">
    <h1 class="text-dark fw-bold fs-1">
      Selamat datang di dashboard kami!
    </h1>
  </div>
</div>
@endsection