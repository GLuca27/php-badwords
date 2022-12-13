<?php 
   $text: "Giove è il quinto pianeta del sistema solare in ordine di distanza dal Sole e il più grande di tutto il sistema planetario: la sua massa corrisponde a due volte e mezzo la somma di quelle di tutti gli altri pianeti messi insieme. È classificato, al pari di Saturno, Urano e Nettuno, come gigante gassoso (gli ultimi due si differenziano per essere classificati in tempi recenti come giganti ghiacciati).";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $text; ?></h1>
    <h2>La lunghezza del testo è di:<?php echo strlen($text); ?></h2>
</body>
</html>