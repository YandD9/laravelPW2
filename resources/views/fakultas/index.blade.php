@extends('layout.master')

@section('title', 'Fakultas')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Daftar Fakultas</h3>
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
            <table id="example2" class="table table-striped">
                <thead>
                    <tr>
                        <th>Nama Fakultas</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($fakultas) > 0)
                        @foreach ($fakultas as $data)
                            <tr>
                                <td> {{ $data }} </td>
                                <td> </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="4"> Belum ada data fakultas </td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>

        <div class="card-footer">
        </div>

    </div>
@endsection
