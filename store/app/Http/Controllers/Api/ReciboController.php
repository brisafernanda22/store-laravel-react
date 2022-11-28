<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Recibo;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;


class ReciboController extends Controller
{   
    public function store(Request $request)
    {
        $recibo = new Recibo();
        $recibo->total=$request->total;
        $recibo->registro = date("Y-m-d H:i:s");

        try {
            //code...
            $recibo->save();
            return response() -> json(["message"=>"Recibo guardado"]);
        } catch (\Throwable $th) {
            return response() -> json(["message"=>"Error inesperado", "Error" => $th], 401);
        }

    }


}

