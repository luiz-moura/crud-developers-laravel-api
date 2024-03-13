<?php

namespace App\Http\Controllers;

use App\Http\Resources\DesenvolvedorResource;
use App\Models\Desenvolvedor;
use Illuminate\Http\Request;

class DesenvolvedorController extends Controller
{
    public function index(Request $request)
    {
        $query = Desenvolvedor::query();

        if ($request->filled('nome')) {
            $query->whereRaw("unaccent(nome) ilike ?", "%{$request->query('nome')}%");
        }

        $desenvolvedores = $query->paginate(20);

        return new DesenvolvedorResource($desenvolvedores);
    }

    public function store(Request $request)
    {
        $desenvolvedor = Desenvolvedor::create($request->only(['nivel_id', 'nome', 'sexo', 'data_nascimento', 'hobby']));

        return new DesenvolvedorResource($desenvolvedor);
    }

    public function show(Desenvolvedor $desenvolvedor)
    {
        return new DesenvolvedorResource($desenvolvedor);
    }


    public function update(Request $request, Desenvolvedor $desenvolvedor)
    {
        $desenvolvedor->update($request->only(['nivel_id', 'nome', 'sexo', 'data_nascimento', 'hobby']));

        return new DesenvolvedorResource($desenvolvedor);
    }

    public function destroy(Desenvolvedor $desenvolvedor)
    {
        $desenvolvedor->delete();

        return response()->json(null, 204);
    }
}
