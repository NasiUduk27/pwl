@extends('layouts.template')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Data Mata Kuliah</h1>
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
                    <h3 class="card-title">Mata Kuliah</h3>

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
                    <form method="POST" action="{{ $url_form }}">
                        @csrf
                        {!! isset($courses) ? method_field('PUT') : '' !!}

                        <div class="form-group">
                            <label for="name">Nama Mata Kuliah</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                name="name" value="{{ isset($courses) ? $courses->name : old('name') }}">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="sks">SKS</label>
                            <input type="text" class="form-control @error('sks') is-invalid @enderror" id="sks"
                                name="sks" value="{{ isset($courses) ? $courses->sks : old('sks') }}">
                            @error('sks')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="semester">Semester</label>
                            <input type="text" class="form-control @error('semester') is-invalid @enderror" id="semester"
                                name="semester" value="{{ isset($courses) ? $courses->semester : old('semester') }}">
                            @error('semester')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </form>


                    <!-- /.card-body -->
                    <!-- /.card-body -->
                    <div class="card-footer">
                        ini data Mata Kuliah
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
