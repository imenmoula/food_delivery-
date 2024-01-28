@extends('master')
@section('content')

    <div class="container-fluid">
    <h1>Liste des plats:</h1>
   <div class="container">
    <div class="text-right" >
        <a href="route('admin.plats.create')" class="btn btn-primary mt-2">new plats</a>
    </div>
    <table class="table" aria-describedby="table-description">
      <thead class="thead-primary mt-2">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nom de plat</th>
            <th scope="col">Description</th>
            <th scope="col">Prix</th>
            <th scope="col">Quantite_disponible</th>
            <th scope="col">Image</th>
            <th scope="col">Disponible</th>
            <th scope="col">Categorie_name</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($menu as $m)
          <tr>
            <th scope="row">1</th>
            <td>{{$loop->iteration}}</td>
            <td>{{$m->nom_plat}}</td>
            <td>{{$m->description}}</td>
            <td>{{$m->prix}}</td>
            <td>{{$m->qty}}</td>
            <td>{{$m->disponible}}</td>
            <td>{{$m->image}}</td>

            <td>{{$m->category->name}}</td>
          </tr>
          @endforeach
          
        </tbody>
      </table>

    </div>
  </div>

  @endsection