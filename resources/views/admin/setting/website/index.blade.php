<div class="row">
    <div class="col-lg-12">
        <div class="card card-default">
            <ul class="nav nav-pills" id="pills-tab">
                <li class="nav-item @if(Request()->is('superuser/website/about')) active @endif">
                    <button class="nav-link" wire:click="GoToAbout()">About Website</button>
                </li>
                <li class="nav-item @if(Request()->is('superuser/config/website/contact')) active @endif">
                    <a class="nav-link"
                       href="" >Informasi Kontak</a>
                </li>
                <li class="nav-item @if(Request()->is('superuser/config/website/appearance')) active @endif">
                    <a class="nav-link" href="" >Logo / Icon</a>
                </li>
                <li class="nav-item @if(Request()->is('superuser/config/website/maintenance')) active @endif">
                    <a class="nav-link" href="">Maintenance</a>
                </li>
                <li class="nav-item @if(Request()->is('superuser/config/website/maintenance')) active @endif">
                    <a class="nav-link" href="">Maintenance</a>
                </li>
            </ul>
        </div>
    </div>
</div>

@if($page == "About")
<h1>masuk</h1>
@else
    <h1>gak masuk</h1>
@endif
{{--{{dd($page)}}--}}

