<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;

class EmpresaController extends Controller
{
    public function index()
    {
        return Empresa::all();
    }

    public function show($id)
    {
        // Lógica para exibir detalhes de uma empresa específica
    }

    public function create()
    {
        // Lógica para exibir o formulário de criação de empresa
    }

    public function store(Request $request)
    {
        // Lógica para armazenar uma nova empresa no banco de dados
    }

    public function edit($id)
    {
        // Lógica para exibir o formulário de edição de empresa
    }

    public function update(Request $request, $id)
    {
        // Lógica para atualizar uma empresa no banco de dados
    }

    public function destroy($id)
    {
        // Lógica para excluir uma empresa do banco de dados
    }
}
