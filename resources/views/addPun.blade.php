<form action="/addPun" method="POST">
    <input type="text" name="pun" placeholder="pun">

    <input type="text" name="author" placeholder="author"><br>

    <input type="checkbox" name="cat">
    <label for="cat"> Cat</label><br>
    <input type="checkbox" name="celebrities">
    <label for="celebrities"> Celebrities</label><br>
    <input type="checkbox" name="countries">
    <label for="contries"> Countries</label><br>
    <input type="checkbox" name="baking">
    <label for="baking"> Baking</label><br>

    <button>submit</button>
    @csrf
</form>

<?php
echo "<br>";
var_dump($pun);
echo "<br>";
?>
