@extends('master')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Liste de client :</h4>
                    </div>

                    
                    
                    
                  
                    <div class="text-right">
                        <div class="text-right">
                            <a href="{{ route('admin.User.create') }}" class="btn btn-primary mt-2">
                                 Ajout client
                            </a>
                        </div>                    
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            
                            <table class="table table-responsive-md">
                                <thead>
                                    <tr>
                                        <th><strong>ID#</strong></th>
                                        <th><strong>Nom & Prenom</strong></th>
                                        <th><strong>Email</strong></th>
                                        <th><strong>role</strong></th>
                                        <th><strong>Telephone</strong></th>
                                        <th><strong>Adresse</strong></th>
                                        <th><strong>Actions</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($user as $u)
                                        <tr>
                                            <td><strong>{{$u->index+1}}</strong></td>
                                            <td><strong>{{$u->name}}</strong></td>
                                            <td><strong>{{$u->email}}</strong></td>
                                            <td><strong>{{$u->role}}</strong></td>
                                            <td><strong>{{$u->phone}}</strong></td>
                                            <td><strong>{{$u->address}}</strong></td>
                                            <td>
                                            
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="{{route('admin.User.edit', $u->id)}}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                    
                                                    <form method="POST" action="{{ route('admin.User.destroy', $u->id) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                    
                                                        <button type='submit' class="btn btn-danger shadow btn-xs sharp"  onclick="return confirm('Tu veux supprimer ce client : {{$u->name}} ?')" data-toggle="tooltip">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </form>
                                                    
                                                    <a href="{{route('admin.User.show',$u->id) }}" class="btn btn-primary shadow btn-xs sharp mr-2"><i class="fa fa-eye"></i></a>

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
