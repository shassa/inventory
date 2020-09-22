@extends('index')
@section('contents')
<div class="content">
<div class="row">
      <div class="col-2">
      <lapel></label>
      </div>

     <div class="col-4">
       <button class="btn btn-info btn-block" id="btn">
        <div class="row">
          <div class="col-10">
           <label style="color:red;font-size:20px"><b>{{count($stories)}}</b></label><br>
           <label><b>Store</b></label><br>
          </div> 
           <div class="col-2">
            <i class="fas fa-link"id="one"></i>
           </div>
        </div>   
           <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: {{count($stories)}}%" aria-valuenow="{{count($stories)}}" aria-valuemin="0" 
            aria-valuemax="100"></div>
            </div>
        
       </button>
     </div>

     <div class="col-4">
          <button class="btn btn-info btn-block" id="btn">
            <div class="row">
              <div class="col-10">
                  <label style="color:red;font-size:20px"><b>{{count($branches)}}</b></label><br>
                  <label><b>Branch</b></label><br>
               </div>   
                  <div class="col-2">
                <i class="fas fa-leaf"id="one"></i>
                  </div>
             </div>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: {{count($branches)}}%" aria-valuenow="{{count($branches) }}" 
                    aria-valuemin="0" aria-valuemax="100"></div>
                 </div>
               </div>
             <div>
             
        </button>
      </div>
  </div>
  <div class="row">
      <div class="col-2">
      <lapel></label>
      </div>

     <div class="col-4">
       <button class="btn btn-info btn-block"  id="btn">
        <div class="row">
          <div class="col-10">
          <label style="color:red;font-size:20px"><b>{{count($categories)}}</b></label><br>
           <label><b>Category</b></label><br>
           </div>
           <div class="col-2">
            <i class="fas fa-calendar"id="one"></i>
         </div>
       </div>
           <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: {{count($categories)}}%" aria-valuenow="{{count($categories)}}" aria-valuemin="0" 
            aria-valuemax="100"></div>
            </div>
       </button>
     </div>

     <div class="col-4">
          <button class="btn btn-info btn-block"  id="btn">
            <div class="row">
              <div class="col-10">
              <label style="color:red;font-size:20px"><b>{{count($products)}}</b></label><br>
                  <label><b>Product</b></label><br>
             </div>
             <div class="col-2">
                <i class="fas fa-shopping-cart"id="one"></i>
             </div>
          </div>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: {{count($products)}}%" aria-valuenow="{{count($products)}}" 
                    aria-valuemin="0" aria-valuemax="100" name="myprogressbar"></div>
                 </div>
               </div> 
        </button>
      </div>
  </div>
  <div class="row">
      <div class="col-2">
      <lapel></label>
      </div>

     <div class="col-4">
       <button class="btn btn-info btn-block"  id="btn">
        <div class="row">
          <div class="col-10">
          <label style="color:red;font-size:20px"><b>{{count($bills)}}</b></label><br>
           <label><b>Bills</b></label><br>
            </div>
           <div class="col-2">
            <i class="fas fa-list-alt"id="one"></i>
           </div>
           </div>
           <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: {{count($bills)}}%" aria-valuenow="{{count($bills)}}" aria-valuemin="0" 
            aria-valuemax="100"></div>
            </div>
          </div>
       </div>
       </button>
     </div>
   </div> 
</div> 


@stop