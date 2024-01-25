@extends('master')

@section('content')

    <div class="container-fluid">
            

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Liste de Categories :</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-responsive-md">
                                    <thead>
                                        <tr>
                                           
                                            <th><strong>ID NO.</strong></th>
                                            <th><strong>Nom</strong></th>
                                            <th><strong>Description</strong></th>
                                            <th><strong>Image</strong></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($categories as $category)
                                        <tr>
                                           
                                            <td><strong>{{$loop->index+1}}</strong></td>
                                            <td>{{$category->name}}	</td>
                                            <td>{{$category->description}} </td>
                                            <td><div class="d-flex align-items-center">
                                                <img src="admin/{{$category->image}}" class="rounded-lg mr-2" width="24" alt="">
                                            </div></td>

                                            <td>
                                                <div class="d-flex">
                                                    <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            </div>

@endsection