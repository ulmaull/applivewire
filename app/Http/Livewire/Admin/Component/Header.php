<?php

namespace App\Http\Livewire\Admin\Component;

use Livewire\Component;

class Header extends Component
{
    public $name, $data="dia";

    public function mount()
    {
        $this->name = auth()->user()->name;
    }

    public function open()
    {
        $this->data = "aku";
    }
    public function logout()
    {
        auth()->logout();
        return redirect()->route('auth.showLoginForm');
    }
    public function render()
    {
        return view('admin.layouts.components.header');
    }
}
