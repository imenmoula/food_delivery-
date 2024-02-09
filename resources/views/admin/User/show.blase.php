@extends('master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-8 mt-4">
                    <h3>Details de client #{{ $user->id }}:{{ $user->name }} </h3>
                    <div class="card p-4">
                        <p>Nom & Prenom: <b>{{ $user->name }}</b></p>
                        <p>Email: <b>{{ $user->email }}</b></p>
                        <p>Phone: <b>{{ $user->password }}</b></p>
                        <p>Telephone: <b>{{ $user->phone }}</b></p>
                        <p>Adresse: <b>{{ $user->adresse }}</b></p>
                        <p>Role: <b>{{ $user->role }}</b></p>
                        
                    </div>
                </div>
            </div>
        </div>
   
    
    
</body>
</html>
@endsection