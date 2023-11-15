<?php

namespace App\Http\Controllers;

use App\Models\Local;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LocalController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        if ($search) {
            $locales = Local::where('Numero', 'like', '%' . $search . '%')->get();
        } else {
            $locales = Local::all();
        }

        //Log::info($ofertas);

        return view('local.index', compact('locales'));
    }

    public function create()
    {
        return view('local.create');
    }

    public function store(Request $request)
    {
        Local::create($request->all());
        return redirect()->route('local.index');
    }

    public function edit(Local $local)
    {
        return view('local.edit', compact('local'));
    }

    public function update(Request $request, Local $local)
    {
        $local->update($request->all());
        return redirect()->route('local.index');
    }

    public function destroy(Local $local)
    {
        $local->delete();
        return redirect()->route('local.index');
    }

    public function show(int $id)
    {
        $local = Local::findOrFail($id);
        return view('local.show', compact('local'));
    }
}
