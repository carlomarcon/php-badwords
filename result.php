<?php
$paragraph= $_GET['paragraph'];
$bannedWord= $_GET['word'];

$result=str_replace($bannedWord,' *** ',$paragraph);
echo $result

?>