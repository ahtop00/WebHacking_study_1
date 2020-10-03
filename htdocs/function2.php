<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Function</title>
  </head>
  <body>
    <h1>Function</h1>
    <?php
      $str = "Detroit: Become Human is a 2018 adventure game developed by Quantic
      Dream and published by Sony Interactive Entertainment.
      The plot follows three androids: Kara (Valorie Curry), who escapes
      her owner to explore her newfound sentience and protect a young girl;
      Connor (Bryan Dechart), whose job is to hunt down sentient androids;
      and Markus (Jesse Williams), who devotes himself to releasing other androids from servitude.";
      echo $str;
     ?>
     <h2>strlen()</h2>
     <?php
     echo strlen($str);
      ?>
    <h2>nl2br()</h2>
    <?php
    echo nl2br($str)
    ?>
    <h2>Basic</h2>
    <?php
    function basic(){
      print("Hello, World!<br>");
      }

      basic();
      basic();
    ?>
    <h2>Value</h2>
    <?php
    function sum($left, $right){
      print($left+$right);
      print("<br>");
    }

    sum(6,4);
    sum(14,13);
    ?>
    <h2>Return</h2>
    <?php
    function sum2($left, $right){
      return $left+$right;
    }
    print(sum2(20,7));
    file_put_contents('result.txt', sum2(20,7));
    ?>
  </body>
</html>
