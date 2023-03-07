<?php
echo "<br>";
echo "<pre>";
var_dump($punsCategories);
//var_dump($categories);
//var_dump($categoriesArray);

?>

<form action="/addPun" method="POST">
    <input type="text" name="pun" placeholder="pun">

    <input type="text" name="author" placeholder="author"><br>

    @include('errors')
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


foreach ($puns as $pun) {
    echo "<br>", $pun->pun, "- ", $pun->author;
}

?>
