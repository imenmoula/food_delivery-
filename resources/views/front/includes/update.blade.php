@extends('front/home')
@section('container')

<div class="container mt-5">
    <h4>Modif quantite</h4>
     <form method="POST" action="{{ route('cart.update', $item->id) }}" enctype="multipart/form-data">
       @csrf
       <div class="form-group">
         <label>Id#*:</label>
         <input type="hidden" class="form-control"name="name"  placeholder="" value="{{$item->id}}"/>
         
       </div>
       
 
       <div class="form-group">
         <label>Description *:</label>
         <input type="number" class="form-control"name="quantity"  placeholder="" value="{{$item->quantity}}" class="w-6 text-center bg-gray-300"/>

       </div>
       <button type="submit" class="px-2 pb-2 ml-2 text-white bg-blue-500">update</button>

     </form>
</div>

@endsection