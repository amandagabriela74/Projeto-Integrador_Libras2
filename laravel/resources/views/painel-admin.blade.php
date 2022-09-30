<x-app-layout>
    <x-slot name="header">
        Adicionar curso

    <div>
      <a href="{{ route('cursos-create')}}"> Novo curso</a>
    </div>  
    </x-slot>
    <h1>Listagem dos cursos</h1>
    <table class="table">
        <thead>
          <tr >
                <th scope="col">#</th>
                <th scope="col">Título</th>
                <th scope="col">Tópico</th>
                <th scope="col">Embed</th>
                <th scope="col">Descrição</th>
                <th scope="col">...</th>
          </tr>
        </thead>
        <tbody>
            @foreach($cursos as $curso)
          <tr>
                <th>{{$curso->id}}</th>
                <th>{{$curso->titulo}}</th>
                <th>{{$curso->topico}}</th>
                <th>{{$curso->embed}}</th>
                <th>{{$curso->descricao}}</th>
                <th>
                  <a href="{{route('cursos-edit',['id'=>$curso->id])}}">Editar</a>  
                  <form action="{{route('cursos-destroy',['id'=>$curso->id])}} method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Deletar</button>
                  </form>
                </th>
          </tr>
          @endforeach
        </tbody>
      </table>
    
</x-app-layout>