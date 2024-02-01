@extends('master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Votre Formulaire</title>
</head>
<body>
  
  @if($message = Session::get('success'))
  <div class="alert alert-success alert-block">
      <strong>{{$message}}</strong>
  </div>
  @endif

  @if($errors->any())
<div class="alert alert-danger alert-block">
    <strong>Une erreur s'est plats :</strong>
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

  <div class="container mt-5">
   <h4>Modif le  plats #{{$menu->id}}</h4>
    <form method="POST" action="/admin/plats/{{$menu->id}}/update" enctype="multipart/form-data">
        @csrf
        @method('PUT')

      <div class="form-group">
        <label>Nom de Plats*:</label>
        <input type="text" class="form-control"name="nom_plat"  placeholder="saisir votre nom de plats" value="{{old('nom_plat',$menu->nom_plat)}}"/>
        {{-- or value={{$plats->nom_plat}} --}}
        @if($errors->has('nom_plat'))
        <span class="text-danger">{{$errors->first('nom_plat')}}</span>
        @endif
      </div>
      

      <div class="form-group">
        <label>Description *:</label>
        <textarea class="form-control" rows="3" name="description"  value="{{old('description',$menu->description)}}" ></textarea>
        @if($errors->has('description'))
        <span class="text-danger">{{$errors->first('description')}}</span>
        @endif
      </div>
      <div class="form-group">
        <label>prix*:</label>
        <input type="text" class="form-control"name="prix"  placeholder="saisir votre prix" value="{{old('prix',$menu->prix)}}"/>
         @if($errors->has('prix'))
        <span class="text-danger">{{$errors->first('prix')}}</span>
        @endif
      </div>
      <div class="form-group">
        <label>quantite_disponible*:</label>
        <input type="text" class="form-control"name="qty"  placeholder="saisir votre qty" value=" {{old('qty',$menu->qty)}}"/>

        @if($errors->has('qty'))
        <span class="text-danger">{{$errors->first('qty')}}</span>
        @endif
      </div>


      <div class="form-group">
        <label>Ancienne Image*:</label>
        @if($menu->image)
        <img src="{{asset('assets/uploads/menus/'.$menu->image)}}" width="100">  
 
        @else
           <p>Aucune image</p> 
        @endif
      </div>
        <div class="form-group">
        <label>new Image*:</label>
        <input type="file" name="image" class="form-control"/>
        @if($errors->has('image'))
        <span class="text-danger">{{$errors->first('image')}}</span>
        @endif
      
      </div>
      
      
      
      
      <div class="form-group">
        <label>Disponibilité*:</label>
        <div class="radio-group">
           <label>
              <input type="radio" name="disponible" value="1" {{ old('disponible',$menu->disponible) == '1' ? 'checked' : '' }}> True
           </label>
           <label>
              <input type="radio" name="disponible" value="0" {{ old('disponible',$menu->disponible) == '0' ? 'checked' : '' }}> False 
           </label>
        </div>
        @if($errors->has('disponible'))
        <span class="text-danger">{{$errors->first('disponible')}}</span>
        @endif

        </div>
     

      <div class="form-group">
        <label>Sélectionner une catégorie*:</label>
        <select name="category_id" class="form-control">
            @foreach($categories as $category)
            <option value="{{$category->id}}">{{ $category->name }}</option>
            <option value="{{$category->id}}">{{ $category->name }}</option>
            <option value="{{$category->id}}">{{ $category->name }}</option>
            <option value="{{$category->id}}">{{ $category->name }}</option>
            <option value="{{$category->id}}">{{ $category->name }}</option>
            <option value="{{$category->id}}">{{ $category->name }}</option>
            @endforeach
        </select>

        
        @if($errors->has('category_id'))
        <span class="text-danger">{{$errors->first('category_id')}}</span>
        @endif

      </div>
     
      <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
@endsection