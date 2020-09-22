@extends('index')
@section('contents')
<div class="row">
<div class="col-10 offset-2">

<div class="col-3 ">
<button class="btn btn-primary" data-toggle="modal" data-target="#product_model"style="margin:10px;">
<i class="fas fa-plus"></i>
Add Product</button>
</div>
<form method="POST" action="{{route('product.store')}}" enctype="multipart/form-data">
             @CSRF
             <div class="modal fade" id="product_model" tabindex="-1" role="dialog" 
                  aria-labelledby="exampleModalLabel" aria-hidden="true">
                     <div class="modal-dialog" role="document">
                         <div class="modal-content">
                             <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                                </button>
                             </div>
                                   <div class="modal-body">
                                          <label>name</label>
                                          <input type="text" class="form-control" name="name">
                                          <label>price</label>
                                          <input type="text" class="form-control" name="price">
                                          <label>quantity</label>
                                          <input type="text" class="form-control" name="quantity">
                                          <label>image</label>
                                          <input type="file" class="form-control" name="image">
                                          <br>
                                          <label>category</label>
                                          <select class="form-control" name="category_id">
                                              @foreach($categorys as $category)
                                              <option value='{{$category->id}}'>{{$category->name}}</option>
                                                @endforeach
                                              </select>
                                        
                                   </div>
                              <div class="modal-footer">
                                   <button type="button" class="btn btn-secondary" data-dismiss="modal">close</button>
                                   <button type="submit" class="btn btn-primary">save</button>
                              </div>
                           </div>
                       </div>
             </div>
             </form>


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
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#updat_modal{{$product->id}}"><i class="fas fa-pen"></i></button>
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete_post{{$product->id}}"><i class="fas fa-dumpster"></i></button>
      </div>
  </div>
</div>
        <form method="POST" action="{{route('product.update',$product->id)}}" enctype="multipart/form-data">
             @CSRF
             {{method_field('PATCH')}}
             <div class="modal fade" id="updat_modal{{$product->id}}" tabindex="-1" role="dialog" 
                  aria-labelledby="exampleModalLabel" aria-hidden="true">
                     <div class="modal-dialog" role="document">
                         <div class="modal-content">
                             <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                                </button>
                             </div>
                                   <div class="modal-body">
                                          <label>name</label>
                                          <input type="text" class="form-control" name="name" placeholder="{{$product->name}}">
                                          <label>price</label>
                                          <input type="text" class="form-control" name="price" placeholder="{{$product->price}}">
                                          <label>quantity</label>
                                          <input type="text" class="form-control" name="quantity" placeholder="{{$product->quantity}}">
                                          <label>image</label>
                                          <input type="file" class="form-control" name="image">
                                          <br>
                                          <label>category</label>
                                          <select class="form-control" name="category_id">
                                              @foreach($categorys as $category)
                                              <option value='{{$category->id}}'>{{$category->name}}</option>
                                                @endforeach
                                              </select>
                                        
                                   </div>
                              <div class="modal-footer">
                                   <button type="button" class="btn btn-secondary" data-dismiss="modal">close</button>
                                   <button type="submit" class="btn btn-primary">save</button>
                              </div>
                           </div>
                       </div>
             </div>
             </form>

       
        <form method="POST" action="{{route('product.destroy',$product->id)}}">
@CSRF
{{method_field('DELETE')}}
<div class="modal fade" id="delete_post{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h3>Are You Sure</h3>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <button type="submit" class="btn btn-danger">yes</button>
      </div>
    </div>
  </div>
</div>
</form>
        </tr>
        @endforeach
        
        </div>

</div>
</div></div>        
@endsection
