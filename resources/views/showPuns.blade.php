<form action="/addPun" method="POST">
    <input type="text" name="pun" placeholder="pun">

    <input type="text" name="author" placeholder="author"><br>


    @foreach($categories as $category)

    <input type="checkbox" name="<?= $category->category ?>">
    <label for="<?= $category->category ?>">
        <?= $category->category ?>


    </label><br>

    @endforeach


    <button>submit</button>
    @csrf
</form>

<?php
echo "<br>";
var_dump($pun);
echo "<br>";
?>


<?php


foreach ($puns as $pun) {
    echo "<br>", $pun->pun, "- ", $pun->author;
}

?>
