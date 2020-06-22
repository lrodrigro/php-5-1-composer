<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Wcs\Hello;

$hello = new Hello();

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>5.1. Composer - Autoload</title>
    </head>
    <body>
        <?php echo $hello->talk(); ?>  
    </body>
</html>