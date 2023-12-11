<?php
$paragraph= $_GET['paragraph'];
$bannedWord= $_GET['word'];

$result=str_replace(strtolower($bannedWord),' *** ',strtolower($paragraph));
echo $result

?>