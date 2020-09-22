@extends('index')
@section('contents')
<div class="row">
<div class="col-10 offset-2">
<div class="row">
<div class="col-3 ">
<button class="btn btn-primary" data-toggle="modal" data-target="#category_model"style="margin:10px;">
<i class="fas fa-plus"></i>
Add Category</button>

</div>
<div class="col-4">
<input class="form-control mb-4" id="tableSearch" type="text"
    placeholder="Type something to search list items">
    </div>
    </div>
<form method="POST" action="{{route('category.store')}}">
             @CSRF
             <div class="modal fade" id="category_model" tabindex="-1" role="dialog" 
                  aria-labelledby="exampleModalLabel" aria-hidden="true">
                     <div class="modal-dialog" role="document">
                         <div class="modal-content">
                             <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                                </button>
                             </div>
                                   <div class="modal-body">
                                          <label>name</label>
                                          <input type="text" class="form-control" name="name">
                                          <label>company</label>
                                          <input type="text" class="form-control" name="company">
                                          <br>

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
<table class="table table-border table-hover table-striped display" id="myTable">
        <thead class="thead-dark">
        <th>name</th>
        <th>Company</th>
        <th colspan="2" style="text-align:center;">Action</th>
        </thead>
        <tbody>
        
@foreach($categorys as $category)
<tr>
<td> {{$category->name}}</td>
<td> {{$category->company}}</td>

<td> <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit_post{{$category->id}}"><i class="fas fa-pen"></i></button></td>
<td> <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete_post{{$category->id}}"><i class="fas fa-dumpster"></i></button></td>


<form method="POST" action="{{route('category.update',$category->id)}}">
@CSRF
{{method_field('PATCH')}}
<div class="modal fade" id="edit_post{{$category->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                      <label>company</label>
                   <input type="text" class="form-control" name="company">
                    <br>
                 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</form>

<form method="POST" action="{{route('category.destroy',$category->id)}}">
@CSRF
{{method_field('DELETE')}}
<div class="modal fade" id="delete_post{{$category->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
@section('scripts')
<script>
$(document).ready(function(){
  $("#tableSearch").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
@endsection
