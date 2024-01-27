<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    use HasFactory;
    protected $table = 'pessoa'; 
    
    protected $fillable = [
        'id', 
        'nome',
        'cpf', 
        'funcao_id', 
        'comissao', 
        'telefone', 
        'data_admissao', 
        'data_desligamento', 
        'created_at', 
        'updated_at', 
        'empresa_id'
    ];
}
