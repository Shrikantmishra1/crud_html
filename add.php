<?php include_once('header.php'); ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <title>Document</title>
</head>

<body>
<div id="main-content">
    <h2>Add New Record</h2>
       <?php  if(isset($_GET['error'])) {?>
              <div class="alert alert-danger" role="alert">
              <?php echo $_GET['error'];?>
              </div>
              <?php  }?>
              <?php  if(isset($_GET['success'])) {?>
              <div class="alert alert-success" role="alert">
              <?php echo $_GET['success'];?>
              </div>
              <?php  }?>
    <form class="post-form" action="savedata.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="sname" />
        </div>
        <div class="form-group">
            <label>Roll Number</label>
            <input type="text" name="saddress" />
        </div>

        <?php
        $conn=mysqli_connect("localhost","root","","crud") or die("Connection Failed");
        $sql="SELECT * FROM  studentclass";
        $result=mysqli_query($conn,$sql) or die("Query unsucessfull");
        if (mysqli_num_rows($result)>0){
        ?>
        <div class="form-group">
            <label>Class</label>
            <select name="classs[]" class="multiple" multiple="multiple">
                <option selected disabled>Select Class</option>
               
               
     
            </select>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="sphone" />
        </div>
        <input class="submit" type="submit" value="Save" name="submit" />
    </form>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
 crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
         <script>
            $(".multiple").select2({
            maximumSelectionLength: 6,
           
           });
            </script>
</body>
</html>
