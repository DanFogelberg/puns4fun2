<!-- <img src="img/example.com.png" alt="dog"> -->


<h1>PUN 4 FUN</h1>
<link href="css/main.css" rel="stylesheet">
<link href="css/fonts.css" rel="stylesheet">


<form action="/addPun" method="post">

    <textarea name="pun" placeholder="pun"></textarea>
    <br>

    <input type="text" name="author" placeholder="author"><br>


    @foreach($categories as $category)

    <input type="checkbox" name="<?= $category->category ?>">
    <label for="<?= $category->category ?>">
        <?= $category->category ?>


    </label><br>

    @endforeach


    <button class="submit">submit</button>
    @csrf
</form>

<form action="/" method="get">
    <button>All</button>
    @foreach($categories as $category)

    <button value="<?= $category->category ?>" name="category" class="<?= $category->category ?>">

        <?= $category->category ?>
        <br>

    </button>

    @endforeach
</form>
@include ('errors')

<section>

    <!-- Add pagination  -->
    @foreach ($puns as $pun)
    <div class="card">
        <?= $pun->pun, "- ", $pun->author ?>

        <div class="categories">
            @foreach ($pun->category as $category)
            <div class="category <?= $category->category ?>">
                <?= $category->category ?> </div>
            @endforeach


        </div>
    </div>

    @endforeach
</section>
