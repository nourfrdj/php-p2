<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>partie2 ex8 Php</title>
</head>

<body>
    <?php
    $number = 10;
    if ($number % 5 == 0 && $number % 3 == 0) {
        echo "fizzbuzz";
    } elseif ($number % 3 == 0) {
        echo "fizz";
    } elseif ($number % 5 == 0) {
        echo "buzz";
    } else {
        echo "wééélouuuuu";
    }
    ?>
</body>

</html>