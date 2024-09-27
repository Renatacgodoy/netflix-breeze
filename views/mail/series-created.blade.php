@component('mail::message')
    
# {{$nomeSerie}} criada
A serie {{$nomeSerie}} tem {{$qtdTemporadas}} temporadas e {{$episodiosPorTemporada}} episodios.
Acesse aqui:
@component('mail::button', ['url'=> route('seasons.index', $idSeries)])
    Ver série
@endcomponent
@endcomponent