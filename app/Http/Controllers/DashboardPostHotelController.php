<?php

namespace App\Http\Controllers;

use App\Models\Hotels;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use Illuminate\Http\Str;


class DashboardPostHotelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return Hotels::all();
        // return Hotels::where('id', auth()->user()->id)->get();
        return view('dashboard.hotel.index', [
            'hotels' => Hotels::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.hotel.create');
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
            'nama' => 'required|unique:hotels',
            'alamat' => 'required|max:255',
            'latitude' => 'required|max:255',
            'longitude' => 'required|max:255',
            'deskripsi' => 'required',
            'harga' => 'required|max:255',

            // 'image' => 'required',

        ]);
        
        Hotels::create($validatedData);
        
        return redirect('/dashboard/hotel')->with('Success', 'New Post Has Been Added!');

        // $validatedData['user_id'] = auth()->user()->id;
        // $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

    }

    /**
     * Display the specified resource.
     */
    public function show(Post $Hotels)
    {
        // return $Hotels;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $Hotels = hotels::findorfail($id);
        return view('dashboard.hotel.edit',compact('Hotels'));

        // return view('dashboard.hotel.edit', [
        //     'Hotels' => $id,
        //     'hotels' => Hotels::all()
        // ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // dd($id);
        $Hotels = hotels::findorfail($id);
        $Hotels->update($request->all());
        return redirect('dashboard/hotel')->with('success', 'Data Berhasil Update!');
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy($id)
    {
        // dd($id); ddam untuk testing

        Hotels::destroy($id);
        // return "delete";
        return redirect('dashboard/hotel')->with('success', 'Data Berhasil di Hapus!');
    }
}