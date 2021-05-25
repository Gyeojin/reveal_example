<?php

  include_once "connect.php"; //다른 파일을 로드함 : include
  
  // echo "hello my TY"; //echo : 브라우저에 그대로 출력해주는 기능
  $name = mysqli_real_escape_string($db_conn, $_POST['name']);
  $email = mysqli_real_escape_string($db_conn, $_POST['email']);
  $subject = mysqli_real_escape_string($db_conn, $_POST['subject']);
  $message = mysqli_real_escape_string($db_conn, $_POST['message']);
  $regist = date("Y-m-d");

  // echo $name, $email, $subject, $message;

  $sql = "INSERT INTO re_message (RE_name, RE_email, RE_subject, RE_msg, RE_reg) VALUES('$name', '$email', '$subject', '$message', '$regist')";
  //sql에 사용자가 작성한 변수 데이터를 넘기는 과정 (sql언어로 변환하는 과정)

  mysqli_query($db_conn, $sql);

  echo "
    <script>
      alert('메세지가 입력되었습니다.');
      location.href='/reveal/index.php';
    </script>
  ";
?>
