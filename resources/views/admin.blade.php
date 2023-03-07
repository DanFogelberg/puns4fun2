<form method="post" action="/admin">
    @csrf
    @foreach ($puns as $pun)
    <input type="checkbox" name="<?= $pun->id ?>">
    <label for="<?= $pun->id ?>">
        <?= $pun->pun ?>
    </label><br>
    @endforeach

    <button type="submit">Delete</button>

</form>

<form action="/logout" method="post">
    @csrf
    <button type="submit">Logout</button>
</form>
