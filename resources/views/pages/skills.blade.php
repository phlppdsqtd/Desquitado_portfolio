@extends('layouts.content')
@section('content')
<h2 class="text-jungle mb-4 pb-2 border-bottom border-success">Skills</h2>
<div class="row">
    @foreach($skills as $skill)
    <div class="col-md-4 mb-3">
        <div class="card card-minimal p-3 text-center">
            
            <div class="mb-2">
                <i class="bi {{ $skill->icon_name }} fs-1 text-jungle"></i>
            </div>
            
            <span class="fw-bold">{{ $skill->name }}</span>
            <small class="text-muted">{{ $skill->category }}</small>
            
            <span class="badge bg-jungle mt-2">{{ $skill->level }}</span>
            
        </div>
    </div>
    @endforeach
</div>
@endsection