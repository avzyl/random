<?php

 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/styles.css">

    <script src="https://use.fontawesome.com/e5218896e0.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>To-do List</title>
  </head>
  <body>
    <!-- <h1 class="title">To-do List</h1> -->
    <div class="container">
      <div class="addTask">
        <input type="text" placeholder="Add a Task">
        <button>Add</button>
      </div>

      <ol class="notCompleted">
        <h3>Not Completed</h3>
      </ol>

      <ol class="Completed">
        <h3>Completed</h3>
      </ol>
    </div>

    <script>
      const input = document.querySelector('input');
      const btn = document.querySelector('.addTask > button');

      btn.addEventListener('click', addList);
      input.addEventListener('keyup', (e)=>{
        (e.keyCode === 13 ? addList(e) : null);
      })

      function addList(e){
        const notCompleted = document.querySelector('.notCompleted');
        const Completed = document.querySelector('.Completed');

        const newLi = document.createElement('li');
        const checkBtn = document.createElement('button');
        const delBtn = document.createElement('button');

        checkBtn.innerHTML = '<i class="fa fa-check"></i>';
        delBtn.innerHTML = '<i class="fa fa-trash"></i>';


        if(input.value !==''){
          newLi.textContent = input.value;
          input.value = '';
          notCompleted.appendChild(newLi);
          newLi.appendChild(checkBtn);
          newLi.appendChild(delBtn);
        }

        checkBtn.addEventListener('click', function(){
          const parent = this.parentNode;
          parent.remove();
          Completed.appendChild(parent);
          checkBtn.style.display = 'none';
        });

        delBtn.addEventListener('click', function(){
          const parent = this.parentNode;
          parent.remove();
        });
      }

    </script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
