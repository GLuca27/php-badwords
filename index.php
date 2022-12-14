<?php 
   $text = "Giove è il quinto pianeta del sistema solare in ordine di distanza dal Sole e il più grande di tutto il sistema planetario: la sua massa corrisponde a due volte e mezzo la somma di quelle di tutti gli altri pianeti messi insieme. È classificato, al pari di Saturno, Urano e Nettuno, come gigante gassoso (gli ultimi due si differenziano per essere classificati in tempi recenti come giganti ghiacciati).";
   $censured_word = isset($_GET['word']) ? $_GET['word'] : '';
   $text_censured = str_replace($censured_word, '***', $text);
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
    <form action="index.php" method="GET">
        <label for="censure-word">Parola da censurare</label>
        <input name="word" id="censure-word" type="text" placeholder="Inserisci una parola">
        <button type="submit">Invia</button>
    </form>
    <hr>
    <p><?php echo $text; ?></p>
    <h2>La lunghezza del testo è di:<?php echo strlen($text); ?></h2>
    <hr>
    <p><?php echo $text_censured; ?></p>
</body>
</html>