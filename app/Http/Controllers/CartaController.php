<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator; 
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
        $carta = Carta::get();
        return view('carta.create',compact('carta'));
    }

    /**
     * Store a newly created resource in storage.
     *la única dificultad es que uno de los request es el enclace a una imagen,
     * la gusrdaremos en un archivo temporal, para añadirla despues.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $request->validate(['clasificacion' => ['required', 'string'],
            'nombre' => ['required', 'string'],
            'precio' => ['required'],
            'descripcion' => ['required', 'string'],
            'imagen' => ['required',  'max:2000']
        ]);
       $carta = $request->all(); //todos los request de formulari
        if ($archivo = $request->file('imagen')) {//código para subir imagénes
            $nombre = $archivo->getClientOriginalName();
            $archivo->move('images', $nombre);
            $carta['image'] = $nombre;
        }
        $cartaFinal = Carta::create($carta);
       

        return redirect()->route('carta.index')->with('status', 'Producto añadido correctamente a la carta'); //me voy a crear una dirección
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $producto=Carta::find($id);
        return view('carta.show',compact('producto'));
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
    

    /**
     * Esta función es para que según sea la clasificación del objeto carta
     *valla a una ruta o a otra.
     *
     * @param  string $clasificacion
     * @return \Illuminate\Http\Response
     */
    public function muestra($descripcion){
        $carta=Carta::get();
        
        $seleccion=[];//creamos un array con los productos que sean de la descripcion buscada
       foreach($carta as $producto){
           if($producto->clasificacion==$descripcion){
               $seleccion[] = $producto ;
               
           }
       }
      
       return view('detalle_carta', compact('seleccion'));
            
            
            
            
        }
        
        
        
    }
    
    
    
    
 
