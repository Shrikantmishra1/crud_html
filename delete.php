                    
                <?php
                           include_once('header.php');
                           ?>
                           <?php

                             $conn=mysqli_connect("localhost","root","","crud") or die("Connection Failed");
                  
                                $sp=$_GET['s'];
                          
                            $sql = "DELETE FROM student WHERE sid='$sp'";
                            $result=mysqli_query($conn,$sql) or die("Query unsucessfull"); 
                   
                              if ($result){
                                header('location:index1.php');   
                              }
                            ?>
                            