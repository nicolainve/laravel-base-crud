@extends('layouts.main')

@section('content')
    <div class="container mb-5">
      <h1>Create</h1>

      @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif

      <form action="{{ route('classrooms.store') }}" method="POST">
          @csrf
          @method('POST')

          <div class="form-group">
              <label for="name">classroom name</label>
              <input type="text" class="form-control" name="name" value="{{ old('name') }}">
          </div>
          <div class="form-group">
              <label for="description">classroom description</label>
              <textarea class="form-control" name="description">{{ old('description') }}</textarea>
          </div>
          <div class="form-group">
              <input type="submit" class="btn btn-primary" value="Create">
          </div>
      </form>
    </div>
@endsection