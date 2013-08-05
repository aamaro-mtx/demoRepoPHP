<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        class Persona {

            function __construct($nombre,$age,$twitter) {
                $this->Nombre=$nombre;
                $this->Age=$age;
                $this->Twitter=$twitter;
            }
            private $Nombre;
            private $Age;
            private $Twitter;
                }
        ?>
    </body>
</html>
