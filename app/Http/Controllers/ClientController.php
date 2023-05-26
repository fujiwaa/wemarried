<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('client.index')->with([
            'client' => Client::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('client.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:3',
            'email' => 'required|min:3',
            'password' => 'required|min:8',
            'nomorhp' => 'required|min:10|max:15',
        ]);
        
        $client = new Client;
        $client->nama = $request->nama;
        $client->email = $request->email;
        $client->password = $request->password;
        $client->nomorhp = $request->nomorhp;
        $client->save();

        return to_route('client.index')->with('success', 'Data berhasil ditambahkan!');
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
        return view('client.edit')->with([
            'client' => Client::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|min:3',
            'email' => 'required|min:3',
            'password' => 'required|min:8',
            'nomorhp' => 'required|min:10|max:15',
        ]);
        
        $client = Client::find($id);
        $client->nama = $request->nama;
        $client->email = $request->email;
        $client->password = $request->password;
        $client->nomorhp = $request->nomorhp;
        $client->save();

        return to_route('client.index')->with('success', 'Data berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $client = Client::find($id);
        $client->delete();

        return back()->with('success', 'Data berhasil dihapus!');
    }
}
