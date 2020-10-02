<?php

namespace App\Http\Livewire\Admin\Article;

use Livewire\Component;

class CategoryIndex extends Component
{
    public function render()
    {
        return view('admin.article.category_index')
            ->extends('admin.layouts.app')
            ->section('content');
    }
}
