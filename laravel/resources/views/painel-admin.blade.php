<x-app-layout>
    <x-slot name="header">
        Adicionar curso

        
    </x-slot>
    <h1>Listagem dos cursos</h1>
    <table class="table">
        <thead>
          <tr>
                <th scope="col">#</th>
                <th scope="col">Título</th>
                <th scope="col">Tópico</th>
                <th scope="col">Embed</th>
                <th scope="col">Descrição</th>
          </tr>
        </thead>
        <tbody>
            @foreach($cursos as $curso)
                
            
          <tr>
                <th>{{$curso->id}}</th>
                <th>{{$curso->topico}}</th>
                <th>{{$curso->embed}}</th>
                <th>{{$curso->descricao}}</th>
          </tr>
          @endforeach
        </tbody>
      </table>
    
</x-app-layout>