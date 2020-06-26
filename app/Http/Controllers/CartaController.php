<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carta;

class CartaController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $carta = Carta::get();
        return view('carta.index', compact('carta'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('carta.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $request->validate(['clasificacion' => ['required', 'string'],
            'nombre' => ['required', 'string'],
            'precio' => ['required'],
            'descripcion' => ['required', 'string'],
            'imagen' => ["required|image|mimes:jpeg,png|max:2000"]
        ]);

        $carta = $request->all(); //todos los request de formulario
        return redirect()->route('carta.index')->with('session', 'Producto añadido correctamente a la carta'); //me voy a crear una dirección
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        return view('carta.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $producto = Carta::find($id);
        return view('carta.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $request->validate(['clasificacion' => ['required', 'string'],
            'nombre' => ['required', 'string'],
            'precio' => ['required'],
            'descripcion' => ['required', 'string'],
            'imagen' => ["required|image|mimes:jpeg,png|max:2000"]
        ]);

        $carta = $request->all(); //todos los request de formulario
        $carta->save();
        return redirect()->route('carta.index')->with('session', 'Producto modificado'); //me voy a crear 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $producto = Carta::find($id);
        $producto::delete();
    }

}
