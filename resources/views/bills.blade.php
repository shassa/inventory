@extends('index')
@section('contents')
<div class="row">
<div class="col-10 offset-2">

<div class="col-3 ">
<button class="btn btn-primary" data-toggle="modal" data-target="#bill_model"style="margin:10px;">
<i class="fas fa-plus"></i>
Add Bill</button>
</div>

<form method="POST" action="{{route('bills.store')}}">
             @CSRF
             <div class="modal fade" id="bill_model" tabindex="-1" role="dialog" 
                  aria-labelledby="exampleModalLabel" aria-hidden="true">
                     <div class="modal-dialog" role="document">
                         <div class="modal-content">
                             <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                                </button>
                             </div>
                                   <div class="modal-body selector">
                                          <label>product name</label>
                                              <select class="form-control" id="selector" name="product_id">
                                                  @foreach($products as $product)
                                                   <option value='{{$product->id}}'>{{$product->name}}</option>
                                                  @endforeach
                                             </select>
                                          <br>
                                          
                                          <label>branch</label>
                                             <select class="form-control" name="branch_id">
                                               @foreach($branchs as $branch)
                                               <option value='{{$branch->id}}' >{{$branch->name}} </option>
                                                @endforeach
                                              </select>
                                          <br>
                          
                                          <label for="">Quantity</label>
                                          <input type="text" class="form-control" id="quantity" name="quantity"> <br>

                                         
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
        <th>date</th>
        <th>category</th>
        <th>product Name</th>
        <th>store</th>
        <th>branch</th>
        <th>product Price</th>
        <th>Quantity</th>
        <th>total</th>
        <th colspan="2" style="text-align:center;">Action</th>
        </thead>
        <tbody>
        
@foreach($bills as $bill)
<tr>
<td> {{$bill->created_at}}</td>
<td> {{$bill->product->category['name']}}</td>
<td> {{$bill->product->name}}</td>
<td> {{$bill->branch->store['name']}}</td>
<td>{{$bill->branch->name}}</td>
<td>{{$bill->product->price}}</td>
<td>{{$bill->quantity}}</td>
<td>{{($bill->product->price)*($bill->quantity)}} </td>
<td> <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit_post{{$bill->id}}"><i class="fas fa-pen"></i></button></td>
<td> <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete_post{{$bill->id}}"><i class="fas fa-dumpster"></i></button></td>

<form method="POST" action="{{route('bills.update',$bill->id)}}">
@CSRF
{{method_field('PATCH')}}
<div class="modal fade" id="edit_post{{$bill->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <label>product name</label>
              <select class="form-control" name="product_name" value="{{$bill->product->name}}">
                  @foreach($products as $product)
                    <option value="{{$product->id}}" >{{$product->name}}</option>
                  @endforeach
              </select>
          <br>
          <label>branch</label>
              <select class="form-control" name="branch" value="{{$bill->branch->name}}">
                @foreach($branchs as $branch)
                <option value="{{$branch->id}}" >{{$branch->name}}</option>
                @endforeach
              </select>
          <br>
          <label>Quantity</label>
            <input class="form-control" name="quantity" value="{{$bill->quantity}}">
                                            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</form> 
<form method="POST" action="{{route('bills.destroy',$bill->id)}}">
@CSRF
{{method_field('DELETE')}}
<div class="modal fade" id="delete_post{{$bill->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
</tbody>
        
</div>
</div></div> 
@endforeach

@endsection

@section('scripts')
<script>

$(document).ready(function(){
 
  $('#selector').change(function(){
    var price=$(this).val();
    $('#quantity').keyup(function(){
          $('#total').val($(this).val()*price);

  })
  })
})
</script>

@endsection
