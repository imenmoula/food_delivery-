@extends('master')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Liste des Plats :</h4>
                    </div>

                    @if($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <strong>{{$message}}</strong>
                    </div>
                    @endif
                    
                    
                    
                  
                    <div class="text-right">
                        <div class="text-right">
                            <a href="{{url('admin/plats/create')}}" class="btn btn-primary mt-2">
                                 new Plats
                            </a>
                        </div>                    
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            
                            <table class="table table-responsive-md">
                                <thead>
                                    <tr>
                                        <th><strong>ID#</strong></th>
                                        <th><strong>Nom de Plats</strong></th>
                                        <th><strong>Description</strong></th>
                                        <th><strong>prix</strong></th>
                                        <th><strong>quantite_disponible</strong></th>
                                        <th><strong>image</strong></th>
                                        <th><strong>disponible</strong></th>
                                        <th><strong>categories_name</strong></th>
                                        <th><strong>action</strong></th>

                                    </tr>
                                </thead>
                                <tbody>
                                   
                                        <tr>
                                          @foreach($menu as $m)
                                            <td><strong>{{$loop->index+1}}</strong></td>
                                            <td><strong>{{$m->nom_plat}}</strong></td>
                                            <td><strong>{{$m->description}}</strong></td>
                                            <td><strong>{{$m->prix}}</strong></td>
                                            <td><strong>{{$m->qty}}</strong></td>
                                            
                                            <td>
                                            <div class="d-flex align-items-center">
                                                <img src="{{ asset('assets/uploads/menus/' . $m->image) }}" class="rounded-circle mr-2" width="55" height="55" />
                                          
                                            </div>
                                            </td>
                                            <td><strong>{{$m->disponible}}</strong></td>
                                            <td><strong>{{$m->category->name}}</strong></td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="{{route('admin.plats.edit', $m->id)}}" class="btn btn-primary shadow btn-xs sharp mr-2"><i class="fa fa-pencil"></i></a>
                                                    
                                                    <form method="POST" action="{{ route('admin.plats.destroy', $m->id) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                    
                                                        <button type='submit' class="btn btn-danger shadow btn-xs sharp mr-2" onclick="return confirm('Tu veux supprimer ce plat : {{$m->nom_plat}} ?')" data-toggle="tooltip">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </form>
                                                    
                                                    <a href={{route('admin.plats.show',$m->id)}} class="btn btn-primary shadow btn-xs sharp mr-2"><i class="fa fa-eye"></i></a> 

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
