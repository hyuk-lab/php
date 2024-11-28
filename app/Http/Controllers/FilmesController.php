<?php

namespace App\Http\Controllers;
use App\Models\filme;
use Illuminate\Http\Request;

class FilmesController extends Controller
{
    public function criar(Request $request) {
        $filme = new Filme;
        $filme->name = $request->name;
        $filme->ator = $request->ator;

        $filme->save();
        return redirect('/listar_filmes');
    }

    public function listar() {
        $filmes = \App\Models\filme::with('ator')->get();
        return view("filmes", ["filmes"=>$filmes]);
    }

    public function formCriarFilmes() {
        $atores = \App\Models\ator::all(); 
        return view('cadastro_filmes', ['atores' => $atores]);
    }
    

    public function deletar($id) {
        $filme = Filme::find($id);
        if ($filme) {
            $filme->delete();
        }
        return redirect('/listar_filmes');
    }
    

    public function formEditarMateria($id) {
        $filme = Filme::find($id);

        return view('editar_filme', ["filme" => $filme]);
    }


    public function editar(Request $request) {
        Filme::where('id', $request->id)->update([
            'name' => $request->name,
            'descricao' => $request->descricao,
        ]);

        return redirect('/listar_filmes');
    }
}
