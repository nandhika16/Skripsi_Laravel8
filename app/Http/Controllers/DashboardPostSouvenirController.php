<?php

namespace App\Http\Controllers;

use App\Models\Souvenirs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardPostSouvenirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.souvenir.index', [
            'souvenirs' => Souvenirs::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.souvenir.create');
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
            // 'image' => 'required',

        ]);
        
        Souvenirs::create($validatedData);
        
        return redirect('/dashboard/souvenir')->with('Success', 'New Post Has Been Added!');

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
        $Souvenirs = souvenirs::findorfail($id);
        return view('dashboard.souvenir.edit',compact('Souvenirs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Souvenirs = souvenirs::findorfail($id);
        $Souvenirs->update($request->all());
        return redirect('dashboard/souvenir')->with('success', 'Data Berhasil Update!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // dd($id); ddam untuk testing

        Souvenirs::destroy($id);
        // return "delete";
        return redirect('dashboard/souvenir')->with('success', 'Post has been deleted!');
    }
}
