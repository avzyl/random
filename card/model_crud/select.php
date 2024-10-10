<?php


if(isset($_POST["emp_id"]))
{
    $output = '';

    $connect = mysqli_connect("localhost", "root", "", "cmu");
    $query = "SELECT * FROM tbl_accounts WHERE id = '".$_POST["emp_id"]."'";
    $result = mysqli_query($connect, $query);


    $output .= '
    <div class="table-responsive">
         <table class="table table-bordered">';
    while($row = mysqli_fetch_array($result))
    {
         $output .= '
              <tr>
                   <td width="30%"><label>Name</label></td>
                   <td width="70%">'.$row["name"].'</td>
              </tr>
              <tr>
                   <td width="30%"><label>Address</label></td>
                   <td width="70%">'.$row["colleges"].'</td>
              </tr>
              <tr>
                   <td width="30%"><label>Gender</label></td>
                   <td width="70%">'.$row["email"].'</td>
              </tr>
              <tr>
                   <td width="30%"><label>Designation</label></td>
                   <td width="70%">'.$row["username"].'</td>
              </tr>
              <tr>
                   <td width="30%"><label>Age</label></td>
                   <td width="70%">'.$row["joined"].' Year</td>
              </tr>
              ';
    }
    $output .= "</table></div>";
    echo $output;








}
