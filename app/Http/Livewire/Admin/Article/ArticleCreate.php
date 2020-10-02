<?php

namespace App\Http\Livewire\Admin\Article;

use Livewire\Component;

class ArticleCreate extends Component
{
    public function render()
    {
        return view('admin.article.create')
            ->extends('admin.layouts.app')
            ->section('content');
//        view('admin.article.create')
//            ->extends('admin.layouts.app')
//            ->section('content');
    }
}
