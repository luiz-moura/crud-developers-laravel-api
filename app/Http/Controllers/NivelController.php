<?php

namespace App\Http\Controllers;

use App\Http\Resources\NivelResource;
use App\Models\Nivel;
use Illuminate\Http\Request;

class NivelController extends Controller
{
    public function index(Request $request)
    {
        $query = Nivel::query();

        if ($request->filled('nivel')) {
            $query->whereRaw("unaccent(nome) ilike ?", "%{$request->query('nivel')}%");
        }

        $niveis = $query->paginate(20);

        return new NivelResource($niveis);
    }

    public function store(Request $request)
    {
        $nivel = Nivel::create($request->only('nome'));

        return new NivelResource($nivel);
    }

    public function show(Nivel $nivel)
    {
        return new NivelResource($nivel);
    }

    public function update(Request $request, Nivel $nivel)
    {
        $nivel->update($request->only('nome'));

        return new NivelResource($nivel);
    }

    public function destroy(Nivel $nivel)
    {
        if ($nivel->has('desenvolvedores')) {
            return response()->json(['error' => 'Um (ou mais) desenvolvedor(es) associado a este nivel'], 501);
        }

        $nivel->delete();

        return response()->json(null, 204);
    }
}
