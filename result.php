<?php
$paragraph= $_GET['paragraph'];
$bannedWord= $_GET['word'];

$result=str_replace( strtolower($bannedWord),' *** ',strtolower($paragraph));
echo $result

?>



<p>Il tuo paragrafo è: <?php echo $paragraph ?></p>
<p>E la parola che vuoi bannare è: <?php echo $bannedWord ?></p>