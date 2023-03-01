@extends('layouts.template')
@section('content')

    <div style= "margin-left: 300px">
       <h1>Selamat Datang di web kami</h1>
    </div>

    @push('custom_js')
    <script>
        alert('Selamat Datang');
    </script>
    @endpush

@endsection
