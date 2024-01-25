<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Form</title>

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
    @include('partials.sidebar') 

    @if($message=Session::get('success'))
    <div class="alert alert-success alert-block">
        <strong>{{$message}}</strong>
    </div>
    @endif

    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>ne pas reussie ton ajoute !</strong>
    </div>
@endif
<div class="container mt-5">
    <h2>Ajout Plats</h2>

   
    <form method="POST" action="admin/store" enctype="multipart/form-data">
        
        <div class="form-group">
            <label >Nom de Plat:</label>
            <input type="text" class="form-control"  name="nom_plat" value=""/>
        </div>

        <div class="form-group">
            <label>Description:</label>
            <textarea class="form-control" name="description" rows="3" ></textarea>
        </div>

        <div class="form-group">
            <label >prix:</label>
            <input type="text" class="form-control"  name="prix" value=""/>

        </div>

        <div class="form-group">
            <label >Quantite disponible :</label>
            <input type="text" class="form-control"  name="qty" value=""/>

        </div>

        <div class="form-group">
            <label >Disponible:</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="disponible"  value="">
                <label >True</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="disponible"  value="">
                <label >false</label>
        </div>

        </div>


        <div class="form-group">
            <label >Image:</label>
            <input type="file"  />

        </div>
       
        <div class="form-group">
            <label >Nom de categorie:</label>
            <select class="form-select" name="category_id">
                <option value="category_id" >Fast food</option>
                <option value="category_id" >Healthy food</option>
                <option value="category_id" >tradionnel food tunisienne</option>
                <option value="category_id" >Brunch</option>
                <option value="category_id" >dinner</option>

 
                <option>4</option>
              </select>

        </div>
        
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
 

</div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
