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
    <form method="POST" action="/admin/order/{{$menu->id}}/update" enctype="multipart/form-data">
        @csrf
        @method('PUT')

      <div class="form-group">
        <label>Nom de Plats*:</label>
        <input type="text" class="form-control"name="nom_plat"  placeholder="" value="{{old('nom_plat',$menu->nom_plat)}}"/>
        {{-- or value={{$plats->nom_plat}} --}}
        @if($errors->has('nom_plat'))
        <span class="text-danger">{{$errors->first('nom_plat')}}</span>
        @endif
      </div>
      

     
      
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