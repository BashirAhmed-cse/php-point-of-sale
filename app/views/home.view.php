<?php require views_path('partials/header'); ?>   
 
       <div class="container-fluid shadow-sm p-2">
         <h3 class="text-center"><?=APP_NAME?></h3>
       </div>
     
       <div class="d-flex">
         <div class="shadow-sm col p-4">
           
            <div class="input-group mb-3">
              <h4>Items</h4>
              <input type="text" class="ms-2 form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon1" autofocus>
              <span class="input-group-text" id="basic-addon2"><i class="fa fa-search"></i></span>
            </div>
            <div class="js-products d-flex" style="flex-wrap: wrap;height: 90%;overflow-y: scroll;">
				
				<!--card-->
				<div class="card m-2 border-0" style="min-width: 220px;max-width: 220px;">
					<a href="#">
						<img src="assets/images/image.jpg" class="w-100 rounded border">
					</a>
					<div class="p-4" style="font-size:20px">
						<div class="text-muted">COFFEE SOFT DRINK</div>
						<div class=""><b>$5.00</b></div>
					</div>
				</div>
				<!--end card-->

				<!--card-->
				<div class="card m-2 border-0" style="min-width: 220px;max-width: 220px;">
					<a href="#">
						<img src="assets/images/caramel-moolatte.png" class="w-100 rounded border">
					</a>
					<div class="p-4" style="font-size:20px">
						<div class="text-muted">CARAMEL MOOLATTE</div>
						<div class=""><b>$10.00</b></div>
					</div>
				</div>
				<!--end card-->

				<!--card-->
				<div class="card m-2 border-0" style="min-width: 220px;max-width: 220px;">
					<a href="#">
						<img src="assets/images/wave.jpg" class="w-100 rounded border">
					</a>
					<div class="p-4" style="font-size:20px">
						<div class="text-muted">WAVE DRINK</div>
						<div class=""><b>$15.00</b></div>
					</div>
				</div>
				<!--end card-->

				
			</div>
         </div>
         
         <div class="col-6 bg-light p-4 pt-2">
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