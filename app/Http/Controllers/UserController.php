<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $judul = 'Aplikasi Penjualan Barang | Halaman User';

        $search = $request->search;

        $user = User::select('id', 'nama', 'username', 'level')
            ->when($search, function ($query) use ($search) {
                $query->where(function ($q) use ($search) {
                    $q->where('nama', 'like', "%{$search}%")
                      ->orWhere('username', 'like', "%{$search}%");
                });
            })
            ->orderBy('id', 'asc')
            ->paginate(10)
            ->withQueryString();

        return view('user.user', compact('judul', 'user'));
    }

    public function create()
    {
        $judul = 'Aplikasi Penjualan Barang | Tambah User';
        return view('user.create', compact('judul'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama'      => 'required',
            'username'  => 'required|unique:users,username',
            'password'  => 'required',
            'level'     => 'required',
        ], [
            'nama.required'         => 'Nama wajib di isi',
            'username.required'     => 'Username wajib di isi',
            'username.unique'       => 'Username sudah digunakan',
            'password.required'     => 'Password wajib di isi',
            'level.required'        => 'Level wajib di isi',
        ]);

        User::create([
            'nama'      => $request->nama,
            'username'  => $request->username,
            'password'  => Hash::make($request->password),
            'level'     => $request->level,
        ]);

        return redirect()->route('user.index')->with('success', 'Berhasil menambah data user');
    }

    public function edit(string $id)
    {
        $user = User::FindOrFail($id);
        $judul = 'Aplikasi Penjualan Barang | Edit User';
        return view('user.edit', compact('judul', 'user'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama'      => 'required',
            'level'     => 'required',
        ], [
            'nama.required'         => 'Nama wajib di isi',
            'level.required'        => 'Level wajib di isi',
        ]);

        User::where('id', $id)->update([
            'nama'  => $request->nama,
            'level'  => $request->level,
        ]);
        return redirect()->route('user.index')->with('success', 'Berhasil mengubah data user');
    }

    public function destroy(string $id)
    {
        User::where('id', $id)->delete();
        return redirect()->route('user.index')->with('success', 'Berhasil menghapus data user');
    }
}
