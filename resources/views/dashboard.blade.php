<!-- <img src="img/example.com.png" alt="dog"> -->

<h1>PUN 4 FUN</h1>
<link href="css/main.css" rel="stylesheet">
<link href="css/fonts.css" rel="stylesheet">

<form action="/addPun" method="POST">

    <textarea name="pun" placeholder="pun">
    </textarea>
    <br>

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




<section>
    <?php
    foreach ($puns as $pun) { ?>
    <div>
        <?= $pun['pun'], "- ", $pun['author'] ?>
        @foreach ($pun['categories'] as $categoryId)
        <?php echo $categories->where('id', $categoryId)->first()->category ?>
        @endforeach

    </div>


    <?php } ?>
</section>
