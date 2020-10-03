<!DOCTYPE html>
<html>
  <body>
    <h4><a href="index.php">-> Back to index</a></h4>
    <?php
      echo date('Y-m-d H:i:s');
    ?>
    <h2>2*2</h2>
    <?php
      echo 2*2;
     ?>
    <h2>string & string operator</h2>
    <?php
    echo "Hello \"w\"ord";
    ?>
    <h2>concentenation operator</h2>
    <?php
    echo "Hello "."World";
    ?>
    <?php
    $str = 'abcdef';
    echo strlen($str); //6
    ?>
    <h2>Variable</h2>
    <?php
    $var = "joey"; $Var = "Ashe";
    echo "//hello world and hello ".$var." ";
    echo "//hello world and hello ".$Var;
     ?>
  </body>
</html>
