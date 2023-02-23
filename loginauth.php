<?php
     session_start();
    $stu_name=$_POST['snamee'];
   
    $err="";
    $stu_password=$_POST['password'];
$conn=mysqli_connect("localhost","root","","crud") or die("Connection Failed");
$sql="SELECT * FROM admin WHERE sname='$stu_name'";
$result=mysqli_query($conn,$sql) or die("Query unsucessfull"); 
   if (mysqli_num_rows($result)>0){
    while($row = $result->fetch_assoc()) {
        $_SESSION['sname']=$row['sname'];
        $su=$row['sname'];
        $sp=$row['password'];
      
      if ($stu_name==$su){
          if ($sp== $stu_password){
            header("location:index1.php");
           
          }
        else{
            $err="this is not valid name or password";
        }


      }else{
        $err="this is not valid email or password";
        header("location:login.php?error='$err'");
      }

 
   }
}
?>