<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pessoa;

class Empresa extends Model
{
    use HasFactory;
    protected $table = 'empresa'; 
    
    protected $fillable = [
        'nome', 
        'cnpj', 
        'endereco'
    ];

    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class, );
    }

}
