@extends('layouts.template')
@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Artikel</h1>
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
          <h3 class="card-title">Title</h3>

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
           <table class = "table table-bordered table-hover">
                <thead>
                    <tr>
                        <td>Title</td>
                        <td>Content</td>
                        <td>Image</td>
                        <td>Action</td>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($articles as $articles)
                        <tr>
                            <td>{{ $articles->title }}</td>
                            <td>{{ $articles->content }}</td>
                            <td><img width="150px" src="{{ asset('storage/' . $articles->featured_image) }}"></td>
                        </tr>
                    @endforeach
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
  @push ('custom_js')
  <script>
    alert('Selamat Datang');
  </script>
  @endpush
  @endsection