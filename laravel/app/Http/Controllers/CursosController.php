<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursosController extends Controller
{
    public function index()
    {
        //dd('Olá Mundo');
        $cursos = Curso::all();
        //dd($cursos);
      //  return view('painel-admin'); //exportar a variavel por parametro
        return view('painel-admin', ['cursos'=> $cursos]);
    }

    public function create(){
      return view('create-curso');
    }


    public function store(Request $request){
     // dd($request);
     Curso::create($request->all());
     return redirect()->route('cursos-index');   //após a criação retorna para o index

    }


    public function edit($id){
      $cursos = Curso::where('id',$id)->first();  //procurar na tabela jofos (model) onde o id seja igual ao id do parametro
      if(!empty($cursos))//verificação: se a variação cursos (não encontrar o curso referente ao id) estiver vazia ele redireciona para a listagem
      {
        //dd($cursos);
        return view('edit-curso', ['cursos'=> $cursos]);
    }
      else
      {
        return redirect()->route('cursos-index');
      }
    }

    public function update(Request $request, $id){
      //dd($request);
      //dd($id);
      $data = [
        'titulo'=> $request->titulo,
        'topico'=> $request->topico,
        'embed'=> $request->embed,
        'descricao'=> $request->descricao,
      ];
      Curso::where('id',$id)->update($data);  //Para atualizar no banco , com o MOdel onde o id seja igual a variavel id, passa um update na variavel data
      return redirect()->route('cursos-index');
    }


    public function destroy($id){
      //dd($id);
      
      Curso::where('id',$id)->delete();
      return redirect()->route('cursos-index');
    }
}
