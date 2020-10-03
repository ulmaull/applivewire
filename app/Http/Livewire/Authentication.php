<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Authentication extends Component
{
    public $username, $password;
    protected $listeners = ['logout','login'];
    public function render()
    {
        return view('admin.login')
            ->extends('admin.layouts.skeleton')
            ->section('app');
    }

    public function login()
    {
        $this->validate([
           'username'=>'required',
           'password'=>'required'
        ]);
//        dd($this->username);
        if (Auth::attempt(['username' => $this->username,'password' => $this->password])){
//            notify("Welcome Admin","Success Login","info","topRight");
//            session()->flash('message', 'Login Failed, Username or Password Invalid');
            return redirect()->route('dashboard');
        }
        else{
            session()->flash('message', 'Login Failed, Username or Password Invalid');
//            notify("Invalid Username/Email Or Password","Failed Login","warning","topRight");
            return redirect()->back();
        }
    }



}
