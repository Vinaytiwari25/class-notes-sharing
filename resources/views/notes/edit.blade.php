<!-- resources/views/notes/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1 style="font-size: 2rem; margin-bottom: 1rem;">Edit Note</h1>

    <form action="{{ route('notes.update', $note) }}" method="POST" style="max-width: 400px; margin-bottom: 1rem;">
        @csrf
        @method('PUT')
        
        <label style="display: block; font-size: 1rem; margin-bottom: 0.5rem;" for="title">Title:</label>
        <input style="width: 100%; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem;" type="text" name="title" value="{{ $note->title }}" required>
        
        <label style="display: block; font-size: 1rem; margin-bottom: 0.5rem;" for="content">Content:</label>
        <textarea style="width: 100%; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem;" name="content">{{ $note->content }}</textarea>

        <button style="background-color: #4299e1; color: #fff; padding: 0.5rem 1rem; border: none; border-radius: 0.25rem; cursor: pointer; hover:bg-blue-700;" type="submit">Update Note</button>
    </form>

    <a style="color: #4299e1; text-decoration: none; margin-right: 1rem; hover: #1a365d;" href="{{ route('notes.show', $note) }}">Cancel</a>
    <a style="color: #4299e1; text-decoration: none; hover: #1a365d;" href="{{ route('notes.index') }}">Back to Notes</a>
@endsection
