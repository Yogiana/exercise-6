<?php

namespace App\Http\Controllers;

use App\Models\Elektronik;
use App\Models\elektronik_type;
use Illuminate\Http\Request;

class ElektronikController extends Controller
{
    public function index()
    {
        $elektroniks = Elektronik::orderBy('elektronik_type_id', 'desc')->get();
        return view("elektroniks.Elektronik", compact('elektroniks'));
    }

    public function create()
    {
        $formelektronik = elektronik_type::get();
        return view('formelektronik', compact('formelektronik'));
    }
    public function store(Request $request)
    {
        $elektroniks = Elektronik::create([
            "nama_barang" => $request->nama_barang,
            "qty" => $request->qty,
            "price" => $request->price

        ]);
        return redirect("/");
    }
    public function edit($id)
    {
        $elektroniks = Elektronik::findOrFail($id);
        $formelektronik = elektronik_type::get();
        return view("edit", compact("elektroniks", "formelektronik"));
    }

    public function update(Request $request, $id)
    {
        $elektroniks = Elektronik::find($id);
        $elektroniks->update([
            "elektronik_type_id" => $request->elektronik_type_id ?? $elektroniks->elektronik_type_id,
            "nama_barang" => $request->nama_barang ?? $elektroniks->nama_barang,
            "qty" => $request->qty ?? $elektroniks->qty,
            "price" => $request->price ?? $elektroniks->price
        ]);
        return redirect("/");
    }
    public function destroy($id)
    {
        $post = Elektronik::find($id);
        $post->delete();
        return redirect('/');
    }
}
