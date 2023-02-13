<!-- 

    # or // = comments in PHP.

-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>variables and constants</title>
</head>
<body>
    
    <?php 
    
// Variables
        $name = "Maria Eduarda";
        $lastname = "Carvalho";

        $name = "Lucas";
        $lastname = "Carvalho";

// Constants
        const TEAM = "Vasco da Gama";
        # TEAM = "Vasco"; <-- Constant don't change. Cause error.

        echo "Hi, $name $lastname! and your team is " . TEAM;

    ?>

</body>
</html>