@extends('layouts.main')

@section('content')
    <div class="container mb-5">
        <h1>OUR class {{ $classroom->name }}</h1>
        <h6>{{ $classroom->id }}</h6>

        <p>{{ $classroom->description }}</p>

        <div class="mb-3">{{ $classroom->created_at }}</div>
        <div class="mb-3">{{ $classroom->updated_at }}</div>
    </div>
@endsection