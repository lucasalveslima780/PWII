<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>DECLARAÇÃO</title>
</head>
<body>
    <?php
   $va = "25";
   $vb = "40";

   $somar = $va + $vb;
   $sub = $va - $vb;
   $mult = $va * $vb;
   $div = $va / $vb;
   $resto = $va % $vb;
   
   echo "A soma entre $va e $vb e " . $somar;
   echo "<br/>";
   echo "A subtracao entre $va e $vb e " . $sub;
   echo "<br/>";
   echo "A multiplicacao entre $va e $vb e " . $mult;
   echo "<br/>";
   echo "A divisao entre $va e $vb e " . $div;
   echo "<br/>";
   echo "O resto entre $va e $vb e " . $resto;



    ?>
</body>
</html>