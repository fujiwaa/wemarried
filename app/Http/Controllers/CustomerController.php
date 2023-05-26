<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('customer.index')->with([
            'customer' => Customer::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customer.create');
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
        
        $customer = new Customer;
        $customer->nama = $request->nama;
        $customer->email = $request->email;
        $customer->password = $request->password;
        $customer->nomorhp = $request->nomorhp;
        $customer->save();

        return to_route('customer.index')->with('success', 'Data berhasil ditambahkan!');
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
    public function edit($id)
    {
        return view('customer.edit')->with([
            'customer' => Customer::find($id),
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
        
        $customer = Customer::find($id);
        $customer->nama = $request->nama;
        $customer->email = $request->email;
        $customer->password = $request->password;
        $customer->nomorhp = $request->nomorhp;
        $customer->save();

        return to_route('customer.index')->with('success', 'Data berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $customer = Customer::find($id);
        $customer->delete();

        return back()->with('success', 'Data berhasil dihapus!');
    }
}
