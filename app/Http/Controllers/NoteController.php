<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;


class NoteController extends Controller
{
    public function index()
    {
        $notes = Auth::user()->notes;

        return view('notes.index', compact('notes'));
    }

    public function create()
    {
        return view('notes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'nullable|string',
        ]);

        try {
            $note = new Note([
                'title' => $request->input('title'),
                'content' => $request->input('content'),
            ]);

            Auth::user()->notes()->save($note);

            return redirect()->route('notes.index')->with('success', 'Note created successfully!');
        } catch (\Exception $e) {
            // Log the error or handle it as needed
            return redirect()->back()->with('error', 'Error creating note. Please try again.');
        }
    }

    public function show(Note $note)
    {
        $this->authorize('view', $note);
        return view('notes.show', compact('note'));
    }

    public function edit(Note $note)
    {
        $this->authorize('update', $note);

        return view('notes.edit', compact('note'));
    }

    public function update(Request $request, Note $note)
    {
        $this->authorize('update', $note);

        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'nullable|string',
        ]);

        try {
            $note->update([
                'title' => $request->input('title'),
                'content' => $request->input('content'),
            ]);

            return redirect()->route('notes.index')->with('success', 'Note updated successfully!');
        } catch (\Exception $e) {
            // Log the error or handle it as needed
            return redirect()->back()->with('error', 'Error updating note. Please try again.');
        }
    }

    public function destroy(Note $note)
    {
        $this->authorize('delete', $note);

        try {
            $note->delete();

            return redirect()->route('notes.index')->with('success', 'Note deleted successfully!');
        } catch (\Exception $e) {
            // Log the error or handle it as needed
            return redirect()->back()->with('error', 'Error deleting note. Please try again.');
        }
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'), $request->filled('remember'))) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        throw ValidationException::withMessages([
            'email' => __('auth.failed'),
        ]);
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}

