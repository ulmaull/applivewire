<?php

namespace App\Http\Livewire\Admin\Article;

use Livewire\Component;

class ArticleIndex extends Component
{
    public function render()
    {
        return view('admin.article.index')
            ->extends('admin.layouts.app')
            ->section('content');
    }
}
