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
    public function index()
    {
    $list_prodi = Prodi::whereNotIn('id_prodi', function ($query) {
    $query->select('id_prodi')
            ->from('user')
            ->where('role', 'tim_kurikulum');
    })->get();

    $akuns = User::where('role','tim_kurikulum')->with('prodis')->get();


    return view('admin.ketua_jurusan.akun', compact('list_prodi','akuns'));
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
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed',
            'role' => 'required'
        ]); 

        User::create([
            'id_prodi' => $request->id_prodi,
            'nama' => $request->nama,
            'nip' => $request->nip,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role
        ]);

        return redirect()->back();
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
            'nip' => 'required',
            'email' => 'required',
            'id_prodi' => 'required'
        ]);

        User::where('id_user',$id)->update([
            'nama'=>$request->nama,
            'nip'=>$request->nip,
            'email'=>$request->email,
            'id_prodi'=>$request->id_prodi
        ]);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    $akun = User::findOrFail($id);
    $akun->delete();

    return redirect()->back();
    }

}
