@extends('admin.layouts.skeleton')
@section('app')

    <div class="wrapper">
        <!--
      ====================================
      ——— LEFT SIDEBAR WITH FOOTER
      =====================================
    -->
        @livewire('admin.component.sidebar')

        <div class="page-wrapper">
            <!-- Header -->
            @livewire('admin.component.header')
            <div class="content-wrapper">
                <div class="content">
                    @yield('content')
                </div>
            </div>

            @include('admin.layouts.components.footer')
        </div>
    </div>

@endsection
