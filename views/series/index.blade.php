<x-layout title='Series' :mensagem-sucesso="$mensagemSucesso">
    @auth
    <a href ="{{ route('series.create') }}" class ='btn btn-dark mb-2'> Adicionar serie</a>
    @endauth
    <ul class='list-group'>
        @foreach ($series as $serie)
            <li class='list-group-item d-flex justify-content-between align-itens-center'> 
                @auth
                <a href ="{{route ('seasons.index', $serie->id)}}"> @endauth
                    {{ $serie->nome }} 
                    @auth
                </a>
                <span class= "d-flex">
                <a href="{{ route('series.edit', $serie->id) }}" class="btn btn-primary btn-sm">
                    E
                </a>

                    <form action="{{ route('series.destroy', $serie ->id)}}" method='POST' class='ms-2'>
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">
                            x
                        </button>
                    </form>
                </span>
                @endauth
            </li>
        @endforeach
    </ul>
</x-layout>