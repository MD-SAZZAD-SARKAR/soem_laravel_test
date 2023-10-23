<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome back from post</title>
</head>

<body>
    <h1>this is post page</h1>

    <form method="post" action="/post/store">
        <?php echo csrf_field(); ?>
        <input type="text" name="title" id="">
        <textarea name="details" id="" cols="30" rows="10"></textarea>
        <input type="submit" name="submit" id="">
    </form>


    <table>
        <?php foreach ($post_data as $try1_tabl) { ?>
            <tr>
                <td><?php echo $try1_tabl->id; ?></td>
                <td><?php echo $try1_tabl->name; ?></td>
                <td><?php echo $try1_tabl->details; ?></td>
                <td><a href="<?php echo  url('post/show-single', $try1_tabl->id); ?>">Single show</a></td>
                <td><a href="<?php echo  url('post/edit', $try1_tabl->id); ?>">Edit</a></td>
                <td>
                    <form action="<?php echo url('post/delete', $try1_tabl->id); ?>">
                        <?php echo csrf_field(); ?>
                        <input type="text" name="_method"  value="DELETE">
                        
                    </form>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>