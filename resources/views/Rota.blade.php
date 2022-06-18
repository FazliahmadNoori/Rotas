<!DOCTYPE html> 
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Style -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Script -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    </head>
<body> 
    <div class="col-md-12 col-xs-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h4 class="text text-center mb-4">  </h4>
            </div>
            <div class="panel-body"> 
  
                    <form  method="POST" role="search" action="{{route('rota.show')}}">
                    {{ csrf_field() }}
                              <div class="col-md-11">
                                   <div class="row">
                                   
                                   <div class="col-md-2">  
                                        <select class="form-select" id="day" name="day" required>
                                        
                                        <option>Monday</option>
                                        <option>Thuesday</option>
                                        <option>Wednesday</option> 
                                        </select>
                                   </div>
                                    
                                   <div class="col-md-2" id="shift">  
                                        <select class="form-select"  name="shift">
                                        <option class="disabled"> </option>
                                        <option>Morning</option>
                                        <option>Evening</option> 
                                        </select>
                                   </div>
                               
                                   <div class="col-md-2" id="shift">  

                                        <button type="submit" class="show btn btn-success " >Show</button> 
                                        </div>


                              </div>
                    </form>
               </div> 
<br>

               <div class="table-responsive">
                 @if(isset($staff))
                     <table id="example" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Shop</th> 
                                    <th>Name</th> 
                                    <th>Day</th> 
                                    <th>Shift</th> 
                                    <th>Minuts</th> 
                                    <!-- <th>ID</th>  -->
                                 
                                </tr>
                          </thead> 

                          <tbody> 
                              
                                
                                <tr>
                                    <td>{{$shop}}</td> 
                                    <td>{{$staff}}</td> 
                                    <td>{{$day}}</td>  
                                    <td>{{$shift}}</td>  
                                    <td>{{$min}}</td>  

                              </tr>
                         
               @endif

        

      </div>
 </div>

         

     <script>      
            $(document).ready(function() { 
            
               $('#shift').hide();  
               $('#day').change(function(){
                    var day=$('#day').val(); 
                    if(day=="Wednesday"){
                    $('#shift').show();  
                    }
           
            });
        }); 
     </script>