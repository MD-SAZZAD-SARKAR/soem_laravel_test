<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit id <?= $posts->id; ?></title>
</head>

<body>
    <form method="post" action="<?= url('post/update', $posts->id);?>">
    <?php echo csrf_field();  ?>
    <input type="text" name="_method" hidden value="PUT" id="">
        <input type="text" name="name" value="<?= $posts->name; ?>" id="">
        <input type="text" name="details" value="<?= $posts->details; ?>" id="">
        <input type="submit" name="update" id="">
    </form>
</body>

</html>