<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Array</title>
  </head>
  <body>
    <h1>Array</h1>
    <?php
    $coworkers = array('CONNAR', 'MARKUS', 'Alice', 'KARA');
    echo $coworkers[0].'<br>';
    echo $coworkers[2].'<br>';
    var_dump(count($coworkers));
    array_push($coworkers, "NOAR", "JOEY");
    var_dump(count($coworkers));
    ?>
  </body>
</html>
