<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using PHP</title>
</head>
<body>

    <h1>Super tag PHP</h1>
    
    <?php 
        $nome = "Lucas Carvalho";

        echo "<p> Hi, my name is $nome </p>";
    ?>


    <h1>Short Tag PHP </h1>

    <?= "Working just a one command inside and don't need ';'" ?>


    <h1>Short Open Tag</h1>

    <? 
        $nomeTwo = "Maria Eduarda";

        echo "<p> Hi, my name is $nomeTwo </p>";
    ?>

    
    <h1>Don't work</h1>

    <?php 
        echo "- ASP tags = <% %> </br>";
        echo "- script language = 'php'";
    ?>

</body>
</html>