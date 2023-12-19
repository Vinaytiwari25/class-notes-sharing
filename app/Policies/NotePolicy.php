<?php

namespace App\Policies;

use App\Models\Note;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class NotePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the note.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Note  $note
     * @return mixed
     */
    public function view(User $user, Note $note)
    {
        // Logic to determine if the user can view the note
        return $user->id === $note->user_id;
    }

    /**
     * Determine whether the user can update the note.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Note  $note
     * @return mixed
     */
    public function update(User $user, Note $note)
    {
        // Logic to determine if the user can update the note
        return $user->id === $note->user_id;
    }

    /**
     * Determine whether the user can delete the note.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Note  $note
     * @return mixed
     */
    public function delete(User $user, Note $note)
    {
        // Logic to determine if the user can delete the note
        return $user->id === $note->user_id;
    }
}
