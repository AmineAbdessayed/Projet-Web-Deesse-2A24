<?php
 
 session_start();
 include "config3.php";
 if(isset($_POST['edit']))
 {
    $id=$_SESSION['id'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $select= "select * from users where id='".$id."'";
    $sql = mysqli_query($conn,$select);
    $row = mysqli_fetch_assoc($sql);
    $res= $row['id'];
    if($res === $id)
    {
   
        $query = "UPDATE `users` set (username, password)
        VALUES ('$username', '".hash('sha256', $password)."') where id='".$id."'";
        $res = mysqli_query($conn, $query);

         if($res){
       echo "<div class='sucess'>   
             <h3>Profile Updated  !</h3>
             
             </div>";
        }
       else
       {
           /*sorry your profile is not update*/
           header('location:Profile_edit_form.php');
       }
    }
    else
    {
        /*sorry your id is not match*/
        header('location:Profile_edit_form.php');
    }
 }
?>