@extends('layouts.content')
@section('content')
<h2 class="text-jungle mb-4 pb-2 border-bottom border-success">Projects</h2>
<div class="row">
    @foreach($projects as $project)
    <div class="col-md-6 mb-4">
        <div class="card card-minimal p-4 h-100">
            <h4 class="text-jungle">{{ $project->title }}</h4>
            <p>{{ $project->description }}</p>
            <small class="text-muted fw-bold">Tech: {{ $project->technologies }}</small>
        </div>
    </div>
    @endforeach
</div>
@endsection