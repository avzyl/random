<?php
function waiter(){
  insertT();
  deleteT();
  editT();
  editS();
}
function insertT(){
  if (!empty($_GET['items'])){
    $insertU = new insertU($_GET['items']);
    if ($insertU->insertTask()){
      echo '<div class=" col-md-9 alert alert-success alert-dismissible fade show" role="alert">
            <strong>Holy guacamole!</strong> You have Inserted Task Successfully.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
    }else{
      echo '<div class=" col-md-9 alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Holy guacamole!</strong> Insert Task Error!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
    }
  }
}

function deleteT(){
  if (!empty($_GET['delete'])) {
    $deleteU = new deleteU($_GET['delete']);
    if ($deleteU->deleteTask()) {
      echo '<div class=" col-md-9 alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Holy guacamole!</strong> You have Deleted Task Successfully.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
    }else{
      echo '<div class=" col-md-9 alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Holy guacamole!</strong> Delete Task Error!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
    }
  }
}

function editT(){
  if (!empty($_GET['edit'])) {
    $editU = new editU($_GET['edit']);
    if ($editU->editTask()) {
      echo '<div class=" col-md-9 alert alert-info alert-dismissible fade show" role="alert">
            <strong>Holy guacamole!</strong> You have Completed the Task Successfully.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
    }else{
      echo '<div class=" col-md-9 alert alert-dismissible alert-dismissible fade show" role="alert">
            <strong>Holy guacamole!</strong> Task Completion Error!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
    }
  }
}

function editS(){
  if (!empty($_GET['editS'])) {
    $editS = new editS($_GET['editS']);
    if ($editS->editStatus()) {
      echo '<div class=" col-md-9 alert alert-info alert-dismissible fade show" role="alert">
            <strong>Holy guacamole!</strong> You have Completed the Task Successfully.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
    }else{
      echo '<div class=" col-md-9 alert alert-dismissible alert-dismissible fade show" role="alert">
            <strong>Holy guacamole!</strong> Task Completion Error!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
    }
  }
}

function viewTable(){
  $viewU = new viewU();
  $viewU->viewData();
  $viewU->viewCompletedData();
}
 ?>
