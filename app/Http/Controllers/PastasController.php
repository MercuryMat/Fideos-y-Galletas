<?php

namespace App\Http\Controllers;

use App\Models\Fideos;
use Illuminate\Http\Request;

class PastasController extends Controller
{
    public function get()
    {
        $fideos = Fideos::all();
        return response()->json($fideos);
    }

    public function store(Request $request)
    {
        $request->validate([
            'tipo' => 'required',
            'marca' => 'required',
            'precioPaquete' => 'required',
            'pesoPaquete' => 'required',
            'cantidadPaquetesStock' => 'required',
        ]);
        $fideo = new Fideos;
        $fideo->tipo = $request->tipo;
        $fideo->marca = $request->marca;
        $fideo->precioPaquete = $request->precioPaquete;
        $fideo->pesoPaquete = $request->pesoPaquete;
        $fideo->cantidadPaquetesStock = $request->cantidadPaquetesStock;
        $fideo->save();

        return response()->json($fideo);
    }

    public function edit(Request $request)
    {
        $request->validate([
            'tipo' => 'required',
            'marca' => 'required',
            'precioPaquete' => 'required',
            'pesoPaquete' => 'required',
            'cantidadPaquetesStock' => 'required',
        ]);
        $fideo = Fideos::find($request->id);
        if ($fideo) {
            $fideo->tipo = $request->tipo;
            $fideo->marca = $request->marca;
            $fideo->precioPaquete = $request->precioPaquete;
            $fideo->pesoPaquete = $request->pesoPaquete;
            $fideo->cantidadPaquetesStock = $request->cantidadPaquetesStock;
            $fideo->save();
        }
        return response()->json($fideo);
    }

    public function delete($id)
    {
        $fideo = Fideos::find($id);
        if ($fideo) {
            $fideo->delete();
        }
        return response()->json($fideo);
    }

    public function getFilterBranch($branch)
    {
        $fideos = Fideos::where('marca', $branch)->get();
        return response()->json($fideos);
    }

    public function getFilterPrice($price)
    {
        $fideos = Fideos::where('precioPaquete', $price)->get();
        return response()->json($fideos);
    }

    public function getProductsStock()
    {
        $fideos = Fideos::where('cantidadPaquetesStock', '>', 0)->get();
        return response()->json($fideos);
    }


}
