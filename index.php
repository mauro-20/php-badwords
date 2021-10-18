<!-- Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->

<?php

  $paragraph = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo distinctio vero adipisci alias exercitationem dolore deserunt, rem minima cumque consequatur, necessitatibus animi voluptates dolorem. Libero hic minus modi velit sapiente.";

?>

<h1>PHP Badwords</h1>
<p><?php echo $paragraph ?></p>
<p>La lunghezza del paragrafo è di <?php echo strlen($paragraph) ?> caratteri</p>