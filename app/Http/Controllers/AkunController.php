<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Prodi;
use Illuminate\Support\Facades\Hash;

class AkunController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {   

    $search = $request->get('search');

    $list_prodi = Prodi::whereNotIn('id_prodi', function ($query) {
    $query->select('id_prodi')
            ->from('user')
            ->where('role', 'tim_kurikulum');
    })->get();

    $akuns = User::where('role','tim_kurikulum')->with('prodis')
    ->when($search, function($query, $search) {
        $query->where('nama', 'LIKE', "%{$search}%");
        })->paginate(6);


    return view('admin.ketua_jurusan.akun', compact('list_prodi','akuns','search'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_prodi' => 'required',
            'nama' => 'required',
            'nip' => 'required|unique:User,nip',
            'email' => 'required|email|unique:User,email',
            'password' => 'required|confirmed',
            'role' => 'required'
        ], [
            'id_prodi.required' => 'Program studi wajib dipilih.',

            'nama.required' => 'Nama wajib diisi.',

            'nip.required' => 'NIP wajib diisi.',
            'nip.unique' => 'NIP sudah digunakan.',

            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.unique' => 'Email sudah digunakan.',

            'password.required' => 'Password wajib diisi.',
            'password.confirmed' => 'Konfirmasi password tidak cocok.',

            'role.required' => 'Role wajib dipilih.',
        ]); 
    try {

        User::create([
            'id_prodi' => $request->id_prodi,
            'nama' => $request->nama,
            'nip' => $request->nip,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role
        ]);

        return redirect()
            ->back()
            ->with('success', 'Data pengelola berhasil ditambahkan.');

    } catch (\Exception $e) {

        return redirect()
            ->back()
            ->withInput()
            ->with('error', 'Terjadi kesalahan saat menyimpan data pengelola.');

    }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
        {

            $request->validate([
                'nama' => 'required',
                'nip' => 'required|unique:user,nip,' . $id . ',id_user',
                'email' => 'required|email|unique:user,email,' . $id . ',id_user',
                'id_prodi' => 'required'
            ], [
                'id_prodi.required' => 'Role Program studi wajib dipilih.',

                'nama.required' => 'Nama wajib diisi.',

                'nip.required' => 'NIP wajib diisi.',
                'nip.unique' => 'NIP sudah digunakan.',

                'email.required' => 'Email wajib diisi.',
                'email.email' => 'Format email tidak valid.',
                'email.unique' => 'Email sudah digunakan.',
            ]);
            try {

                User::where('id_user', $id)->update([
                    'id_prodi' => $request->id_prodi,
                    'nama' => $request->nama,
                    'nip' => $request->nip,
                    'email' => $request->email,
                ]);

                return redirect()
                    ->back()
                    ->with('success', 'Data pengguna berhasil diperbarui.');

            } catch (\Exception $e) {

                return redirect()
                    ->back()
                    ->withInput()
                    ->with('error', 'Terjadi kesalahan saat memperbarui data pengguna.');

            }
        }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    $akun = User::findOrFail($id);
    $akun->delete();

    return redirect()->back()->with('success','Akun Pengelola Berhasil di Hapus');
    }

}
