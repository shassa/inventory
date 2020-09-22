@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
@foreach($products as $product)
<div class="col-sm-3">
  <div class = "card-deck mx-2 mb-3" style="width: 18rem;">
    <img class="card-img-top" src="{{asset('images/'.$product->image)}}" height="200px" width="200px" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">{{$product->name}}</h5>
        <p class="card-text">the price:{{$product->price}}</p>
        <p class="card-text">quantity in stores:{{$product->quantity}}</p>
        <p class="card-text">category :{{$product->category->name}}</p>

      </div>
  </div>
</div>
@endforeach


    </div>
</div>
{{$products->render()}}    

@endsection