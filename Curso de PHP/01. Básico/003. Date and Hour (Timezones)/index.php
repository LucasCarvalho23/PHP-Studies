<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>PHP exemple</h1>

    <?php 

        // number day
        echo "Today is " . date("d/M/Y") . "</br>";
        // name day
        echo "Today is " . date("D/M/Y") . "</br></br>";

        // American timezone
        echo "The current hour is " . date("G:i:s") . "</br>";
        // show how timezone = CET
        echo "I'm using the timezone: " . date("T") . "</br></br>";

        // Brazilian timezone (UTC)
        date_default_timezone_set("America/Sao_Paulo");
        echo "The current hour is " . date("G:i:s") . "</br>";
        // show how timezone 
        echo "I'm using the timezone: " . date("T") . "</br></br>";

    ?>

</body>
</html>