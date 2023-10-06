<?php
require('Operaciones.php');
$operaciones=new Operaciones();
$persons= $operaciones->llenar();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        div{
            margin-top: 30px ;
            padding: 5px;
            border: solid 1px black;
            border-radius: 5px;
            font-size: 16px;

        }
    </style>
    <title>Document</title>
</head>
<body>
   <?php $operaciones->Calcular($persons);?>

    
</body>
</html>