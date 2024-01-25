<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Category</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <!--menu *****************************************************************************************************************!-->
    @include('partials.sidebar') 


<!---------------------------------------------------------------------------------------------------------------!----->
    <h1>Liste des plats:</h1>
   <div class="container">
    <div class="text-right" >
        <a href="admin/plats/create" class="btn btn-primary mt-2">new plats</a>
    </div>
    <table class="table">
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
</body>
</html>