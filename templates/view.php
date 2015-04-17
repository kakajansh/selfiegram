<?php include "templates/include/header.php" ?>

<div class="ui segment" style="">

    <h1 class="ui block header">
    <div class="ui grid">
        <div class="fourteen wide column">
            <?php echo $results['photo']->content?>
        </div>
        <div class="two wide column">
            <a href="index.php?action=favoritesAdd&amp;photoid=<?php echo $results['photo']->id ?>" class="ui fluid red button"><i class="star icon"></i></a>
        </div>
    </div>
    </h1>
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

