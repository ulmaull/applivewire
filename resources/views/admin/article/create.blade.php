{{--<div class="breadcrumb-wrapper">--}}
{{--    <h1>Create Article </h1>--}}
{{--    <nav aria-label="breadcrumb">--}}
{{--        <ol class="breadcrumb p-0">--}}
{{--            <li class="breadcrumb-item">--}}
{{--                <a href="{{route('dashboard')}}">--}}
{{--                    <span class="mdi mdi-home"></span>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li class="breadcrumb-item">Article</li>--}}
{{--            <li class="breadcrumb-item" aria-current="page">Create Article</li>--}}
{{--        </ol>--}}
{{--    </nav>--}}
{{--</div>--}}

<div class="row">
    <div class="col-lg-12">
        <div class="card card-default">
            <div class="card-header justify-content-between align-items-center card-header-border-bottom">
                <h2>Tambah Artikel</h2>
                <div>
                    <button wire:click="doClose()" class="text-black-50 mr-2 font-size-20"><i class="mdi mdi-exit-to-app"></i></button>
{{--                    <div class="dropdown d-inline-block widget-dropdown">--}}
{{--                        <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdown-notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>--}}
{{--                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-notification">--}}
{{--                            <li class="dropdown-item"><a href="#">Close</a></li>--}}
{{--                            <li class="dropdown-item"><a href="#">Another action</a></li>--}}
{{--                            <li class="dropdown-item"><a href="#">Something else here</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
                </div>

            </div>
            <div class="card-body slim-scroll">
                <div class="media py-3 align-items-center justify-content-between">
                    <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-primary text-white">
                        <i class="mdi mdi-cart-outline font-size-20"></i>
                    </div>
                    <div class="media-body pr-3 ">
                        <a class="mt-0 mb-1 font-size-15 text-dark" href="#">New Order</a>
                        <p>Selena has placed an new order</p>
                    </div>
                    <span class=" font-size-12 d-inline-block"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
                </div>

                <div class="media py-3 align-items-center justify-content-between">
                    <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-success text-white">
                        <i class="mdi mdi-email-outline font-size-20"></i>
                    </div>
                    <div class="media-body pr-3">
                        <a class="mt-0 mb-1 font-size-15 text-dark" href="#">New Enquiry</a>
                        <p>Phileine has placed an new order</p>
                    </div>
                    <span class=" font-size-12 d-inline-block"><i class="mdi mdi-clock-outline"></i> 9 AM</span>
                </div>


                <div class="media py-3 align-items-center justify-content-between">
                    <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-warning text-white">
                        <i class="mdi mdi-stack-exchange font-size-20"></i>
                    </div>
                    <div class="media-body pr-3">
                        <a class="mt-0 mb-1 font-size-15 text-dark" href="#">Support Ticket</a>
                        <p>Emma has placed an new order</p>
                    </div>
                    <span class=" font-size-12 d-inline-block"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
                </div>

                <div class="media py-3 align-items-center justify-content-between">
                    <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-primary text-white">
                        <i class="mdi mdi-cart-outline font-size-20"></i>
                    </div>
                    <div class="media-body pr-3">
                        <a class="mt-0 mb-1 font-size-15 text-dark" href="#">New order</a>
                        <p>Ryan has placed an new order</p>
                    </div>
                    <span class=" font-size-12 d-inline-block"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
                </div>

                <div class="media py-3 align-items-center justify-content-between">
                    <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-info text-white">
                        <i class="mdi mdi-calendar-blank font-size-20"></i>
                    </div>
                    <div class="media-body pr-3">
                        <a class="mt-0 mb-1 font-size-15 text-dark" href="">Comapny Meetup</a>
                        <p>Phileine has placed an new order</p>
                    </div>
                    <span class=" font-size-12 d-inline-block"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
                </div>

                <div class="media py-3 align-items-center justify-content-between">
                    <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-warning text-white">
                        <i class="mdi mdi-stack-exchange font-size-20"></i>
                    </div>
                    <div class="media-body pr-3">
                        <a class="mt-0 mb-1 font-size-15 text-dark" href="#">Support Ticket</a>
                        <p>Emma has placed an new order</p>
                    </div>
                    <span class=" font-size-12 d-inline-block"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
                </div>

                <div class="media py-3 align-items-center justify-content-between">
                    <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-success text-white">
                        <i class="mdi mdi-email-outline font-size-20"></i>
                    </div>
                    <div class="media-body pr-3">
                        <a class="mt-0 mb-1 font-size-15 text-dark" href="#">New Enquiry</a>
                        <p>Phileine has placed an new order</p>
                    </div>
                    <span class=" font-size-12 d-inline-block"><i class="mdi mdi-clock-outline"></i> 9 AM</span>
                </div>

            </div>
            <div class="mt-3"></div>
        </div>
    </div>
</div>
