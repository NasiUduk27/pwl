@extends('layouts.template')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Data Mahasiswa</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Blank Page</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Mahasiswa</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">

                    <button class="btn btn-sm btn-success my-2" data-toggle="modal"
                        data-target="#modal_mahasiswa">TambahData</button>

                    <table class="table table-bordered table-striped" id="data_mahasiswa">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>HP</th>
                                <th>Alamat</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @if ($mhs->count() > 0)
                                @foreach ($mhs as $i => $m)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $m->nim }}</td>
                                        <td>{{ $m->nama }}</td>
                                        <td><img src="{{asset('/storage/' . $m->foto) }}" alt="" width="100" height="100" style="overflow: hidden;"></td>
                                        <td>{{ $m->jk }}</td>
                                        <td>{{ $m->hp }}</td>
                                        <td>{{ $m->kelas->nama_kelas}}</td>
                                        <td>
                                            <!-- Bikin tombol edit dan delete -->
                                            <a href="{{ url('/mahasiswa/' . $m->id . '/edit') }}"
                                                class="btn btn-sm btn-warning">edit</a>

                                            <form method="POST" action="{{ url('/mahasiswa/' . $m->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">hapus</button>
                                            </form>

                                            <a href="{{ url ('/mahasiswa/' . $m->id . '/khs') }}" class="btn btn-sm btn-primary">nilai</a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="6" class="text-center">Data tidak ada</td>
                                </tr>
                            @endif --}}
                        </tbody>
                    </table>
                </div>

                <div class="card-footer">
                    ini data mahasiswa
                </div>
                <!-- /.card-footer-->
            </div>


            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


    <div class="modal fade" id="modal_mahasiswa" style="display: none;" aria-hidden="true">
        <form method="post" action="{{ url('mahasiswa') }}" role="form" class="form-horizontal" id="form_mahasiswa">
            @csrf
            <div class="modal-dialog modal-">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Default Modal</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row form-message"></div>
                        <div class="form-group required row mb-2">
                            <label class="col-sm-2 control-label col-form-label">NIM</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-control-sm" id="nim" name="nim"
                                    value="" />
                            </div>
                        </div>
                        <div class="form-group required row mb-2">
                            <label class="col-sm-2 control-label col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-control-sm" id="nama" name="nama"
                                    value="" />
                            </div>
                        </div>
                        <div class="form-group required row mb-2">
                            <label class="col-sm-2 control-label col-form-label">No. HP</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-control-sm" id="hp" name="hp"
                                    value="" />
                            </div>
                        </div>
                        <div class="form-group required row mb-2">
                            <label class="col-sm-2 control-label col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-control-sm" id="alamat" name="alamat"
                                    value="" />
                            </div>
                        </div>

                        <div class="form-group required row mb-2">
                            <label class="col-sm-2 control-label col-form-label">Tempat Lahir</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-control-sm" id="tempat_lahir"
                                    name="tempat_lahir" value="" />
                            </div>
                        </div>

                        <div class="form-group required row mb-2">
                            <label class="col-sm-2 control-label col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-control-sm" id="tanggal_lahir"
                                    name="tanggal_lahir" value="" />
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="modal fade" id="detail" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title fs-5" id="exampleModalLabel">Detail Mahasiswa</h4>
                </div>
                <div class="modal-body">
                    <h6>NIM: <span id="nim_detail"></span></h6>
                    <h6>Nama: <span id="nama_detail"></span></h6>
                    <h6>Hp <span id="hp_detail"></span></h6>
                    <h6>Alamat: <span id="alamat_detail"></span></h6>
                    <h6>Tempat Lahir: <span id="tempat_lahir_detail"></span></h6>
                    <h6>Tanggal Lahir: <span id="tanggal_lahir_detail"></span></h6>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('custom_js')
    <script>
        function updateData(th) {
            $('#modal_mahasiswa').modal('show');
            $('#modal_mahasiswa .modal-title').html('Edit Data Mahasiswa');
            $('#modal_mahasiswa #nim').val($(th).data('nim'));
            $('#modal_mahasiswa #nama').val($(th).data('nama'));
            $('#modal_mahasiswa #hp').val($(th).data('hp'));
            $('#modal_mahasiswa #alamat').val($(th).data('alamat'));
            $('#modal_mahasiswa #tempat_lahir').val($(th).data('tempat_lahir'));
            $('#modal_mahasiswa #tanggal_lahir').val($(th).data('tanggal_lahir'));
            $('#modal_mahasiswa #form_mahasiswa').attr('action', $(th).data('url'));
            $('#modal_mahasiswa #form_mahasiswa').append('<input type="hidden" name="_method" value="PUT">');
        }

        function deleteData(th) {
            var url = $(th).data('url');
            var c = confirm('apakah anda yakin akan menghapus data ini ?');
            if (c == true) {
                $.ajax({
                    url: url,
                    method: "POST",
                    data: {
                        _method: 'DELETE',
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(data) {
                        if (data.status) {
                            alert(data.message);
                            dataMahasiswa.ajax.reload();
                        } else {
                            alert(data.message);
                        }
                    }
                });
            }
        }

        function showData(th) {
            $('#detail').modal('show');
            $('#detail #nim_detail').html($(th).data('nim'));
            $('#detail #nama_detail').html($(th).data('nama'));
            $('#detail #hp_detail').html($(th).data('hp'));
            $('#detail #alamat_detail').html($(th).data('alamat'));
            $('#detail #tempat_lahir_detail').html($(th).data('tempat_lahir'));
            $('#detail #tanggal_lahir_detail').html($(th).data('tanggal_lahir'));
        }

        $(document).ready(function() {
            var dataMahasiswa = $('#data_mahasiswa').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    'url': '{{ url('mahasiswa/data') }}',
                    'dataType': 'json',
                    'type': 'POST',
                },
                columns: [{
                        data: 'nomor',
                        name: 'nomor',
                        searchable: false,
                        sortable: false
                    },
                    {
                        data: 'nim',
                        name: 'nim',
                        sortable: false,
                        searchable: true
                    },
                    {
                        data: 'nama',
                        name: 'nama',
                        sortable: false,
                        searchable: true
                    },
                    {
                        data: 'hp',
                        name: 'hp',
                        sortable: false,
                        searchable: true
                    },
                    {
                        data: 'alamat',
                        name: 'alamat',
                        sortable: false,
                        searchable: true
                    },
                    {
                        data: 'tempat_lahir',
                        name: 'tempat_lahir',
                        sortable: false,
                        searchable: true
                    },
                    {
                        data: 'tanggal_lahir',
                        name: 'tanggal_lahir',
                        sortable: false,
                        searchable: true
                    },
                    {
                        data: 'id',
                        name: 'id',
                        sortable: false,
                        searchable: false,
                        render: function(data, type, row, meta) {
                            var btn =
                                `<button data-url="{{ url('/mahasiswa') }}/` + data + `" class="btn btn-xs btn-warning" onclick="updateData(this)" data-id="` + row.id + `" data-nim="` + row.nim + `" data-nama="` + row.nama + `" data-hp="` + row.hp + `" data-alamat="` + row.alamat + `" data-tempat_lahir="` + row.tempat_lahir + `" data-tanggal_lahir="` + row.tanggal_lahir +`"><i class="fa fa-edit"></i> Edit</button>` +
                                `<button data-url="{{ url('/mahasiswa') }}/`+data+ `" class="btn btn-xs btn-info" data-toggle="modal" onclick="showData(this)" data-target="#detail" class="btn btn-xs btn-info" data-id="`+row.id+`" data-nim="`+row.nim+`" data-nama="`+row.nama+`" data-hp="`+row.hp+`" data-alamat="`+row.alamat+`" data-tempat_lahir="`+row.tempat_lahir+`" data-tanggal_lahir="`+row.tanggal_lahir+`"><i class="fa fa-list" ></i> Detail</button>` +
                                `<button data-url="{{ url('/mahasiswa/') }}/` + data + `" type="submit" class="btn btn-xs btn-danger" onclick="deleteData(this)"><i class="fa fa-trash"></i> Hapus</button>`;
                            return btn;
                        }
                    },

                ]
            });
            $('#form_mahasiswa').submit(function(e) {
                e.preventDefault();
                $.ajax({
                    url: $(this).attr('action'),
                    method: "POST",
                    data: $(this).serialize(),
                    dataType: 'json',
                    success: function(data) {
                        $('.form-message').html('');
                        if (data.status) {
                            $('.form-message').html(
                                '<span class="alert alert-success" style="width: 100%">' +
                                data.message + '</span>');
                            $('#form_mahasiswa')[0].reset();
                            dataMahasiswa.ajax.reload();
                            $('#form_mahasiswa').attr('action', '{{ url('mahasiswa') }}');
                            $('#form_mahasiswa').find('input[name="_method"]').remove();
                        } else {
                            $('.form-message').html(
                                '<span class="alert alert-danger" style="width: 100%">' +
                                data.message + '</span>');
                            alert('error');
                        }

                        if (data.modal_close) {
                            $('.form-message').html('');
                            $('#modal_mahasiswa').modal('hide');
                        }
                    }
                });
            });
        });
    </script>
@endpush
