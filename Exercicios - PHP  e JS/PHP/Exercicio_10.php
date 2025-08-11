<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>DECLARAÇÃO</title>
</head>
<body>
    <?php
   $nota1 = 10;
   $nota2 = 7;
   $nota3 = 5;
   $media = ($nota1 + $nota2 + $nota3 / 3);
   $media_arrendodada = round($media, 1);

   if ( $media >= 7){
    echo "O aluno está aprovado pois sua nota é:" . $media_arrendodada ;
   }else {
     echo "O aluno infelizmente não passou pois sua nota: " . $media_arrendodada . " não atingiu a média escolar" ;
   }


    ?>
</body>
</html>