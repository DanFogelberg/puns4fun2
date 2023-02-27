<!-- hej! -->

<?php
// echo "<pre>";
// var_dump($puns);

foreach ($puns as $pun) {
    echo "<br>", $pun->pun, "- ", $pun->author;
}

?>
