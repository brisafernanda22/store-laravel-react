<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;


class ProductoController extends Controller
{
    
    public function index($categoria)
    {
        $productos = Producto::where('categoria', $categoria) -> get();
        return response() -> json(['categoria' => $categoria,'productos' => $productos ]);
    }

    
    public function store(Request $request)
    {
        $producto = new Producto();
        $producto->nombre=$request->nombre;
        $producto->precio=$request->precio;
        $producto->categoria=$request->categoria;
        $producto->image=$request->image;
        try {
            //code...
            $producto->save();
            return response() -> json(["message"=>"Producto guardado"]);
        } catch (\Throwable $th) {
            return response() -> json(["message"=>"Error inesperadoss", "Error" => $th, "request" => $request], 401);
        }

    }

    
    public function show($id)
    {
        $producto = Producto::find($id);
        return response() -> json(['producto' => $producto]);
    }

   
    public function update(Request $request, $id)
    {
        $producto = Producto::findOrFail($request->id);
        $producto->nombre = $request->nombre;
        $producto->precio = $request->precio;
        $producto->categoria = $request->categoria;
        $producto->image=$request->image;
        $producto->save();
        return $producto;
    }

    
    public function destroy($id)
    {
        $producto = Producto::destroy($id);
        return $producto;
    }
}

