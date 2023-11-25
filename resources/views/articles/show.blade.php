<!-- resources/views/articles/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Article Details</h1>

    <div>
        <strong>Title:</strong> {{ $article->title }}
    </div>
    <div>
        <strong>Content:</strong> {{ $article->content }}
    </div>
    <a href="{{ route('articles.index') }}" class="btn btn-secondary mt-3">Back to List</a>
@endsection
