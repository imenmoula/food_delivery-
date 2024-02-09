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
    <strong>Une erreur de saisie de client :</strong>
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

  <div class="container mt-5">
   <h4>New Client</h4>
    <form method="POST" action="{{ route('admin.User.store') }}" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label>Nom & Prenom*:</label>
        <input type="text" class="form-control"name="name"  placeholder="saisir votre nom & prenom" value="{{old('name')}}"/>
        @if($errors->has('name'))
        <span class="text-danger">{{$errors->first('name')}}</span>
        @endif
      </div>
      

      <div class="form-group">
        <label>Email *:</label>
        <input type="text" class="form-control"name="email"  placeholder="saisir votre email" value="{{old('email')}}"/>
        @if($errors->has('email'))
        <span class="text-danger">{{$errors->first('email')}}</span>
        @endif
      </div>

      <div class="form-group">
        <label>Mot de passe *:</label>
        <input type="password" class="form-control"name="password"  placeholder="saisir votre mot de passe" value="{{old('password')}}"/>
        @if($errors->has('password'))
        <span class="text-danger">{{$errors->first('password')}}</span>
        @endif
      </div>

      <div class="form-group">
        <label>Sélectionner un rôle* :</label>
        <select name="role" class="form-control">
            @foreach($user as $u)
                <option value="{{ $u->id }}">{{ $u->role }}</option>
            @endforeach
        </select>
      
    </div>
    

      <div class="form-group">
        <label><A>Adresse*:</A></label>
        <input type="text" class="form-control"name="adresse"  placeholder="saisir votre adresse" value="{{old('adresse')}}"/>
        @if($errors->has('adresse'))
        <span class="text-danger">{{$errors->first('adresse')}}</span>
        @endif
      </div>


<div class="form-group">
        <label><A>Telephone*:</A></label>
        <input type="text" class="form-control"name="phone"  placeholder="saisir votre telephone" value="{{old('phone')}}"/>
        @if($errors->has('phone'))
        <span class="text-danger">{{$errors->first('phone')}}</span>
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