<?php
   

   if($_SERVER["request_method"]=="POST"){

    $name = $_POST['name'];
    $email = $_POST['emaial'];

    echo "hello ,".$name;
   }
   ?>
