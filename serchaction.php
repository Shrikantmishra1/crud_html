


<?php
     if(isset($_POST['submit'])&& isset($_POST['id'])  || isset($_POST['saddress'])){
  
  $id=$_POST['id'];
  $roll=$_POST['rollnumber'];

    $conn=mysqli_connect("localhost","root","","crud") or die("Connection Failed");
    $sql =" SELECT * FROM student where sid='$id' OR rollnumber='$roll'";
    $result=mysqli_query($conn,$sql) or die("Query unsucessfull");

     }
    //  if (mysqli_num_rows($result)>0){
     if (mysqli_num_rows($result)>0){
?>

<?php
include_once('header.php');

?>

<div id="main-content">
    
    <table cellpadding="9px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Roll number</th>
        <th>Class</th>
        <th>Phone</th>
       
        </thead>
      
        <tbody>
        <?php
     while($row=mysqli_fetch_assoc($result)){
 ?>
          <tr>
                <td><?php echo $row['sid'];?></td>
                <td><?php echo $row['sname'];?></td>
                <td><?php echo $row['rollnumber'];?></td>
                <td><?php  echo $row['sclass'];?></td>
                <td><?php  echo $row['sphone'] ;?> </td>
                
                
            </tr>
           
           <?php }?>
            
        </tbody>
     </table>
    <?php  }?>
     
   
</div>


