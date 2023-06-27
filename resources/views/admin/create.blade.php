@extends('layouts.admin')

@section('content-admin')
<h1 class=" mt-3 text-white ">Crea Progetto</h1>
     <div class=" container text-white">
          <div class="row">
               <form class="p-0" action="{{ route('admin.store') }}" method="POST">
               @csrf
               <div class="form-group">
                    <label class="form-label">Nome </label>
                    <input type="text" class="form-control" name="nome"></input>
               </div>

               <div class="form-group">
                    <label class="form-label">descrizione</label>
                    <textarea class="form-control" name="descrizione" ></textarea>
               </div>

               <div class="form-group">
                    <label class="form-label">Prezzo</label>
                    <input type="number" class="form-control" name="prezzo"></input>
               </div>
              
               {{-- <div class="mb-3">
                    <label for="progetti-types" class="form-label">tipo</label>
                    <select class="form-select form-select-lg" name="type_id" id="progetti-types">
                         <option value="">scegli la tipologia</option>
                         @foreach ($types as $type)
                              <option value="{{$type->id}}">{{ $type->name }}</option>
                         @endforeach
                    </select>
               </div> --}}

               <button type="submit" class="btn btn-primary mt-3">Crea</button>

               </form>
          </div>
     </div>

@endsection