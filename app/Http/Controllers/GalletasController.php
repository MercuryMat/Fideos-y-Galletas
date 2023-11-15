<?php

namespace App\Http\Controllers;

use App\Models\Galletas;
use Illuminate\Http\Request;

class GalletasController extends Controller
{
    public function get()
    {
        $galletas = Galletas::all();
        return response()->json($galletas);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'sabor' => 'required',
            'marca' => 'required',
            'precioPaquete' => 'required',
            'pesoPaquete' => 'required',
            'cantidadPaquetesStock' => 'required',
        ]);
        $galleta = new Galletas;
        $galleta->nombre = $request->nombre;
        $galleta->sabor = $request->sabor;
        $galleta->marca = $request->marca;
        $galleta->precioPaquete = $request->precioPaquete;
        $galleta->pesoPaquete = $request->pesoPaquete;
        $galleta->cantidadPaquetesStock = $request->cantidadPaquetesStock;
        $galleta->save();

        return response()->json($galleta);
    }

    public function edit(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'nombre' => 'required',
            'sabor' => 'required',
            'marca' => 'required',
            'precioPaquete' => 'required',
            'pesoPaquete' => 'required',
            'cantidadPaquetesStock' => 'required',
        ]);
        $galleta = galletas::find($request->id);
        if ($galleta) {
            $galleta->nombre = $request->nombre;
            $galleta->sabor = $request->sabor;
            $galleta->marca = $request->marca;
            $galleta->precioPaquete = $request->precioPaquete;
            $galleta->pesoPaquete = $request->pesoPaquete;
            $galleta->cantidadPaquetesStock = $request->cantidadPaquetesStock;
            $galleta->save();
        }
        return response()->json($galleta);
    }

    public function delete($id)
    {
        $galleta = Galletas::find($id);
        if ($galleta) {
            $galleta->delete();
        }
        return response()->json($galleta);
    }

    public function getFilterBranch($branch)
    {
        $galletas = Galletas::where('marca', $branch)->get();
        return response()->json($galletas);
    }

    public function getFilterPrice($price)
    {
        $galletas = Galletas::where('precioPaquete', $price)->get();
        return response()->json($galletas);
    }

    public function getProductsStock()
    {
        $galletas = Galletas::where('cantidadPaquetesStock', '>', 0)->get();
        return response()->json($galletas);
    }
}
