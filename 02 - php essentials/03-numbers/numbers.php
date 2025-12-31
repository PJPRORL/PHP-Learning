<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./simple.css" />
    <title>Document</title>
</head>

<body>
    <pre><?php
            $meaning = 42;
            echo $meaning * 42 . "\n";
            // calculate with append operator
            echo ($meaning * 2) . "\n";
            echo ($meaning / 2) . "\n";
            echo ($meaning - 2) . "\n";
            echo ($meaning + 2) . "\n";

            echo "\n";
            echo 42;
            echo "\n";
            echo 42 * 42;
            echo "\n";
            // echo '5' + '6';
            // echo '5' + '6a'; // results in 11 with a warning
            // echo '5' + 'a6'; // results in a fatal warning

            // echo round(3.33, 1) . "\n";

            $meaning *= 2;
            echo $meaning . "\n";
            ?>
    </pre>
</body>

</html>