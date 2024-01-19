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
        $id_unidade = $request->input('id_unidade');
        $cargo_id = $request->input('cargo_id');
        $nome = $request->input('nome');
        $cpf = $request->input('cpf');
        $mail = $request->input('mail');
    
        $colaborador = Colaboradores::create([
            'id_unidade' => $id_unidade,
            'nome' => $nome,
            'cpf' => $cpf,
            'mail' => $mail,
        ]);
    
        $colaborador_id = $colaborador->id;
    
        $criarcargo = Cargo_Colaboradores::create([
            'cargo_id' => $cargo_id,
            'colaborador_id' => $colaborador_id,
            'nota_desempenho' => 'N/A',
        ]);
    
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

    public function relatorios_csv()
    {
        return view('paginas.relatorios');
    }

    public function relatorios_csv_colaboradores()
    {
        $itemsPorPagina = 5;

        $colaboradores = Colaboradores::paginate($itemsPorPagina);

        return view('paginas.relatorios.colaboradores', compact('colaboradores'));
    }

    public function relatorios_csv_unidades()
    {
        $itemsPorPagina = 5;
    
        $contagemPorUnidade = Colaboradores::select('id_unidade', DB::raw('count(*) as total'))
            ->groupBy('id_unidade')
            ->with('unidade')
            ->paginate($itemsPorPagina);
    
        return view('paginas.relatorios.unidades', compact('contagemPorUnidade'));
    }

    public function relatorios_csv_ranking()
    {
        $itemsPorPagina = 5;
    
        $rankingcolaboradores = Cargo_Colaboradores::orderBy('nota_desempenho', 'DESC')
            ->with('colaboradores_select_ranking', 'cargo_select_ranking')
            ->paginate($itemsPorPagina);
    
        return view('paginas.relatorios.ranking', compact('rankingcolaboradores'));
    }
    
}
