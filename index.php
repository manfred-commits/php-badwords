<!-- nome repo: php-badwords
Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta. ok
Stampare a schermo il paragrafo e la sua lunghezza. ok
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->
<?php 
$paragraph= "Il nostro compito è di fare il possibile per la salvezza degli anni nei quali viviamo, sradicando il male dai campi che conosciamo, al fine di lasciare a coloro che verranno dopo terra sana e pulita da coltivare. Ma il tempo che avranno non dipende da noi.";
$userInput=$_GET['input'];
// var_dump($_GET);die
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <form>
        <div id="user-input">
            <input type="text" name="input" id="input">
            <button type="submit">Inserire Parola da nascondere</button>
        </div>
        <h2>Paragrafo</h2>
        <p>
    
            <?php echo str_replace($userInput,'(***)',$paragraph);?>
        </p>
        <p>Lunguezza paragrafo: <?php echo strlen(str_replace($userInput,'(***)',$paragraph));?></p>

    </form>
</body>
</html>