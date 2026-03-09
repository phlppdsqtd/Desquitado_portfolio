@extends('layouts.content')
@section('content')
<h2 class="text-jungle mb-4 pb-2 border-bottom border-success">Work Experience</h2>
@foreach($work as $job)
<div class="card card-minimal p-4 mb-4">
    <h4 class="text-jungle mb-1">{{ $job->title }}</h4>
    <h6 class="text-muted mb-3">{{ $job->company }} | {{ $job->duration }}</h6>
    <p class="mb-0">{{ $job->description }}</p>
</div>
@endforeach

<h2 class="text-jungle mb-4 pb-2 mt-5 border-bottom border-success">Education</h2>
@foreach($education as $edu)
<div class="card card-minimal p-4 mb-3">
    <h4 class="text-jungle mb-1">{{ $edu->title }}</h4>
    <h6 class="text-muted">{{ $edu->company }} | {{ $edu->duration }}</h6>
</div>
@endforeach
@endsection