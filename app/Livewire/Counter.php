<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Rule;

class Counter extends Component
{
    // NEW WAY TO VALIDATE
    #[Rule('required|min:2|max:255')]
    public $name;

    #[Rule('required|email|min:2|max:255')]
    public $email;

    #[Rule('required')]
    public $password;

    public $users = [];

    // OLD WAY TO VALIDATE
    // public function rules()
    // {
    //     return [
    //         'name' => 'required|min:2|max:255',
    //         'email' => 'required|email|min:2|max:255',
    //         'password' => 'required|min:2|max:255',
    //     ];
    // }

    public function render()
    {
        return view('livewire.counter');
    }

    public function handleSubmit()
    {
        $this->validate();

        array_push($this->users, [
            'name' => $this->name,
            'email' => $this->email,
        ]);
    }
}
