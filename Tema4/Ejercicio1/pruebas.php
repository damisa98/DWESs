<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gato</title>
</head>
<body>
    <?php
        require_once 'gato.php';
        
        $gato1= new gato("hembra","egipcio");
        $gato2 =new gato("macho");
        $gato3 =new gato();
        
        echo "$gato1";
        echo "$gato2";
        echo "$gato3";
        
        echo $gato1->comer("atun");
        
        echo $gato2->duerme();
    
    ?>
    
</body>
</html>

