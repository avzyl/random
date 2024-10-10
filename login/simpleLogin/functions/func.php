<?php
  // function addisyon($n1,$n2){
  //   $sum = $n1 + $n2;
  //   return $sum."<br />";
  // }
  //
  // function sound(){
  //   echo "aw aw";
  // }
 ?>

 <?php
 $username = "lyzza0123";
 $password = "mingae";

   if(!empty($_POST)){
     if($_POST['username'] !== $username){
       echo "Invalid Username";
     }elseif($_POST['username'] == $username && $_POST['password'] == $password){
       echo "You are logged in";
     }else{
       echo "Password is incorrect";
     }
   }
  ?>
