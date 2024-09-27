<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nome="Jose Angarella Crispo";
        $r=rand(0,255);
        $g=rand(0,255);
        $b=rand(0,255);

        $str_nome= "<h1 style='color:rgb($r,$g,$b)'>$nome</h1>";
        echo $str_nome;

    ?>
    
</body>
</html>