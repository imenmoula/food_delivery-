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
                    <div class="card p-4">
                        <p>Nom: <b>{{ optional($categories)->name }}</b></p>
                        <p>Description: <b>{{ optional($categories)->description }}</b></p>
                        @if($categories)
                            <img src="{{ asset('assets/uploads/categories/' . $categories->image) }}" class="rounded" width="100%" />
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