<?php
class editU extends configU{
  public $id;

  public function __construct($id){
    $this->id= $id;
  }

  public function editTask(){
    $con = $this->con();
    $sql = "UPDATE `tbl_accounts` SET `status` = 'Inactive',`date_active`=NOW() where `id` = '$this->id'";
    $data = $con->prepare($sql);
    if ($data->execute()) {
      return true;
    }else{
      return false;
    }
  }

  public function editStatus(){
    $con = $this->con();
    $sql = "UPDATE `tbl_accounts` SET `status` = 'Active' where `id` = '$this->id'";
    $data = $con->prepare($sql);
    if ($data->execute()) {
      return true;
    }else{
      return false;
    }
  }
}
 ?>
