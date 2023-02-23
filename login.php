<?php
  include_once('header.php');
?>

 <div  class="d-flex justify-content-center align-items-center v-100 "  >

<div class="shadow  w-450  p-3  border border-primary"><br>
<form  method="post" action="loginauth.php">
<div class="mb-3">
            <?php  if(isset($_GET['error'])) {?>
              <div class="alert alert-danger" role="alert">
              <?php echo $_GET['error'];?>
              </div>
              <?php  }?>
        <label  class="form-label">admin</label>
        <input type="text" class="form-control" name="snamee"  value="" >
        </div>
        <div class="mb-3">
        <label  class="form-label">Password</label>
        <input type="password"  class="form-control"  value="" name="password">
        </div>

 
    <button class="btn btn-warning mx-auto" type="submit" name="submit" value="submit">login</button>
 

</div>
</form>