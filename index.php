<?php
$par = "Noi pensiamo che il debito si analizza prima di tutto dalla sua origine. Le origini del debito risalgono alle origini del colonialismo. Quelli che ci hanno prestato denaro, sono gli stessi che ci avevano colonizzato. Sono gli stessi che gestivano i nostri Stati e le nostre economie. Sono i colonizzatori che indebitavano l'Africa con i finanziatori internazionali che erano i loro fratelli e cugini. Noi non c'entravamo niente con questo debito. Quindi non possiamo pagarlo.";
$bad_word = $_GET["word"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php
        echo $par . "<br/>";
        echo strlen($par);
        ?>
    </p>
    <p>
        <?php
        $par2 = str_replace($bad_word, '***', $par);
        echo $par2 . "<br/>";
        echo strlen($par2);
        ?>
    </p>
</body>
</html>