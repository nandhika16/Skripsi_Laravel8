<?php

namespace App\Http\Controllers;

use App\Models\Wisatas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardPostWisataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.wisata.index', [
            'wisatas' => Wisatas::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.wisata.create');
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'alamat' => 'required|max:255',
            'latitude' => 'required|max:255',
            'longitude' => 'required|max:255',
            'deskripsi' => 'required',
            'harga' => 'required|max:255',
        ]);
        
        Wisatas::create($validatedData);
        
        return redirect('/dashboard/wisata')->with('Success', 'New Post Has Been Added!');
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
        $Wisatas = wisatas::findorfail($id);
        return view('dashboard.wisata.edit',compact('Wisatas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Wisatas = wisatas::findorfail($id);
        $Wisatas->update($request->all());
        return redirect('dashboard/wisata')->with('success', 'Data Berhasil Update!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // dd($id); ddam untuk testing

        wisatas::destroy($id);
        // return "delete";
        return redirect('dashboard/wisata')->with('success', 'Post has been deleted!');
    }
}
