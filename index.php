<?php
  $text = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
  $badword = $_GET['badword'];

  if(!empty($_GET)){
    $badword = $_GET['badword'];
  }

  if (!empty($badword)) {
    $final_text = str_replace($badword , '***' , $text);
  } else {
    $final_text = $text;
  }
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Censuratore</title>
  </head>
  <body>
    <p> <?php echo $final_text;
      var_dump($final_text);?> </p>
  </body>
</html>
