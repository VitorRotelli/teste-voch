<?php

namespace App\Http\Controllers;

use App\Models\CriarUni;
use App\Models\Cargo;
use App\Models\Colaboradores;
use App\Models\Cargo_Colaboradores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function create()
    {
        return view('paginas.cadastro_unidades');
    }

    public function store(Request $request)
    {
        $criaruni = CriarUni::create($request->all());

        return redirect('/sucesso');
    }

    public function show()
    {
        return view('paginas.sucesso');
    }

    public function colaborador_cadastro()
    {   
        $unidades = DB::table('unidades')->pluck('id', 'nome_fantasia');
        $cargos = DB::table('cargos')->pluck('id', 'cargo');

        return view('paginas.cadastro_colaborador', compact('unidades', 'cargos'));
    }

    public function cadastro_colaborador(Request $request)
    {
        $criarcolab = Colaboradores::create($request->all());
        // $criarcargo = Cargo_Colaboradores::create($request->all());

        return redirect('/sucesso');
    }

    public function edit()
    {
        $colaboradores = DB::table('cargo_colaborador')->pluck('colaborador_id');

        return view('paginas.editar_desempenho', compact('colaboradores'));
    }

    public function updateDesempenho(Request $request)
    {
        $colaborador_id = $request->input('colaborador_id');
        $nota_desempenho = $request->input('nota_desempenho');

        DB::table('cargo_colaborador')
            ->where('colaborador_id', $colaborador_id)
            ->update(['nota_desempenho' => $nota_desempenho]);

        return redirect('/sucesso');
    }
}
