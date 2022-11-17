<?php

namespace App\Http\Controllers;

use App\Models\Elektronik;
use App\Models\elektronik_type;
use Illuminate\Http\Request;

class ElektronikTypeController extends Controller
{
    public function index()
    {
        $elektronik_types = elektronik_type::orderBy('id', 'desc')->get();
        return view("elektroniks.elektronik_type", compact('elektronik_types'));
    }
    public function create_type()
    {
        $form_type = elektronik_type::get();
        return view('form_type', compact('form_type'));
    }
    public function edit_type($id)
    {
        $elektronik_types = elektronik_type::findOrFail($id);
        $form_type = elektronik_type::get();
        return view("edit_type", compact("elektronik_types", "form_type"));
    }

    public function store_type(Request $request)
    {
        $elektronik_types = elektronik_type::create([
            "nama_type" => $request->nama_type,
            "description" => $request->description,

        ]);
        return redirect("/type");
    }
    public function update_type(Request $request, $id)
    {
        $elektronik_types = elektronik_type::find($id);
        $elektronik_types->update([

            "nama_type" => $request->nama_type ?? $elektronik_types->nama_type,
            "description" => $request->description ?? $elektronik_types->description,
        ]);
        return redirect("/type");
    }
    public function destroy_type($id)
    {
        $post = elektronik_type::find($id);
        $post->delete();
        return redirect('/type');
    }
}
