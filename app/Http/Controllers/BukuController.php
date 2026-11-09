<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        $daftarBuku = [
            ['id' => 1, 'judul' => 'Belajar PHP'],
            ['id' => 2, 'judul' => 'Dasar Laravel'],
        ];

        return view('buku.index', compact('daftarBuku'));
    }
        public function show(string $id)
    {
        return view('buku.show', compact('id'));
    }

    public function kategori(?string $nama = null)
    {
        $semuaBuku = [
            ['id' => 1, 'judul' => 'Belajar PHP',    'kategori' => 'pemrograman'],
            ['id' => 2, 'judul' => 'Dasar Laravel',  'kategori' => 'pemrograman'],
            ['id' => 3, 'judul' => 'Laskar Pelangi', 'kategori' => 'novel'],
        ];

        $daftarBuku = $nama === null
            ? $semuaBuku
            : array_filter($semuaBuku, fn ($b) => $b['kategori'] === $nama);

        $nama = $nama ?? 'Semua';

        return view('buku.kategori', compact('nama', 'daftarBuku'));
    }
}