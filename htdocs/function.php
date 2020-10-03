<?php
function print_title(){
  if(isset($_GET['Browser'])){
    echo $_GET['Browser'];
  } else {
    echo "환영합니다! :)";
  }
}
function print_description(){
  if (isset($_GET['Browser'])) {
    echo nl2br(file_get_contents("data/".$_GET['Browser']));
  }
  else {
    echo "무엇을 알아보겠습니까?";
  }
}
function print_list(){
  $list = scandir('./data');
  $i = 0;
  while ($i < count($list)) {
    if (($list[$i] != '.') && ($list[$i] != '..')){
        echo "<li><a href=\"function.php?Browser=$list[$i]\">$list[$i]</a></li>\n";
    }
    $i = $i + 1;
  }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Function</title>
  </head>
  <body>
    <h1>HELLO!</h1>
    <h2><a href="function.php">웹브라우저 찾기</a></h2>
    <?php
      print_title();
     ?>
    <ol>
      <?php
        print_list();
      ?>
    </ol>
    <?php
      print_description();
    ?>
    <h3><a href="create.php">create</a><br><h3>
    <form action="form."
  </body>
</html>
