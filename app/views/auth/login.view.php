<?php require views_path('partials/header'); ?>   
 
    <div class="container border col-lg-4 col-md-5 mt-5 p-4 shadow-sm">
      <form action="" method="post">
        <h1 class="text-center"><i class="fa fa-user"></i></h1>
        <h3 class="text-center">Login</h3>
        <div class="text-center"><?=esc(APP_NAME)?></div>
        <br>
        <div class="mb-3">
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email" autofocus>
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">Password</span>
          <input type="text" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
        </div>
       
        <div class="row mt-4">
          <button class="btn btn-primary">Login</button>
        </div>
      </form>  
    </div>
      
      

    <?php require views_path('partials/footer'); ?> 