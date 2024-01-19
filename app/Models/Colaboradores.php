<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colaboradores extends Model
{
    use HasFactory;

    protected $table = 'colaboradores';

    protected $fillable = ['id_unidade', 'nome', 'cpf', 'mail'];

    public function unidade()
    {
        return $this->belongsTo(Produto::class, 'id_unidade', 'id');
    }
}