<!-- <img src="img/example.com.png" alt="dog"> -->

<h1>PUN 4 FUN</h1>
<link href="css/main.css" rel="stylesheet">
<link href="css/fonts.css" rel="stylesheet">

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

$punId = 0;
foreach ($punsCategories as $pun) {
    if($punId != $pun->id)
    {
        $punId = $pun->id;
        echo "<br>", $pun->pun, "- ", $pun->author;
    }
   if(isset($pun->category_ID)) echo " " . $categories->where('id', $pun->category_ID)->first()->category;

}

?>
