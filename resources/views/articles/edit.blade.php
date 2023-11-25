<!-- resources/views/articles/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Edit Article</h1>

    <form action="{{ route('articles.update', $article->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $article->title }}" required>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control" id="content" name="content" rows="4" required>{{ $article->content }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update Article</button>
    </form>
@endsection
