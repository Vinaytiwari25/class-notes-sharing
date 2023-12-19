<!-- resources/views/notes/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1 style="font-size: 2rem; margin-bottom: 1rem;">My Notes</h1>

    @if(count($notes) > 0)
        <ul style="list-style: none; padding: 0;">
            @foreach($notes as $note)
                <li style="margin-bottom: 1rem; border: 1px solid #ddd; padding: 1rem; border-radius: 0.25rem;">
                    <a style="color: #4299e1; text-decoration: none; font-weight: 600;" href="{{ route('notes.show', $note) }}">{{ $note->title }}</a>
                    <span style="margin-left: 1rem;">
                        <a style="color: #4299e1; text-decoration: none; margin-right: 1rem;" href="{{ route('notes.edit', $note) }}">Edit</a>
                        <form style="display:inline;" action="{{ route('notes.destroy', $note) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                            @csrf
                            @method('DELETE')
                            <button style="color: #4299e1; text-decoration: none; background: none; border: none; cursor: pointer;">Delete</button>
                        </form>
                    </span>
                </li>
            @endforeach
        </ul>
    @else
        <p style="color: #555;">No notes found.</p>
    @endif

    <a style="color: #4299e1; text-decoration: none;" href="{{ route('notes.create') }}">Create a new note</a>
@endsection
