<?php include "templates/include/header.php" ?>

<div class="ui segment" style="">

<form class="ui error form segment" method="post" enctype="multipart/form-data">
  <div class="ui message">
    <div class="header">Yeni resim eklemek icin</div>
    <p>Asagidaki formu doldurmanz rica olunur.</p>
  </div>
  <div class="field">
    <label>Title:</label>
    <input placeholder="Title" type="text" name="title">
  </div>
  <div class="two fields">
    <div class="field">
      <label>Latitude:</label>
      <input placeholder="Latitude" type="text" name="lat">
    </div>
    <div class="field">
      <label>Longtitude:</label>
      <input placeholder="Longtitude" type="text" name="lng">
    </div>
  </div>
  <div class="field">
    <label>Content:</label>
    <textarea name="content"></textarea>
  </div>
  <div class="field">
    <input type="date" name="publicationDate" id="publicationDate" placeholder="YYYY-MM-DD" required maxlength="10" value="<?php $t = time(); echo date('Y-m-d', $t); ?>" />

  </div>
  <div class="field">
    <input type="file" name="image" />
  </div>
  <input type="submit" class="ui submit button" name="saveChanges" value="Yeni resim ekle" />
</fomr>

</div>

<?php include "templates/include/footer.php" ?>

