<?php
   $conn=mysqli_connect("localhost","root","","crud") or die("Connection Failed");
    $sucess='';

     $stu_name=$_POST['sname'];
     $stu_rollnumber=$_POST['rollnumber'];
     $stu_class=implode(",",$_POST['classs']);
     $stu_phone=$_POST['sphone'];
     if(isset($_POST['rollnumber'])){
     $rollnumberuid =$_POST['rollnumber'];
     $stu_classes=$_POST['classs'];
     foreach ($stu_classes as $key) {
      $sql1="INSERT INTO studentclasses(rollnumberid,cid) VALUES($rollnumberuid, $key);";
      $result1=mysqli_query($conn,$sql1) or die("Query unsucessfull");
     }
     

     }

      

$sql="INSERT INTO student(sname,rollnumber,sclass,sphone) VALUES('{$stu_name}','{$stu_rollnumber}','{$stu_class}','{$stu_phone}');";
$result=mysqli_query($conn,$sql) or die("Query unsucessfull"); 
   $sucess='data sucessfully inserted!';

  header("location:add.php?success=$sucess");
  mysqli_close($conn);

?>
