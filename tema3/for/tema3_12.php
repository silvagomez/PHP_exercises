<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            for ($a=0; $a <25 ; $a++) {
                for ($e=0; $e <60 ; $e++) {
                    for ($i=0; $i <60 ; $i++) {
                        echo "$a:$e:$i";
                        echo "<br>";
                    }
                }
            }

        ?>
    </body>
</html>
