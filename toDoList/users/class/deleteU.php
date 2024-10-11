<?php
class deleteU extends configU{
  public $id;

  public function __construct($id){
    $this->id= $id;
  }

  public function deleteTask(){
    $con = $this->con();
    $sql = "DELETE FROM `tbl_accounts` WHERE `id` = ('$this->id')";
    $data = $con->prepare($sql);
    if ($data->execute()) {
      return true;
    }else{
      return false;
    }
  }
}
 ?>
