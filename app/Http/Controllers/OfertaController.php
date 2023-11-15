<?php

namespace App\Http\Controllers;

use App\Models\Oferta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class OfertaController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        if ($search) {
            $ofertas = Oferta::where('Producto', 'like', '%' . $search . '%')->get();
        } else {
            $ofertas = Oferta::all();
        }

        //Log::info($ofertas);

        return view('ofertas.index', compact('ofertas'));
    }

    public function create()
    {
        return view('ofertas.create');
    }

    public function store(Request $request)
    {
        Oferta::create($request->all());
        return redirect()->route('ofertas.index');
    }

    public function edit(Oferta $oferta)
    {
        return view('ofertas.edit', compact('ofertaS'));
    }

    public function update(Request $request, Oferta $oferta)
    {
        $oferta->update($request->all());
        return redirect()->route('ofertas.index');
    }

    public function destroy(Oferta $oferta)
    {
        $oferta->delete();
        return redirect()->route('ofertas.index');
    }

    public function show(int $id)
    {
        $oferta = Oferta::findOrFail($id);
        return view('ofertas.show', compact('oferta'));
    }
}
