<?php
class editS extends configU{
  public $id;

  public function __construct($id){
    $this->id= $id;
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
