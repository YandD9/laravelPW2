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
            <form action="{{ route('prodi.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="nama_prodi">Nama Program Studi</label>
                    <input type="text" class="form-control" name="nama_prodi" placeholder="Enter nama program studi">

                    @error('nama_prodi')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="fakultas_id">Nama Fakultas</label>
                    <select name="fakultas_id" class="form-control select2">
                        <option value="">Pilih Nama Fakultas</option>
                        @foreach ($fakultas as $item)
                            <option value="{{ $item->id }}"> {{ $item->nama_fakultas }} </option>
                        @endforeach
                    </select>
                    @error('fakultas_id')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="foto">Foto/Logo Prodi</label>
                    <input type="file" class="form-control" name="foto">

                    @error('foto')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>

        <div class="card-footer">

        </div>

    </div>
@endsection
