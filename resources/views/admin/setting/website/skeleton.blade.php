@extends('admin.layouts.app')
@section('content')
    <div class="breadcrumb-wrapper">
        <h1>Config Website</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb p-0">
                <li class="breadcrumb-item">
                    <a href="{{route('dashboard')}}">
                        <span class="mdi mdi-home"></span>
                    </a>
                </li>
                <li class="breadcrumb-item">Setting</li>
                <li class="breadcrumb-item" aria-current="page">Website</li>
            </ol>
        </nav>
    </div>
    @livewire('admin.setting.web-setting')
@endsection
