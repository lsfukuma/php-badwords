/*ciao ragazzi! Oggi primo esercizio con php! :visage_avec_yeux_en_étoiles:
Si tratta di un censuratore rudimentale: predisponete una variabile contenente un breve testo,
 poi tramite le funzioni sulle stringhe di php censurate una "badword" che viene passata in GET con ***
 (3 simboli di asterico).
Stampate a schermo il testo censurato all'interno di un paragrafo e la lunghezza del paragrafo stesso.
Nome repo: php-badwords (modifié)*/
<?php
  $text = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
  $badword = $_GET[''];
  $final_text = str_replace($badword , '***' , $text);
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Censuratore</title>
  </head>
  <body>
    <p> <?php echo $final_text
      var_dump($text)?> </p>
  </body>
</html>
