@extends('layouts.app')

@section('content')
<div class="flex justify-center min-h-screen items-center">
  <div>
    <img src="{{ URL::asset('img/coming-soon.jpg') }}" alt="coming-soon" class="mx-auto mb-4 w-48 h-auto">
    <h1 class="text-slate-700 font-bold text-3xl">
      Selamat datang di menu logout!
    </h1>
  </div>
</div>
@endsection