@include('layout.header', ['title' => 'Halaman Fakultas'])

<ul>
    @if (count($fakultas) > 0)
        @foreach($fakultas as $data)
            <li> {{ $data }} </li>
        @endforeach
    @else
        <li>Belum ada data fakultas</li>
    @endif
</ul>

@include('layout.footer')