<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>partie2 ex6 Php</title>
</head>
<body>
      <?php
  $var_a = null;
if ($var_a ?: null){
    echo var_dump($var_a);
}
else{
    echo("Je suis une variable sans valeur");
}
      ?>
</body>
</html>