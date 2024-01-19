<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargo_Colaboradores extends Model
{
    use HasFactory;

    protected $table = 'cargo_colaborador';

    protected $fillable = ['cargo_id', 'colaborador_id', 'nota_desempenho'];

    public function colaboradores_select_ranking()
    {
        return $this->belongsTo(Colaboradores::class, 'colaborador_id')
            ->select('id', 'id_unidade', 'nome', 'cpf', 'mail');
    }

    public function cargo_select_ranking()
    {
        return $this->belongsTo(Cargo::class, 'cargo_id')
            ->select('id', 'cargo');
    }
}
