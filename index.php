<!-- Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->

<?php
$badWord = $_GET['badword'];
$paragraph = "I piselli si seminano prima dell’inverno (fine ottobre e novembre) oppure nel mese di febbraio, pronti per la primavera. E’ un seme resistente che non teme l’inverno e resiste anche a -5/-8 gradi di temperatura. Si tratta di una coltivazione in grado di arricchire il terreno di azoto, quindi preziosa nella rotazione colturale, come lo sono i legumi. Se volete sapere come coltivare i piselli seguite il link, abbiamo scritto per bene un articolo sulla coltivazione del pisello, oggi proviamo a consigliarvi su quale varietà seminare nel vostro orto. La semente del pisello è il pisello stesso che tolto dal baccello, il nome scientifico della pianta è pisum sativum.
  Le varietà di piselli possiamo dividerle in diverse famiglie, al fine della coltivazione possiamo individuare i piselli rampicanti (che necessitano di rete) e i piselli nani (che crescono senza supporto). In generale i piselli nani sono piante un po’ meno produttive, per cui se vogliamo ottimizzare la resa meglio seminare piselli rampicanti. Ci sono poi i piselli mezzarama, ossia semi rampicanti, che superano il metro e mezzo ma non hanno bisogno di sostegni (anche se può capitare di dover mettere qualche bastone a supporto).";

$censured = str_replace($badWord, '***', $paragraph);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Bad Words</title>
</head>

<body>
  <h1>PHP Badwords</h1>
  <p><?php echo $paragraph ?></p>
  <p>La lunghezza del paragrafo è di <?php echo strlen($paragraph) ?> caratteri</p>
  <hr>
  <form>
    <label for="badword">Bad word to censure:</label><br>
    <input type="text" id="badword" name="badword"><br><br>
    <input type="submit" value="Censure">
  </form>
  <h2>Censured</h2>
  <p><?php echo $censured ?></p>
  <p>La lunghezza del paragrafo è di <?php echo strlen($censured) ?> caratteri</p>
</body>

</html>