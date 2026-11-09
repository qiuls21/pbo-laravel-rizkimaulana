<h1>Kategori: {{ $nama }}</h1>

@if (count($daftarBuku) === 0)
    <p>Belum ada buku di kategori ini.</p>
@else
    <ul>
        @foreach ($daftarBuku as $buku)
            <li>
                <a href="{{ route('buku.show', $buku['id']) }}">
                    {{ $buku['judul'] }}
                </a>
            </li>
        @endforeach
    </ul>
@endif

<a href="{{ route('buku.index') }}">Kembali ke daftar</a>
