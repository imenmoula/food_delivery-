@extends('master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    
    @if($message=Session::get('success'))
    <div class="alert alert-success alert-block">
        <strong>{{$message}}</strong>
    </div>

    @endif

    <div class="container">
    
        <div class="row justify-content-center">
            <h1>Modification de Categories</h1>
            <div class="col-sm-8">
                <div class="card mt-3 p-3">
                    <h1 class="text-muted">category modifier #{{$categories->id}}</h1>
                <form method ="POST" action="/admin/{{$categories->id}}/update" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Nom:</label>
                        <input type="text" class="form-control"  value="{{old('name',$categories->name)}}" name="name"/>
                        @if($errors->has('name'))
                        <span class="text-danger">{{$errors->first('name')}}</span>
                        @endif
                      </div>

                      <div class="form-group">
                        <label>Description:</label>
                        <textarea class="form-control" 
                        row="4" 
                        name="description" 
                        value="{{old('description',$categories->description)}}">
                    </textarea>                           
                    @if($errors->has('description'))
                        <span class="text-danger">{{$errors->first('description')}}</span>
                        @endif
                      
                      </div>

                      

                      <div class="form-group">
                        <label>Image:</label>
                        <input type="file" name="image" class="form-control"/>
                        @if($errors->has('image'))
                        <span class="text-danger">{{$errors->first('image')}}</span>
                        @endif
                      
                      </div>

                      
                      <button type="submit" class="btn btn-primary">Envoyer</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
@section