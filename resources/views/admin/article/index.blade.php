<div class="breadcrumb-wrapper">
    <h1>Articles Website</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0">
            <li class="breadcrumb-item">
                <a href="{{route('dashboard')}}">
                    <span class="mdi mdi-home"></span>
                </a>
            </li>
            <li class="breadcrumb-item">Article</li>
            <li class="breadcrumb-item" aria-current="page">List Articles</li>
        </ol>
    </nav>
</div>

<div class="row">
    <div class="col-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom d-flex justify-content-between">
                <h2>Daftar Artikel Anda</h2>
                <a href="{{route('article.create')}}" target="_blank" class="btn btn-outline-primary btn-sm text-uppercase">
                    <i class="mdi mdi-blogger"></i> Tambah Artikel Baru
                </a>
            </div>

            <div class="card-body">
                <table id="hoverable-data-table" class="table dt-responsive nowrap" style="width:100%">
                    <thead>
                    <tr>
                        <th>No.</th>
                        <th>Gambar</th>
                        <th>Artikel</th>
                        <th>Kategori</th>
                        <th>Viewer</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        <td>1</td>
                        <td><img class="img-thumbnail" style="width: 100px;height: 100px;" src="https://via.placeholder.com/100" alt=""></td>
                        <td>
                            <a href="https://placeholder.com/text/lorem-ipsum/">Judul</a><br>
                            <span>Tanggal Publish : 01 Mei 2020</span><br>
                            <span>Deskripsi</span><br>
                        </td>
                        <td><span class=" badge badge-success">Food</span></td>
                        <td><span class=" badge badge-primary"><i class="mdi mdi-eye"></i> 0 Kali dilihat</span></td>
                        <td><span class="badge badge-primary" data-toggle="tooltip" data-original-title="Sudah Terpublikasi"><b><i class="mdi mdi-check"></i></b></span></td>
                        <td>
                            <div class="dropdown d-inline-block mb-1">
                                <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                    Action
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Lihat Artikel Website</a>
                                    <a class="dropdown-item" href="#">Edit</a>
                                    <a class="dropdown-item" href="#">Hapus</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
        </div>
    </div>
</div>
</div>
@push('css')
    <!-- DATA TABLES -->
    <link href="{{ asset('admin/plugins/data-tables/datatables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush
@push('js')
    <script src="{{ asset('admin/plugins/data-tables/jquery.datatables.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/data-tables/datatables.bootstrap4.min.js') }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery('#hoverable-data-table').DataTable({
                "aLengthMenu": [[20, 30, 50, 75, -1], [20, 30, 50, 75, "All"]],
                "pageLength": 20,
                "dom": '<"row justify-content-between top-information"lf>rt<"row justify-content-between bottom-information"ip><"clear">'
            });
        });
    </script>
@endpush
