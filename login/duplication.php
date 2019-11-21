<?php
  $connect = mysqli_connect("localhost","root","root","database","8889") or die("fail");
  $id=$_POST[id];

  $query = "select * from member where id='$id'";
  $result = $connect->query($query);

  if(mysqli_num_rows($result)==1) {
  ?> <script>
      alert('일치하는 아이디가 있습니다. 시발로마^^')
      history.back();
    </script>
  <?php
  };




 ?>
