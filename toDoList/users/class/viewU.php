<?php
class viewU extends configU{

  public function viewData(){
    $con = $this->con();
    $sql ="SELECT * FROM `tbl_accounts` WHERE `account_type` = 'User' AND `status` = 'Active'";
    $data = $con->prepare($sql);
    $data->execute();
    $result = $data->fetchAll(PDO::FETCH_ASSOC);
    echo "<h3 class='mb-4 mt-5'>Members</h3>";
    echo "<table class='table table-dark table-striped table-sm'>";
    echo "<thead>
            <tr>
              <th>Name</th>
              <th>Username</th>
              <th>Date Joined</th>
              <th>College/s
              <th>Address</th>
              <th>Mobile</th>
              </th>
            </tr>
          </thead><tbody>";
    foreach ($result as $data) {
      echo "<tr>";
      echo "<td>$data[name]</td>";
      echo "<td>$data[username]</td>";
      echo "<td>$data[joined]</td>";
      echo "<td>$data[colleges]</td>";
      echo "<td>$data[address]</td>";
      echo "<td>$data[mobile]</td>";
      echo "<td>
            <a class='btn btn-info btn-sm' href='index.php?edit=$data[id]'>Mark as Inactive</a>
            <a class='btn btn-danger btn-sm' href='index.php?delete=$data[id]'>Delete User</a>
            </td>";
      echo "</tr>";
    }
    echo "</tbody></table>";
  }

  public function viewCompletedData(){
    $con = $this->con();
    $sql ="SELECT * FROM `tbl_accounts` WHERE `account_type` = 'User' AND `status` = 'Inactive'";
    $data = $con->prepare($sql);
    $data->execute();
    $result = $data->fetchAll(PDO::FETCH_ASSOC);
    echo "<h3 class='mb-4 mt-5'>Members</h3>";
    echo "<table class='table table-dark table-striped table-sm'>";
    echo "<thead>
            <tr>
              <th>Name</th>
              <th>Username</th>
              <th>Date Joined</th>
              <th>College/s
              <th>Address</th>
              <th>Mobile</th>
              </th>
            </tr>
          </thead><tbody>";
    foreach ($result as $data) {
      echo "<tr>";
      echo "<td>$data[name]</td>";
      echo "<td>$data[username]</td>";
      echo "<td>$data[joined]</td>";
      echo "<td>$data[colleges]</td>";
      echo "<td>$data[address]</td>";
      echo "<td>$data[mobile]</td>";
      echo "<td>
            <a class='btn btn-info btn-sm' href='index.php?editS=$data[id]'>Mark as Active</a>
            </td>";
      echo "</tr>";
    }
    echo "</tbody></table>";
  }
}
 ?>
