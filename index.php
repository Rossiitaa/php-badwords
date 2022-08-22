<?php
    $text = "The peppers are very good, do you want some too?";
    $badWords = $_GET["censored"];
    $censoredText = str_replace($badWords, "***", $text);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>
<body>
    <p>
        <?php
            echo $text;
            echo strlen($text);
        ?>
    </p>

<!-- censura -->
    <p>
        <?php
            echo $censoredText;
            echo strlen($censoredText);
        ?>
    </p>
</body>
</html>