<?php
    $hello = "Hello World Example"
    $helloheader = '<h1 class="green" id="hello">Hello, World</h1>';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php echo $hello; ?></title>
        <link href="../css/style.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <?php
            echo $helloheader;
        ?>
    </body>
</html>