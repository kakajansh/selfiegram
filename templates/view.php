<?php include "templates/include/header.php" ?>

<div class="ui segment" style="">

    <div class="ui block header"><?php echo $results['photo']->content?></div>
    <img src="<?php echo $results['photo']->image ?> " alt="" width="100%">
    <div class="ui divider"></div>
    <div class="ui left floated header">
        <a href="./">Anasayfa'ya don</a>
    </div>
    <div class="ui right floated header">
        Yayinlarnma tarihi: <?php echo date('j F Y', $results['photo']->publicationDate)?>
    </div>

</div>

<?php include "templates/include/footer.php" ?>

