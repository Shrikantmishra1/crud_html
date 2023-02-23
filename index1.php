<?php
session_start();
include_once('header.php');
$sq="";

?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    </head>
    <body>
<div id="main-content">
    
    <h2>All Records</h2>
    <a href="logout.php" class="btn btn-warning sm1 ">logout</a><br>
    <?php
      $sq=$_SESSION['sname'];
      echo "<h3 >welcome $sq</h3>";
    ?>
    <?php
      $conn=mysqli_connect("localhost","root","","crud") or die("Connection Failed");
      $sql="SELECT *FROM student";
      $result=mysqli_query($conn,$sql) or die("Query unsucessfull");
      if (mysqli_num_rows($result)>0){
  
    ?>
    <table cellpadding="12px" >
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Roll number</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
        <tbody>
            <?php
            while($row=mysqli_fetch_assoc($result)){

            ?>

            <tr>
                <td><?php echo $row['sid'];?></td>
                <td><?php echo $row['sname']; ?></td>
                <td><?php echo $row['rollnumber'];?></td>
                <td><?php  echo $row['sphone'] ;?></td>
                <td>
                <td>
               
      

     
      
          
            <select name="classs[]" class="multiple" multiple="multiple">
                <!-- <option selected disabled>Select Class</option> -->
                <?php
              while($row=mysqli_fetch_assoc($result)){

               ?>
                 <option value="<?php echo $row['cid'];?>">
               <?php echo $row['cname'];?>
              </option>
              <?php }  ?>

             </select>
    
              <td>
                   
                    <a href="delete.php?s=<?php echo $row['sid'] ;?> ">Delete</a>
                </td>
            </tr>
            <?php
                   }
            ?>
           
            
        </tbody>
                </table>

    <?php }else{
        echo "connection is not working";
        }
        mysqli_close($conn);?>
   
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
