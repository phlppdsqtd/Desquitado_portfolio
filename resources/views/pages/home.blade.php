@extends('layouts.content')
@section('content')
<div class="row align-items-center min-vh-50 text-center">
    <div class="col-md-8 offset-md-2">
        
        <img src="{{ asset('images/logo.png') }}" alt="PMCD Logo" class="mb-4 img-fluid" style="max-height: 200px;">
        
        <h1 class="display-4 fw-bold text-jungle">{{ $profile->name }}</h1>
        <p class="lead mt-3">{{ $profile->about }}</p>
    </div>
</div>
@endsection