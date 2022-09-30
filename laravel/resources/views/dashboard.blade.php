<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    

                    <table class=" gap-2 columns-2 md:columns-3 lg:columns-4">
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
                            @foreach(\App\Models\Curso::all() as $curso)
                          <tr class="border border-black">
                                <th>{{$curso->id}}</th>
                                <th>{{$curso->titulo}}</th>
                                <th>{{$curso->topico}}</th>
                                <th>{{$curso->embed}}</th>
                                <th>{{$curso->descricao}}</th>

                          </tr>
                          @endforeach
                        </tbody>



                </div>
            </div>
        </div>
    </div>
</x-app-layout>
