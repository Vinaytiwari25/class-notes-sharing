@extends('layouts.app')

@section('content')
    <h1>My Notes</h1>

    @if(count($notes) > 0)
        <ul>
            @foreach($notes as $note)
                <li>
                    <a href="{{ route('notes.show', $note) }}">{{ $note->title }}</a>
                    <span>
                        <a href="{{ route('notes.edit', $note) }}">Edit</a>
                        <form action="{{ route('notes.destroy', $note) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </span>
                </li>
            @endforeach
        </ul>
    @else
        <p>No notes found.</p>
    @endif

    <a href="{{ route('notes.create') }}">Create a new note</a>
@endsection
