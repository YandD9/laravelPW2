@extends('layout.master')

@section('title', 'Mahasiswa')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Daftar Mahasiswa</h3>
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
            <table id="example1" class="table table-striped">
                <thead>
                    <tr>
                        <th>NPM</th><th>Nama</th><th>Tempat Lahir</th><th>Tanggal Lahir</th>
                    </tr>
                </thead>
                <tbody>
                @if (count($mahasiswas) > 0)
                    @foreach($mahasiswas as $data)
                        <tr>
                            <td> {{ $data->npm }} </td>
                            <td> {{ $data->nama }} </td>
                            <td> {{ $data->tempat_lahir }} </td>
                            <td> {{ $data->tanggal_lahir }} </td>
                        </tr>
                    @endforeach
                @else
                    <tr><td colspan="4"> Belum ada data mahasiswa </td></tr>
                @endif
                </tbody>
            </table>
        </div>

        <div class="card-footer">
        </div>

    </div>
@endsection