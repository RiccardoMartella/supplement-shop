@extends('layouts.admin')

@section('content-admin')
<h1 class=" mt-3 text-white ">Crea Integratore</h1>
     <div class=" container text-white">
          <div class="row">
               <form class="p-0" action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
               @csrf

               <div class="mb-3">
                 <label for="image" class="form-label">Choose file</label>
                 <input type="file" class="form-control" name="image" id="image" aria-describedby="fileHelpId" onchange="handleFileSelect(event)">
                 <input type="hidden" name="cover_image" id="cover_image" value="">
               </div>
               
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

               <div class="form-group">
                    <label class="form-label">Categoria</label>
                    <select class="form-control" name="category_id">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->nome }}</option>
                        @endforeach
                    </select>
                </div>
              
               <button type="submit" class="btn btn-primary mt-3">Crea</button>

               </form>
          </div>
     </div>

@endsection

<script>
     function handleFileSelect(event) {
        var file = event.target.files[0];
        var reader = new FileReader();

        reader.onload = function(event) {
            // Update hidden input field value with base64 image data
            document.getElementById('cover_image').value = event.target.result;
        };

        reader.readAsDataURL(file);
    }
 </script>