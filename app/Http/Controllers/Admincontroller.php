<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admins.Admin');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admins.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'nama_admin' => 'required',
                'jk_admin' => 'required',
                'email_admin' => 'required|unique:karyawans',
                'alamat_admin' => 'required',
                'foto_admin' => 'required|mimes:jpg,png,gif,jpeg|image|max:2048',
                'password_admin' => 'required',
                'jabatan_admin' => 'required',
                'nohp_admin' => 'required',
            ],
            [
                'namaadmin.required'=>'namaadmin wajib diisi',
                'jk_admin.required'=>'jeniskelamin wajib diisi',
                'email_admin.required'=>'email wajib diisi',
                'email_admin.unique'=>'email sudah terdaftar ',
                'alamat_admin.required'=>'alamat wajib diisi',
                'foto_admin.required'=>'foto wajib diisi',
                'foto_admin.mimes'=>'extension harus jpg,png,gif,jpeg',
                'foto-admin.image'=>'hanya image yang diizinkan',
                'foto_admin.max'=>'foto maksimal 2 megaBytes',
                'password_admin.required'=>'password wajib diisi',
                'jabatan_admin.required'=>'jabatan_id wajib diisi',
                'nohp_admin.required'=>'no hp wajib diisi',

            ]
        );
        $path = $request->file('foto_admin')->store('public/uploads');

        $admin=new admin();
        $admin->jk_admin = $request['jk_admin'];
        $admin->email_admin = $request['email_admin'];
        $admin->alamat_admin = $request['alamat_admin'];
        $admin->foto_admin = basename($path);
        $admin->password_admin = Hash::make($request['password_admin']);
        $admin->jabatan_admin=$request['jabatan_admin'];
        $admin->nama_admin=$request['nama_admin'];
        $admin->nohp_admin=$request['nohp_admin'];
        $admin->save();

        return redirect('/admin');

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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
