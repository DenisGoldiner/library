<?php// include 'main_view.php'; ?>

<div class="Content">

    <?php foreach ($data as $book):?>
    <div class="post">
        <h2 class="title">
            <a href="#"><?php echo $book['book_name'];?></a>
        </h2>
        <p><?php echo $book['book_publish_date'];?></p>
    </div>
    <?php endforeach;?>

</div>
