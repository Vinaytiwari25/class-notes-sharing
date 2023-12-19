@extends('layouts.app')

@section('content')
    <h1>Edit Note</h1>

    <form action="{{ route('notes.update', $note) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label for="title">Title:</label>
        <input type="text" name="title" value="{{ $note->title }}" required>
        
        <label for="content">Content:</label>
        <textarea name="content">{{ $note->content }}</textarea>

        <button type="submit">Update Note</button>
    </form>

    <a href="{{ route('notes.show', $note) }}">Cancel</a>
    <a href="{{ route('notes.index') }}">Back to Notes</a>
@endsection
