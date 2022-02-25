<?php
  $f = $_POST['f'];
  $l = $_POST['l'];
  $s = $_POST['s'];
   $n = $_POST['n'];
  $c = $_POST['c'];

   //Database connection
   $conn = new mysqli('localhost','root','','hello');
   if($conn->connect_error){
   	  die('connection failed : '.$conn->connect_error);
   	  }else{
   	  	$stmt = $conn->prepare("insert into registration(f, l, s, c, n) values(?, ?, ?, ?, ?) ");
           $stmt->bind_param("ssssi", $f, $l, $s, $c, $n);
           $stmt->execute();
           echo "registration successfully...";
           $stmt->close();
           $conn->close();
   	  }
   ?>
   
   
