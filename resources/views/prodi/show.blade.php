@extends('layout.master')

@section('title', 'Program Studi')

@section('content')
    <div class="card">
        <div class="card-header">
            {{-- <h3 class="card-title">@yield('title')</h3> --}}

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
            <table class="table">
                <tr>
                    <td>Nama Fakultas</td>
                    <td>{{ $prodi->fakultas->nama_fakultas }}</td>
                </tr>
                <tr>
                    <td>Nama Program Studi</td>
                    <td>{{ $prodi->nama_prodi }}</td>
                </tr>
            </table>
        </div>

        <div class="card-footer">

        </div>

    </div>
@endsection
