@extends('index')
@section('contents')
<div class="row">
<div class="col-10 offset-2">

<div class="col-3 ">
<button class="btn btn-primary" data-toggle="modal" data-target="#branch_model"style="margin:10px;">
<i class="fas fa-plus"></i>
Add branch</button>
</div>

<form method="POST" action="{{route('branch.store')}}">
             @CSRF
             <div class="modal fade" id="branch_model" tabindex="-1" role="dialog" 
                  aria-labelledby="exampleModalLabel" aria-hidden="true">
                     <div class="modal-dialog" role="document">
                         <div class="modal-content">
                             <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add New Branch</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                                </button>
                             </div>
                                   <div class="modal-body">
                                          <label>name</label>
                                          <input type="text" class="form-control" name="name">
                                          <label>address</label>
                                          <input type="text" class="form-control" name="address">

                                          <label>store</label>
                                          <br>
                                          <select class="form-control" name="store_id">
                                              @foreach($stores as $store)
                                              <option value='{{$store->id}}'>{{$store->name}}</option>
                                                @endforeach
                                              </select>    
                                              <label>product name</label>
                                              <select class="form-control" name="product_id">
                                              @foreach($products as $product)
                                              <option value='{{$product->id}}'>{{$product->name}}</option>
                                                @endforeach
                                              </select> 
                                              <label>product quantity</label>
                                          <input type="text" class="form-control" name="quantity">  
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
<table class="table table-border table-hover table-striped">
        <thead class="thead-dark">
        <th>name</th>
        <th>address</th>
        <th>store</th>
        <th>product name</th>
        <th>quantity</th>
        <th colspan="2" style="text-align:center;">Action</th>
        </thead>
        <tbody>
        <tr>
  @foreach($branchs as $branch)      
<td>{{$branch->name}}</td>
<td>{{$branch->address}}</td>
<td>{{$branch->store->name}}</td>
<td>{{$branch->store->product['name']}}</td>
<td>{{$branch->quantity}}</td>
<td> <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit_post{{$branch->id}}"><i class="fas fa-pen"></i></button></td>
<td> <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete_post{{$branch->id}}"><i class="fas fa-dumpster"></i></button></td>


<form method="POST" action="{{route('branch.update',$branch->id)}}">
@CSRF
{{method_field('PATCH')}}
<div class="modal fade" id="edit_post{{$branch->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
     <label>name</label>
     <input type="text" class="form-control" name="name">
    <label>address</label>
    <input type="text" class="form-control" name="address">
    <label>store</label>
    <br>
    <select class="form-control" name="store">
     @foreach($stores as $store)
     <option>{{$store->name}}</option>
      @endforeach
    </select>    

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</form>

<form method="POST" action="{{route('branch.destroy',$branch->id)}}">
@CSRF
{{method_field('DELETE')}}
<div class="modal fade" id="delete_post{{$branch->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
</tbody>
        
</div>
</div></div>        
@endsection
