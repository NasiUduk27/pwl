@extends('layouts.template')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Hobi</h1>
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
                    <h3 class="card-title">Hobi</h3>

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
                  <a href="{{ url('hobies/create') }}" class="btn btn-sm btn-success my-2">Tambah Data</a>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Hobi</th>
                                <th>Deskripsi Hobi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @if ($hobies->count() > 0)
                                @foreach ($hobies as $i => $m)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $m->name }}</td>
                                        <td>{{ $m->description }}</td>
                                        <td>
                                            <!-- Bikin tombol edit dan delete -->
                                            <a href="{{ url('/hobies/' . $m->id . '/edit') }}"
                                                class="btn btn-sm btn-warning">edit</a>

                                            <form method="POST" action="{{ url('/hobies/' . $m->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="6" class="text-center">Data tidak ada</td>
                                </tr>
                            @endif
                        </tbody>

                    </table>


                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    Footer
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @push('custom_js')
        {{-- <script>
            alert('Selamat Datang');
        </script> --}}
    @endpush
@endsection
