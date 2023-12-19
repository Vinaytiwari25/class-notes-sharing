@extends('layouts.app')

@section('content')
    <h1>{{ $note->title }}</h1>
    <p>{{ $note->content }}</p>

    <a href="{{ route('notes.edit', $note) }}">Edit Note</a>

    <form action="{{ route('notes.destroy', $note) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('Are you sure?')">Delete Note</button>
    </form>

    <a href="{{ route('notes.index') }}">Back to Notes</a>
@endsection
