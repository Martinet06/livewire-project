<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class CreatePost extends Component
{

    public $title;

    // public $user;
    public $name;
    public $email;

    /* public function mount($user)
    {
        $this->user = User::find($user);
    } */

    public function mount(User $user)
    {
        /* $this->name = $user->name;
        $this->email = $user->email; */

        $this->fill(
            $user->only(['name', 'email'])
        );
    }

    public function save()
    {
        /* dd($this->name); */
    }
    public function render()
    {
        return view('livewire.create-post');
    }
}
