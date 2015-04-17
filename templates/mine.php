<?php include "templates/include/header.php" ?>

<div class="ui segment">
<div class="ui items">
<?php if ($results['totalRows'] == 0) { ?>
    <h3 class="ui block header">Hicbir resim yuklememisim</h3>
<?php } else { ?>
    <h3 class="ui block header">Toplam <?php echo $results['totalRows'] ?> yukleme yapmishim :)</h3>
<?php } ?>

<?php foreach ( $results['photos'] as $photo ) { ?>
  <div class="item">
    <div class="ui small image">
      <img src="<?php echo htmlspecialchars( $photo->image )?>">
    </div>
    <div class="middle aligned content">
      <a href=".?action=view&amp;photoId=<?php echo $photo->id?>" class="header">
        <?php echo htmlspecialchars( $photo->title )?>
      </a>
      <div class="description">
        <p><?php echo htmlspecialchars( $photo->content )?></p>
      </div>
      <div class="extra">
        <div class="ui right floated button">
            <?php if ( $photo->id ) { ?>
              <p><a href="./?action=view&amp;photoId=<?php echo $photo->id ?>">Goster</a></p>
            <?php } ?>
        </div>
      </div>
    </div>
  </div>
<?php } ?>
</div>
</div>

<?php include "templates/include/footer.php" ?>