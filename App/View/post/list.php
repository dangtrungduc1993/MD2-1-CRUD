<a href="index.php?page=post-create">Create</a>

<table border="10">
    <thead>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Content</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($posts as $post):?>
    <tr>
        <td><?php echo $post->id ?></td>
        <td><?php echo $post->title ?></td>
        <td><?php echo $post->content ?></td>
        <td><a href="index.php?page=post-detail&id=<?php echo $post->id?>">Detail</a></td>
        <td><a onclick="return confirm('Ban co muon xoa no khong?')" href="index.php?page=post-delete&id=<?php echo $post->id?>">Delete</a></td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>