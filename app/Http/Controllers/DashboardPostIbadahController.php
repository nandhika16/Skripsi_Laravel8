<?php

namespace App\Http\Controllers;

use App\Models\Ibadahs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardPostIbadahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.ibadah.index', [
            'ibadahs' => Ibadahs::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.ibadah.create');
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
        
        Ibadahs::create($validatedData);
        
        return redirect('/dashboard/ibadah')->with('Success', 'New Post Has Been Added!');

        // $validatedData['user_id'] = auth()->user()->id;
        // $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

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
        $Ibadahs = ibadahs::findorfail($id);
        return view('dashboard.ibadah.edit',compact('Ibadahs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Ibadahs = ibadahs::findorfail($id);
        $Ibadahs->update($request->all());
        return redirect('dashboard/ibadah')->with('success', 'Data Berhasil Update!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        ibadahs::destroy($id);
        // return "delete";
        return redirect('dashboard/ibadah')->with('success', 'Post has been deleted!');
    }
}
