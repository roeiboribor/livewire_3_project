<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\WithPagination;

class Counter extends Component
{
    use WithPagination;
    // NEW WAY TO VALIDATE
    #[Rule('required|min:2|max:255')]
    public $name;

    #[Rule('required|email|unique:users|min:2|max:255')]
    public $email;

    #[Rule('required')]
    public $password;

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
        return view('livewire.counter', [
            'users' => User::paginate(5, pageName: 'users'),
        ]);
    }

    public function handleSubmit()
    {
        $this->validate();

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
        ]);

        $this->reset();
        $this->resetValidation();

        request()->session()->flash('success', 'User has been created!');
    }

    public function handleForgetSession()
    {
        request()->session()->forget('success');
    }
}
