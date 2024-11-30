<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    // Menampilkan form untuk input data
    public function create()
    {
        return view('form');
    }

    // Menyimpan data ke dalam session
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string',
            'nim' => 'required|string',
        ]);

        // Ambil data dari session, atau inisialisasi array kosong jika belum ada
        $data = session('data', []);

        // Tambahkan data baru ke array
        $data[] = [
            'name' => $request->name,
            'nim' => $request->nim,
        ];

        // Simpan data kembali ke session
        session(['data' => $data]);

        // Redirect ke halaman display
        return redirect()->route('session.display');
    }

    // Menampilkan data yang disimpan di session
    public function display()
    {
        // Ambil data dari session, atau inisialisasi array kosong jika belum ada
        $data = session('data', []);

        // Kirim data ke view
        return view('display', compact('data'));
    }

    // Menghapus semua data dari session
    public function clear()
    {
        // Hapus data dari session
        session()->forget('data');

        // Redirect ke halaman display dengan pesan sukses
        return redirect()->route('session.display')->with('success', 'Data berhasil dihapus.');
    }
}
