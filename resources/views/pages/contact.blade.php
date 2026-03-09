@extends('layouts.content')
@section('content')
<div class="row text-center mt-5">
    <div class="col-md-6 offset-md-3">
        <h2 class="text-jungle mb-4 pb-2 border-bottom border-success">Get In Touch</h2>
        <div class="card card-minimal p-5">
            <h5 class="mb-3">Feel free to reach out for collaborations or inquiries.</h5>
            <p class="mb-2"><strong>Email:</strong> {{ $profile->email }}</p>
            <p class="mb-2"><strong>Phone:</strong> {{ $profile->phone }}</p>
            <p class="mb-0"><strong>Location:</strong> {{ $profile->address }}</p>
        </div>
    </div>
</div>
@endsection