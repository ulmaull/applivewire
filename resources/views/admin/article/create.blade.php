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
                        <label  for="judul_id">Judul Id</label><span class="text-danger"><b> *</b></span>
                        <input id="judul_id" type="text" class="form-control" placeholder="Judul Artikel">
                    </div>
                    <div class="form-group">
                        <label  for="judul_en">Judul En</label>
                        <input id="judul_en" type="text" class="form-control" placeholder="Judul Artikel">
                    </div>
                    <div class="form-group">
                        <label for="kategori_artikel">Kategori Artikel</label>
                        <select class="form-control" id="kategori_artikel">
                            <option>reno</option>
                            <option>rido</option>
                            <option>andi</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tag_artikel">Tag</label>
                        <select class="js-example-basic-multiple form-control" name="states[]" multiple="multiple">
                            <option value="AL">Alabana</option>
                            <option value="NY">New York</option>
                            <option value="VR">Virginia</option>
                            <option value="WA">Washington</option>
                            <option value="CA">California</option>
                            <option value="WY">Wyoming</option>
                        </select>
                    </div>

                    <div class="form-footer pt-5 border-top">
                        <button type="submit" class="btn btn-primary btn-default">Tambah Artikel</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@push('css')
    <link href="{{ asset('admin/plugins/select2/css/select2.min.css') }}" rel="stylesheet" />
@endpush
@push('js')
    <script src="{{asset('admin/plugins/select2/js/select2.min.js')}}"></script>
@endpush
