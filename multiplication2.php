<?php
$i= ($_POST['table']);

for($boucle = 0; $boucle <= 10; $boucle++){
    echo '<p>'.$i. "x" .$boucle. "=".$i*$boucle .'<br/>';
}
?>