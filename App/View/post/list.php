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
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>