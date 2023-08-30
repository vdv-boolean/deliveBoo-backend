@extends('layouts.app')

@section('content')
<div class="container">
   

    <div class="d-flex justify-content-around p-3">
      @foreach ($restaurants as $restaurant)
        <div>
            <div>
              Nome attività: {{ $restaurant->rest_name }}
            </div>
            <div>
              P.IVA: {{ $restaurant->vat }}
            </div>
            <div>
              Indirizzo: {{ $restaurant->address}}
            </div>
            <div> Tipologia: 
              @foreach ($types as $type)
                @if(($loop->count == 1))
                  {{$type->name}}.
                @else
                  @if($loop->last == false)
                    {{$type->name}},
                  @else
                    {{$type->name}}.
                  @endif
                @endif
              @endforeach
            </div>
                 
        </div>
        <img class="w-25" src={{Vite::asset("resources/img/$restaurant->img")}} alt="">
      @endforeach
    </div>

    <h1>I Tuoi Piatti</h1>

    <div class="d-flex">
        <h5>Crea un nuovo piatto</h5>
        <a class="btn btn-primary" href="{{ route('plates.create') }}">Crea</a>
        
        
    </div>


    <table class="table">
        <thead>
          <tr>
            <th scope="col">Nome</th>
            <th scope="col">Ingredienti</th>
            <th scope="col">Prezzo</th>
            <th scope="col">Visibile</th>
            <th></th>
          </tr>
        </thead>
        <tbody>

            @foreach ($plates as $plate)
              <tr>
                <td>{{$plate->name}}</td>
                <td>{{$plate->ingredients}}</td>
                <td>€ {{number_format($plate->price/100, 2, ',', '')}}</td>
                <td>{{$plate->visibility ? 'Sì' : 'No'}}</td>
                <td>
                  <form action="{{ route('plates.destroy', ['plate' => $plate->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Elimina</button>
                  </form>
                </td>
              </tr>
            @endforeach
          </tbody>
      </table>
</div>
@endsection

