<?php

namespace App\Http\Controllers;
use App\Models\ator;
use Illuminate\Http\Request;

class AtoresController extends Controller
{

    public function criar(Request $request) {
        $ator = new Ator;
        $ator->name = $request->name;
        $ator->idade = $request->idade;
        $ator->nascimento = $request->nascimento;

        $ator->save();
        return redirect('/lista_atores');
    }

    public function listar() {
        $atores = Ator::all();

        return view("atores", ["atores"=>$atores]);
    }

    public function formCriarAtor() {
        return view("cadastro_ator");
    }

    public function deletar($id) {
        $atores = new Ator;
        $atores->find($id)->delete();
        return redirect('/lista_atores');
    }

    public function formEditarAtor($id) {
        $atores = Ator::find($id);

        return view('editar_atores', ["ator" => $atores]);
    }


    public function editar(Request $request) {
        Ator::where('id', $request->id)->update([
            'name' => $request->name,
            'idade' => $request->idade,
            'nascimento' => $request->nascimento
        ]);

        return redirect('/lista_atores');
    }

}
