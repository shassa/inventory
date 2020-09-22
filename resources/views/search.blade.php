@extends('index')
@section('contents')
<div class="row">
<div class="col-3">
</div>
<div class="col-6">
  <input class="form-control" id="search">
</div> 
 </div>
      <br>
<div class="col-10 offset-2">
  <table class="table table-border table-hover table-striped">
  <thead class="thead-dark">
  <th>product</th>
  <th>store name</th> 
  <th>store quantity</th>    
  <th>branch name</th>  
  <th>branch quantity</th>    
  </thead>
  </div>
  <tbody>
  @foreach($branchs as $branch)
  <td>{{$branch->store->product['name']}}</td>
  <td>{{$branch->store->name}}</td>
  <td>{{$branch->store->quantity}}</td>
  <td>{{$branch->name}}</td>
  <td>{{$branch->quantity}}</td>
  </tbody>
  @endforeach
  </table>
  
@endsection

