<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\Bb;

class BbPolici
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /*проверка на id пользователя  */
    public function update (User $user, Bb $bb){
        return $user->id === $bb->user->id;
    }

    /*удаление записей */
    public function destroy(User $user, Bb $bb){
        return $this->update($user,$bb);
    }
}
