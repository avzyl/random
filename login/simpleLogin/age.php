<!-- <form class="" action="age.php" method="POST">
<input type="text" name="age" placeholder="Please Enter Your Age">
<input type="submit" />
</form> -->
<?php
  if(!empty($_POST)){
    $age = $_POST['age'];

    if($age > 17){
      echo "age is adult";
    }elseif($age <= 17){
      echo "age is a child";
    }else{
      echo "I don't know";
    }
  }
 ?>

<?php
// $firstName = "Lyzza";
// $lastName = "Abig";
// $fullName = $firstName." ".$lastName;
//
// echo "Ang pangalan niya ay $fullName";

// $firstNumber = 10;
// $secondNumber = 3;
// $answer = $firstNumber + $secondNumber; // addition
// $answer = $firstNumber * $secondNumber; // multiplication
// $answer = $firstNumber - $secondNumber; // subtraction
// $answer = $firstNumber / $secondNumber; // division
// $remainder = $firstNumber % $secondNumber; // remainder

// echo $answer;
// echo round($answer,2); // round up
// echo $answer." r ".$remainder; // remainder
// echo floor($answer)." remainder ".$remainder; // floor - round down

  // if(!empty($_POST)){
  //   $age = $_POST['age'];
  //
  //   if($age > 17){
  //     echo "age is adult";
  //   }elseif($age <= 17){
  //     echo "age is a child";
  //   }else{
  //     echo "I don't know";
  //   }
  // }



 ?>
<!-- <form class="" action="" method="POST">
  <input type="text" name="age" placeholder="Please Enter Your Age">
  <input type="submit" />
</form> -->

<?php
// $username = "lyzza0123";
// $password = "mingae";
//
//   if(!empty($_POST)){
//     if($_POST['username'] !== $username){
//       echo "Invalid Username";
//     }elseif($_POST['username'] == $username && $_POST['password'] == $password){
//       echo "You are logged in";
//     }else{
//       echo "Password is incorrect";
//     }
//   }

 ?>

 <!-- <form action="" method="POST">
   <input type="text" name="username" placeholder="Enter your Username" required/>
   <input type="password" name="password" placeholder="Enter your password" required/>
   <input type="submit" value="Login"/>
 </form> -->

 <?php
  // require_once "functions/func.php";
  //
  // echo addisyon(4,5);
  // echo addisyon(5,5);
  // echo addisyon(9,2);
  // echo addisyon(1,1);
  // sound();
 ?>

 <?php
 //
 // $names = ["Mingae", "Yamster", "Bambam"];
 //
 // // echo $names[1];
 //
 // // foreach ($names as $name) {
 // //   echo $name."<br />";
 // // }
 //
 // // echo count($names);
 //
 // for ($i=0; $i < count($names) ; $i++) {
 //   echo $names[$i]."<br />";
 // }

  ?>

  <?php
  // $accounts = [
  //   "username"=>"mingae0123",
  //   "password"=>"catakech123"];
  //
  //   echo $accounts["username"];
   ?>

   <?php
   // $accounts =[
   //     [
   //       "username"=>"mingae0123",
   //       "password"=>"catakech123"
   //     ],
   //     [
   //       "username"=>"yamster0123",
   //       "password"=>"catdinakech123"
   //     ],
   //   ];
   //
   //   var_dump($accounts);
    ?>
