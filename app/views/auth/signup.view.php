<?php require views_path('partials/header'); ?>   
 
    <div class="container border col-lg-5 col-md-6 mt-5 p-4">
      <form action="" method="post">
        <h3 class="text-center"><i class="fa fa-user"></i> User Signup</h3>
        <div class="text-center"><?=esc(APP_NAME)?></div>
        <br>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Username</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Username">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email">
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">Password</span>
          <input type="text" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">Retype Password</span>
          <input type="text" class="form-control" placeholder="Retype Password" aria-label="Retype Password" aria-describedby="basic-addon1">
        </div>
        <br>
        <button class="btn btn-primary float-end">Signup</button>
        <button class="btn btn-danger">Cancel</button>
      </form>  
    </div>
      
      

    <?php require views_path('partials/footer'); ?> 