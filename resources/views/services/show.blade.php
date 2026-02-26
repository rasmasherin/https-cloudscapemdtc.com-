@extends('layouts.app')

@section('content')
@include('topper')
@include('navigation')

<div class="container py-5">
    <h1 class="mb-4">{{ $service->title }}</h1>

    @if($service->image)
        <img src="{{ asset('storage/'.$service->image) }}" class="img-fluid mb-3" alt="{{ $service->title }}">
    @endif

    @if($service->icon)
        <img src="{{ asset('storage/'.$service->icon) }}" style="width:60px;height:60px;" class="mb-3" alt="Icon">
    @endif

    <p>{{ $service->description }}</p>

    @if($service->features)
        <h5>Features:</h5>
        <ul>
            @foreach($service->features as $feature)
                <li>{{ $feature }}</li>
            @endforeach
        </ul>
    @endif

    <a href="{{ route('services.index') }}" class="btn btn-secondary mt-3">Back to Services</a>
</div>

@include('footer')
@endsection
