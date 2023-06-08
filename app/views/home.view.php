<?php require views_path('partials/header'); ?>   
 
       <div class="container-fluid shadow-sm p-2">
         <h3 class="text-center"><?=APP_NAME?></h3>
       </div>
     
       <div class="d-flex">
         <div class="shadow-sm col p-4" style="height:600px; overflow-y:scroll">
           
            <div class="input-group mb-3">
              <h4>Items</h4>
              <input type="text" class="ms-2 form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon1" autofocus>
              <span class="input-group-text" id="basic-addon2"><i class="fa fa-search"></i></span>
            </div>
          
         </div>
         
         <div class="bg-light col p-4 pt-2">
           <div class="text-center"><h3>Cart <div class="badge bg-primary rounded-circle">3</div></h3></div>
           
           <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th scope="col">Image</th>
                <th scope="col">Description</th>
                <th scope="col">Amount</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
          </div>
       </div>
      
    

    <?php require views_path('partials/footer'); ?> 