<?php
$sport = array('Football', 'Basketball', 'Cricket', 'Voleyball');
echo $sport[0];
$sport = ['Football', 'Basketball', 'Cricket', 'Voleyball'];
echo end($sport);
echo count($sport);


for ($i=0; $i<4; $i++) {
    echo $sport[$i], "\n";
}


?>