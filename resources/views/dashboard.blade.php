@extends('layouts.main')

@section('content')
<div class="col-xl-12 mb-5 mb-xl-0">
    @if (session()->has('login'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('login') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    <h1 class="text-left">Welcome back, {{ auth()->user()->name }} !</h1>
    <br>
    <h3>Kamu login dengan level {{ auth()->user()->role }}</h3>
</div>
@endsection
