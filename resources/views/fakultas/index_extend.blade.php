@extends('layout.master')

@section('title', 'Halaman Fakultas')

@section('content')
    <table class="table table-striped">
        <thead>
            <tr><th>Nama Fakultas</th></tr>
        </thead>
        <tbody>
        @if (count($fakultas) > 0)
            @foreach($fakultas as $data)
                <tr><td> {{ $data }} </td></tr>
            @endforeach
        @else
            <tr><td> Belum ada data fakultas </td></tr>
        @endif
        </tbody>
    </table>
@endsection