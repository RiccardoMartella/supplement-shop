@extends('layouts.admin')

@section('content-admin')
<h1 class=" mt-3 text-white ">Modifica Integratore</h1>
     <div class=" container text-white">
          <div class="row">
               <form class="p-0" action="" method="POST">
               @csrf
               <div class="form-group">
                    <label class="form-label">Nome </label>
                    <input value="{{ $progetto->nome_progetto }}" type="text" class="form-control" name="nome_progetto"></input>
               </div>

               <div class="form-group">
                    <label class="form-label">descrizione</label>
                    <textarea value="{{ $progetto->descrizione }}" class="form-control" name="descrizione" ></textarea>
               </div>

               <div class="form-group">
                    <label class="form-label">Prezzo</label>
                    <input value="{{ $progetto->prezzo }}" type="number" class="form-control" name="prezzo"></input>
               </div>

               <div class="form-group">
                    <label class="form-label">tempo di realizzazione </label>
                    <input value="{{ $progetto->tempo_di_realizzazione }}" type="number" class="form-control" name="tempo_di_realizzazione"></input>
               </div>
               <button type="submit" class="btn btn-primary mt-3">Modifica</button>

               </form>
          </div>
     </div>
@endsection