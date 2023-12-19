<!-- resources/views/notes/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div style="margin-left: auto; margin-right: auto;" class="mt-8">
        <h1 style="font-size: 1.875rem; line-height: 2.25rem; font-weight: 600;" class="mb-6">Create a New Note</h1>

        <form action="{{ route('notes.store') }}" method="POST" style="max-width: 32rem; background-color: #fff; padding: 1.5rem; border-radius: 0.25rem; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);">
            @csrf

            <div style="margin-bottom: 1rem;">
                <label for="title" style="display: block; color: #4a5568; font-size: 0.875rem; font-weight: 700; margin-bottom: 0.5rem;">Title:</label>
                <input type="text" name="title" style="width: 100%; border-width: 1px; border-color: #e2e8f0; padding: 0.5rem; border-radius: 0.25rem;" required>
            </div>
            
            <div style="margin-bottom: 1rem;">
                <label for="content" style="display: block; color: #4a5568; font-size: 0.875rem; font-weight: 700; margin-bottom: 0.5rem;">Content:</label>
                <textarea name="content" style="width: 100%; border-width: 1px; border-color: #e2e8f0; padding: 0.5rem; border-radius: 0.25rem;"></textarea>
            </div>

            <button type="submit" style="background-color: #4299e1; color: #fff; padding-left: 1rem; padding-right: 1rem; padding-top: 0.5rem; padding-bottom: 0.5rem; border-radius: 0.25rem; hover:bg-blue-700;">Save Note</button>
        </form>

        <a href="{{ route('notes.index') }}" style="margin-top: 1rem; display: block; color: #4299e1;">Back to Notes</a>
    </div>
@endsection
