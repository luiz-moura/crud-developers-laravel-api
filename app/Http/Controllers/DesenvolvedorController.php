<?php

namespace App\Http\Controllers;

use App\Http\Resources\DesenvolvedorResource;
use App\Models\Desenvolvedor;
use Illuminate\Http\Request;

class DesenvolvedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = Desenvolvedor::query();

        if ($request->filled('nome')) {
            $query->whereRaw("unaccent(nome) ilike ?", "%{$request->query('nome')}%");
        }

        $desenvolvedores = $query->paginate(20);

        return new DesenvolvedorResource($desenvolvedores);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $desenvolvedor = Desenvolvedor::create($request->only(['nivel_id', 'nome', 'sexo', 'data_nascimento', 'hobby']));

        return new DesenvolvedorResource($desenvolvedor);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Desenvolvedor  $desenvolvedor
     * @return \Illuminate\Http\Response
     */
    public function show(Desenvolvedor $desenvolvedor)
    {
        return new DesenvolvedorResource($desenvolvedor);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Desenvolvedor  $desenvolvedor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Desenvolvedor $desenvolvedor)
    {
        $desenvolvedor->update($request->only(['nivel_id', 'nome', 'sexo', 'data_nascimento', 'hobby']));

        return new DesenvolvedorResource($desenvolvedor);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Desenvolvedor  $desenvolvedor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Desenvolvedor $desenvolvedor)
    {
        $desenvolvedor->delete();

        return response()->json(null, 204);
    }
}
