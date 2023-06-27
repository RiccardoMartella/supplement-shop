@extends('layouts.admin')


@section('content-admin')
<div>
    
    <table class="table mt-4">
        <thead>
            <tr>
                <th scope="col">n.</th>
                <th scope="col">Titolo</th>
                <th scope="col">Descrizione</th>
                <th scope="col">prezzo</th>
                <th scope="col">elimina</th>
                <th scope="col">edit</th>
            </tr>
        </thead>
        <tbody>
             @foreach ( $supplements as $progetto)
              <tr>
                <th scope="row">1</th>
                <td>{{$progetto->nome}}</td>
                <td>{{$progetto->descrizione}}</td>
                <td>{{$progetto->prezzo}}</td>
                <td>
                    <form action="{{route('admin.progetti.destroy', $progetto)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <div class="d-flex align-items-center ">
                          <button onclick="return confirm('Sei sicuro di eliminare il progetto?')" type="submit" class="btn btn-danger">
                            <div class="d-flex align-items-center justify-content-center p-1">x</div>
                          </button>
                        </div>
                    </form>
                    <td>
                        <a href="{{ route('admin.show', $progetto) }}"><button class="btn btn-success  p-2">Edit</button></a>
    
                    </td>
                </td>
            </tr>
            @endforeach
            </tbody>
          </table>
          <div  class="mt-2">
            <a href="{{route('admin.create')}}">Crea progetto</a>
        </div>
</div>


@endsection

