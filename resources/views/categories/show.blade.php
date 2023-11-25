<!-- resources/views/categories/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Category Details</h1>

    <div>
        <strong>Name:</strong> {{ $category->name }}
    </div>
    <div>
        <strong>Description:</strong> {{ $category->description }}
    </div>
    <a href="{{ route('categories.index') }}" class="btn btn-secondary mt-3">Back to List</a>
@endsection
