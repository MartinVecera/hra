<?php

include("tridy.php");

?>

<!DOCTYPE html>
<html lang='cs'>
<head>
<meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <title>Document</title>
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.2.0/css/uikit.min.css" />
    <!-- UIkit JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.2.0/js/uikit.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.2.0/js/uikit-icons.min.js"></script>
</head>
<body>

<p>Postava <?php echo $properties->race ?></br>
<?php echo "Pohlaví: " . $properties->sex ?></br>
<?php echo "Jméno: " . $properties->name ?></br>
<?php echo "Příjmení: " . $properties->surname ?></br>
<?php echo "Životy, odolnost: " . $properties->stamina ?></br>
<?php echo "Síla: " . $properties->strenght ?></br>
<?php echo "Moudrost: " . $properties->wisdom ?></br>
<?php echo "Inteligence: " . $properties->inteligence ?></br>
<?php echo "Charisma: " . $properties->charisma ?></br>
<?php echo "Obratnost: " . $properties->dexerity ?></br>
</p>
    
</body>
</html>

