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
                    <h1>Details de plats</h1>
                    <div class="card p-4">
                        <p>Nom de plat: <b>{{($menu)->nom_plat}}</b></p>
                        <p>Description: <b>{{($menu)->description }}</b></p>
                        <p>Prix de plat: <b>{{($menu)->prix }}</b></p>
                        <p>Quantite disponible: <b>{{($menu)->qty }}</b></p>

                        <p>Disponible: <b>{{($menu)->disponible }}</b></p>
                        <p>Nom de categorie: <b>{{$menu->category->name}}</b></p>

                        @if($menu)
                            <img src="{{ asset('assets/uploads/menus/' . $menu->image) }}" class="rounded" width="100%" />
                        @else
                            <p>Category not found</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
   
    
    
</body>
</html>
@endsection