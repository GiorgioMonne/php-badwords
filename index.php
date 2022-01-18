<?php

    $nome = "Giorgio";
    $testo = "Nel cielo più splendente ,
                nella notte più profonda ,
                nessun malvagio sfugga alla mia ronda,
                e colui che nel mal si perde,
                si guardi dal mio potere,
                la luce di lantern verde ";
    $modificata = str_replace("$_GET("parola")", "***" , $testo)            

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intro PHP</title>
</head>
<body>

    <h2>Testo partenza</h2>

    <p>
        <?php echo $testo; ?> 
    </p>

    <h2>Lunghezza paragrafo: <$php echo strlen($testo) ?> </h2>


    <h2>Testo modificato</h2>

    <p>
        <?php echo $modificata; ?> 
    </p>

    <h2>Lunghezza paragrafo modificato: <$php echo strlen($modificata) ?> </h2>



</body>
</html>