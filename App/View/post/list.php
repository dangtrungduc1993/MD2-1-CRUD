<?php include_once "App/View/layout/nav.php"?>
<div class="container">
    <div class="row">
        <div class="col-3 pr-1">
            <?php include_once "App/View/layout/sidebar.php"?>
        </div>
        <div class="col-9 pl-1">
            <a  type="button" class="btn btn-success mb-3" href="index.php?page=post-create">Create</a>

            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Content</th>
                    <th scope="col" colspan="2" style="text-align: center">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($posts as $post):?>
                    <tr>
                        <td scope="row"><?php echo $post->id ?></td>
                        <td><?php echo $post->title ?></td>
                        <td><?php echo $post->content ?></td>
                        <td><a href="index.php?page=post-detail&id=<?php echo $post->id?>">Detail</a></td>
                        <td><a onclick="return confirm('Ban co muon xoa no khong?')" href="index.php?page=post-delete&id=<?php echo $post->id?>">Delete</a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-6 text-center">Hello</div>
        <div class="col-6 text-center">Hello</div>
    </div>
</div>
