<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>partie2 ex3 Php</title>
</head>

<body>
    <?php
    $age = 15;
    $gender = "femme";
    if ($age >= 18) {
        if ($gender == "femme") {
            echo "Vous êtes une femme et vous êtes majeure";
        } else {
            echo "Vous êtes un homme et vous êtes majeur";
        }
    } else {
        if ($gender == "femme") {
            echo "Vous êtes une femme et vous êtes mineur";
        } else {
            echo "Vous êtes un homme et vous êtes mineur";
        }
    }
    ?>
</body>

</html>