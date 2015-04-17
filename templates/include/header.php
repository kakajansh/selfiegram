<?php

$PATH = './?action=';

class Url
{
    public $title;
    public $icon;
    public $url;
}

$anasayfa = new Url();
$anasayfa->title = 'Selfiegram';
$anasayfa->icon = 'home';
$anasayfa->url = $PATH.'gridview';

$harita = new Url();
$harita->title = 'Haritada';
$harita->icon = 'map';
$harita->url = $PATH.'harita';

$favorites = new Url();
$favorites->title = 'Favorilerim';
$favorites->icon = 'star';
$favorites->url = $PATH.'favorites';

$mine = new Url();
$mine->title = 'Benimkiler';
$mine->icon = 'picture';
$mine->url = $PATH.'mine';

$profile = new Url();
$profile->title = 'Profilim';
$profile->icon = 'user';
$profile->url = $PATH.'profile';

$pages = array($anasayfa, $harita, $favorites, $mine, $profile);

?>

<html>
<head><title>Merhaba!</title></head>
<link rel="stylesheet" href="semantic/dist/semantic.css">
<link rel="stylesheet" href="style.css">
<script src="js/jquery.js"></script>
<script src="js/masonry.js"></script>
<script src="semantic/dist/semantic.min.js"></script>
<body>
    <div class="ui main header"></div>
    <div class="ui icon center aligned submain header">
        <i class="circular camera inverted red icon"></i>Selfiegram
        <div class="sub header">Merhaba, şimdi saat 17:25..</div>
    </div>
    <div class="ui page grid">
        <div class="column"><br>
        <div class="ui labeled icon fluid five item menu">

            <?php
            foreach($pages as $page): ?>
                <a class="red item <?php if($page->title === $results['pageTitle']):?>active<?php endif;?>" href="<?php echo $page->url;?>">
                  <i class="<?php echo $page->icon ?> icon"></i>
                  <?php echo $page->title;?>
                </a>
            <?php endforeach;?>
     <!--        <a href="./" class="red active item">
                <i class="home icon"></i>
                    Anasayfa
            </a>
            <a class="green item">
                <i class="map icon"></i>
                    Haritada
            </a>
            <a href="./?action=favorites" class="teal item">
                <i class="star icon"></i>
                    Favorites
            </a>
            <a class="green item">
                <i class="picture icon"></i>
                    Benimkiler
            </a>
            <a href="./?action=profile" class="green item">
                <i class="user icon"></i>
                    Profilim
            </a> -->
        </div>

        <div class="ui basic nopad segment">