<?php

namespace App\Http\Livewire\Admin\Article;

use Livewire\Component;

class ArticleIndex extends Component
{
    protected $listeners = ['doOpen','doClose'];
    public $formOpen = false;

    public function mount()
    {
        $this->formOpen = false;
    }

    public function doClose()
    {
        $this->formOpen = false;
    }

    public function doOpen()
    {
        $this->formOpen = true;

    }

    public function render()
    {
        return view('admin.article.index')
            ->extends('admin.layouts.app')
            ->section('content');
    }


}
