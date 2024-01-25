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
    <h1>Category</h1>
   <div class="container">
    <div class="text-right" >
        <a href="admin/create" class="btn btn-primary mt-2">Nouvelle Catégorie</a>
    </div>

    </div>
    
<div class="container">
    <h2>Liste des Categories:</h2>
    <table class="table table-hover mt-2">
        <thead>
            <tr>
            <th>Id#</th>
            <th>Name</th>
            <th>Description</th>
            <th>Image</th>
            <th>Action</th>

            </tr>
        </thead>
        <tbody>

        @foreach ($admin as $category)
            <tr>
            <td>{{$loop->index+1}}</td>
            <td>{{$category->name}}</td>
            <td>{{$category->description}}</td>
            <td>
                <img src="admin/{{$category->image}}" class="rounded-circle"
                width="60" height="60"/>          
            </td>
            <td>
                <a href="admin/{{$category->id}}/edit" class="btn btn-warning btn-sm">Update</a>
            
                <form method="POST" class="d-inline" action="admin/{{$category->id}}/delete">
                    @csrf
                    @method('DELETE')
            <button type="submit"  class="btn btn-danger btn-sm">Delete</button>
              
                </form>

                <a href="admin/{id}/show" class="btn btn-success btn-sm">show</a>

            </td>
        </tr>
        @endforeach
        </tbody>
   </table>
 </div>
 
</body>
</html>
 