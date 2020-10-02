<aside class="left-sidebar bg-sidebar">
    <div id="sidebar" class="sidebar">
        <!-- Aplication Brand -->
        <div class="app-brand">
            <a href="" title="Sleek Dashboard">
                <svg
                    class="brand-icon"
                    xmlns="http://www.w3.org/2000/svg"
                    preserveAspectRatio="xMidYMid"
                    width="30"
                    height="33"
                    viewBox="0 0 30 33"
                >
                    <g fill="none" fill-rule="evenodd">
                        <path
                            class="logo-fill-blue"
                            fill="#7DBCFF"
                            d="M0 4v25l8 4V0zM22 4v25l8 4V0z"
                        />
                        <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                    </g>
                </svg>
                <span class="brand-name text-truncate">Sleek Dashboard</span>
            </a>
        </div>
        <!-- begin sidebar scrollbar -->
        <div class="sidebar-scrollbar">
            <!-- sidebar menu -->
            <ul class="nav sidebar-inner" id="sidebar-menu">
                <li class="@if(Request()->is('superuser')) active @endif">
                    <a class="sidenav-item-link" href="{{route('dashboard')}}">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                </li>
                <li  class="has-sub @if(request()->is('superuser/article')) active @elseif(request()->is('superuser/article/*')) active @endif">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#Artikel"
                       aria-expanded="false" aria-controls="app">
                        <i class="mdi mdi-blogger"></i>
                        <span class="nav-text">Artikel</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse"  id="Artikel"  data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li class="@if(request()->is('superuser/article')) active @endif">
                                <a class="sidenav-item-link" href="{{route('article')}}">
                                    <span class="nav-text">Daftar Artikel</span>
                                </a>
                            </li>
                            <li class="@if(request()->is('superuser/article/create')) active @endif">
                                <a class="sidenav-item-link" href="{{route('article.create')}}">
                                    <span class="nav-text">Tambah Artikel</span>
                                </a>
                            </li>
                            <li>
                                <a class="sidenav-item-link" href="">
                                    <span class="nav-text">Kategori Artikel</span>
                                </a>
                            </li>
                            <li>
                                <a class="sidenav-item-link" href="">
                                    <span class="nav-text">Tag Artikel</span>
                                </a>
                            </li>
                        </div>
                    </ul>
                </li>

                <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#Slider"
                       aria-expanded="false" aria-controls="Slider">
                        <i class="mdi mdi-image-filter"></i>
                        <span class="nav-text">Slider</span>
                    </a>
                </li>

                <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#Gallery"
                       aria-expanded="false" aria-controls="Gallery">
                        <i class="mdi mdi-image-area"></i>
                        <span class="nav-text">Gallery</span>
                    </a>
                </li>

                <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#components"
                       aria-expanded="false" aria-controls="components">
                        <i class="mdi mdi-forum"></i>
                        <span class="nav-text">Testimoni</span>
                    </a>
                </li>

                <li class="section-title">Main Menu</li>



                <li class="section-title">Perks</li>
                <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#components"
                       aria-expanded="false" aria-controls="components">
                        <i class="mdi mdi-inbox"></i>
                        <span class="nav-text">Kotak Masuk</span>
                    </a>
                </li>
                <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#components"
                       aria-expanded="false" aria-controls="components">
                        <i class="mdi mdi-library-books"></i>
                        <span class="nav-text">Social Media</span>
                    </a>
                </li>
                <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#components"
                       aria-expanded="false" aria-controls="components">
                        <i class="mdi mdi-search-web"></i>
                        <span class="nav-text">SEO Website</span>
                    </a>
                </li>
                <li class="section-title">Setting</li>
                <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#forms"
                       aria-expanded="false" aria-controls="forms">
                        <i class="mdi mdi-account-edit"></i>
                        <span class="nav-text">Account</span>
                    </a>
                </li>
                <li  class="@if(Request()->is('superuser/config/website/*')) active @endif" >
                    <a class="sidenav-item-link" href="{{ url('superuser/website/about') }}">
                        <i class="mdi mdi-settings mdi-spin"></i>
                        <span class="nav-text">Website</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</aside>
