<?php

namespace App\Http\Controllers;

use App\Models\Anuncio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AnuncioController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        if ($search) {
            $anuncios = Anuncio::where('Numero', 'like', '%' . $search . '%')->get();
        } else {
            $anuncios = Anuncio::all();
        }

        //Log::info($ofertas);

        return view('anuncios.index', compact('anuncios'));
    }

    public function create()
    {
        return view('anuncios.create');
    }

    public function store(Request $request)
    {
        Anuncio::create($request->all());
        return redirect()->route('anuncios.index');
    }

    public function edit(Anuncio $anuncio)
    {
        return view('anuncios.edit', compact('anuncio'));
    }

    public function update(Request $request, Anuncio $anuncio)
    {
        $anuncio->update($request->all());
        return redirect()->route('anuncios.index');
    }

    public function destroy(Anuncio $anuncio)
    {
        $anuncio->delete();
        return redirect()->route('anuncios.index');
    }

    public function show(int $id)
    {
        $anuncio = Anuncio::findOrFail($id);
        return view('anuncios.show', compact('anuncio'));
    }
}
