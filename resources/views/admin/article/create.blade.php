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
                <form>
                    <div class="form-group">
                        <label  for="judul_id">Judul Id</label>
                        <input id="judul_id" type="text" class="form-control" placeholder="Judul Artikel">
                    </div>
                    <div class="form-group">
                        <label  for="judul_id">Judul En</label>
                        <input id="judul_id" type="text" class="form-control" placeholder="Judul Artikel">
                    </div>

                    <div class="form-group row">
                        <div class="col-12 col-md-3 text-right">
                            <label for="">Password</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" class="form-control" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12 col-md-3 text-right">
                            <label for="Radios">Radios</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <label class="control control-radio">Option one is this and that—be sure to include why it's great
                                <input type="radio" name="radio1" checked="checked" />
                                <div class="control-indicator"></div>
                            </label>
                            <label class="control control-radio">Option two can be something else and selecting it will deselect
                                <input type="radio" name="radio1" />
                                <div class="control-indicator"></div>
                            </label>

                            <label class="control control-radio">Option three is disabled
                                <input type="radio" name="radio1" disabled="disabled" />
                                <div class="control-indicator"></div>
                            </label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12 col-md-3 text-right">
                            <label for="checkbox">Checkbox</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <label class="control control-checkbox">Check me out
                                <input type="checkbox" name="checkbox1" />
                                <div class="control-indicator"></div>
                            </label>
                        </div>
                    </div>
                    <div class="form-footer pt-5 border-top">
                        <button type="submit" class="btn btn-primary btn-default">Sign in</button>
                    </div>
                </form>

            </div>
            <div class="mt-3"></div>
        </div>
    </div>
</div>
