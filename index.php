<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>
<body>

    <?php

        $testo ="Mai, mai scorderai
        L'attimo, la terra che tremò
        L'aria si incendiò
        E poi silenzio
        E gli avvoltoi sulle case sopra la città
        Senza pietà
        Chi mai fermerà
        La follia, che per le strade va
        Chi mai spezzerà
        Le nostre catene
        Chi da quest'incubo nero ci risveglierà
        Chi mai potrà
        Ken, sei tu
        Fantastico guerriero
        Sceso come un fulmine dal cielo
        Ken, sei tu
        Il nostro condottiero
        E nessuno al mondo adesso è solo
        Ken, sei libero
        L'unico, l'ultimo angelo
        Ken, sei l'energia
        L'azzurra magia (Magia, magia, magia)
        Stella dell'orsa maggiore
        Stella su di noi
        Guerriero va!
        Ken, sei tu
        Col pugno tuo più forte
        Tu che hai messo KO la morte
        Ken, sei tu
        L'acciaio nelle mani
        Tu la mia speranza nel domani
        Mai, mai scorderai
        L'attimo
        La terra che tremò
        Vai, vai tu vivrai
        Giorni felici
        Stella dell'orsa maggiore
        Stella su di noi
        Guerriero vai";

        $bad_word= $_GET['badword'];
    ?>

    <div>Il testo della canzone è: <?=$testo; ?></div>
    <div><h1>Il testo è lungo: <?= strlen($testo) ?></h1> </div>

    <div><?=str_replace($bad_word, '***', $testo) ?></div>
    <div><h1>Il testo è lungo: <?=strlen(str_replace($bad_word, '***', $testo)) ?></h1> </div>

    <h3>Istruzioni => nell URL aggiungi ?badword= qui scrivi la parola che vuoi censurare </h3>
    
</body>
</html>