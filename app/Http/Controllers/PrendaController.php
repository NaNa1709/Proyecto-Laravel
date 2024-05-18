<?php

namespace App\Http\Controllers;

use App\Models\Prenda;
use App\Models\categoria;
use Illuminate\Http\Request;

class PrendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prendas = Prenda::all();
        return view("prendaIndex", compact("prendas"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = categoria::all();
        return view("prendaCreate", compact("categorias"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $prenda = new Prenda ();
        $prenda -> nombre = $request -> nombre;
        $prenda -> cantidad = $request -> cantidad;
        $prenda -> precio = $request -> precio;
        $prenda -> color = $request -> color;

        $prenda -> save();
        $prenda -> categorias()-> attach($request -> categorias);

        return redirect ("/prenda");
    }

    /**
     * Display the specified resource.
     */
    public function show(Prenda $prenda)
    {
        return view("prendaShow", compact("prenda"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prenda $prenda)
    {
        $categorias = categoria::all();
        return view("prendaEdit", compact("prenda", "categorias"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prenda $prenda)
    {
        $prenda -> nombre = $request -> nombre;
        $prenda -> cantidad = $request -> cantidad;
        $prenda -> precio = $request -> precio;
        $prenda -> color = $request -> color;

        $prenda -> save();

        if( $request->has('categorias') ){
            $prenda->categorias()->sync($request->categorias);
        }else{
            $prenda->categorias()->detach();
        }

        return redirect ("/prenda/".$prenda -> id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prenda $prenda)
    {
        $prenda -> delete();
        return redirect("/prenda");
    }
}
