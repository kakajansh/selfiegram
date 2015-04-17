<?php include "templates/include/header.php" ?>

<div class="ui small menu">
  <a href=".?action=listview&order=last" class="item">Son eklenen</a>
  <a href=".?action=listview&order=top" class="item">Cok begenilen</a>
  <a href=".?action=new" class="item">Yeni ekle</a>
  <div class="right menu">
    <a href=".?action=gridview" class="active item"><i class="grid layout icon"></i></a>
    <a href=".?action=listview" class="item"><i class="list layout icon"></i></a>
  </div>
</div>

<div id="m-container" class="js-masonry" data-masonry-options='{ "itemSelector": ".m-item" }'>
    <?php foreach ( $results['photos'] as $photo ) { ?>
    <div class="m-item" align="center">
        <a href=".?action=view&amp;photoId=<?php echo $photo->id?>"><img src="<?php echo htmlspecialchars( $photo->image )?>" width="100%"></a>
    </div>
    <?php } ?>
</div>

<?php include "templates/include/footer.php" ?>