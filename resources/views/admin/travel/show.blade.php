@extends('admin.layout.master')

@section('title')
    Detail Travel Pack
@endsection

@section('index')
<div class="pagetitle">
    <h1>List Travel Pack</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item">Travel Packages</li>
            <li class="breadcrumb-item active">Detail Travel Pack</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<div class="card">
    <div class="card-body">
        <h5 class="card-title">Detail Travel Pack</h5>
        <div class="mt-2">
            <h6 class="mb-1">ID</h6>
            <p>{{ $travel->id }}</p>
        </div>
        <div class="mt-2">
            <h6 class="mb-1">Title</h6>
            <p>{{ $travel->title }}</p>
        </div>
        <div class="mt-2">
            <h6 class="mb-1">Slug</h6>
            <p>{{ $travel->slug }}</p>
        </div>
        <div class="mt-2">
            <h6 class="mb-1">Location</h6>
            <p>{{ $travel->location }}</p>
        </div>
        <div class="mt-2">
            <h6 class="mb-1">About</h6>
            <p>{{ $travel->about }}</p>
        </div>
        <div class="mt-2">
            <h6 class="mb-1">Featured Event</h6>
            <p>{{ $travel->featured_event }}</p>
        </div>
        <div class="mt-2">
            <h6 class="mb-1">Language</h6>
            <p>{{ $travel->language }}</p>
        </div>
        <div class="mt-2">
            <h6 class="mb-1">Foods</h6>
            <p>{{ $travel->foods }}</p>
        </div>
        <div class="mt-2">
            <h6 class="mb-1">Departure Date</h6>
            <p>{{ $travel->departure_date }}</p>
        </div>
        <div class="mt-2">
            <h6 class="mb-1">Duration</h6>
            <p>{{ $travel->duration }}</p>
        </div>
        <div class="mt-2">
            <h6 class="mb-1">Type</h6>
            <p>{{ $travel->type }}</p>
        </div>
        <div class="mt-2">
            <h6 class="mb-1">Price</h6>
            <p>{{ $travel->price }}</p>
        </div>
    </div>
</div>


@endsection