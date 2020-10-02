<?php

namespace App\Http\Livewire\Admin\Setting;

use Livewire\Component;

class WebSetting extends Component
{
    public $page="About";

    public function GoToAbout()
    {
        $this->page = "About";

    }
    public function render()
    {
        return view('admin.setting.website.index')
            ->layout('admin.layouts.app');
    }
}
