<?php

namespace App\Http\Livewire\Admin\Article;

use Livewire\Component;

class ArticleIndex extends Component
{
    protected $listeners = ['doOpenForm'];
    public $formOpen = false;

    public function render()
    {
        return view('admin.article.index')
            ->extends('admin.layouts.app')
            ->section('content');
    }

    public function doOpen()
    {
        $this->formOpen = true;
        dd($this->formOpen);
    }
}
