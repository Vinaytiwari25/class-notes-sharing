@extends('layouts.app')

@section('content')
    <h1>Create a New Note</h1>

    <form action="{{ route('notes.store') }}" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" required>
        
        <label for="content">Content:</label>
        <textarea name="content"></textarea>

        <button type="submit">Save Note</button>
    </form>

    <a href="{{ route('notes.index') }}">Back to Notes</a>
@endsection
