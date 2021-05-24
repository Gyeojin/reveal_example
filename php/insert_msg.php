<?php

  include_once "connect.php";
  
  // echo "hello my TY"; //echo : 브라우저에 그대로 출력해주는 기능
  $name = mysqli_real_escape_string($db_conn, $_POST['name']);
  $email = mysqli_real_escape_string($db_conn, $_POST['email']);
  $subject = mysqli_real_escape_string($db_conn, $_POST['subject']);
  $message = mysqli_real_escape_string($db_conn, $_POST['message']);

  echo $name, $email, $subject, $message;

?>