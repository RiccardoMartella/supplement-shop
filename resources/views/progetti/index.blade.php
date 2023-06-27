@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
    
        @foreach ( $supplements as $elem)
            <div class="card col-3 m-3 d-flex align-items-center">
                <div class="p-3  d-flex flex-column align-items-center">
                    <h3>{{$elem->nome}}</h3>
                    <h3>{{$elem->descrizione}}</h3>
                    <h3>{{$elem->prezzo}}</h3>
                </div>
            </div>
        @endforeach
    
    </div>
    
    </div>
    
@endsection
