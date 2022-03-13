<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header class="header">
        <h1 class="header__title"><?= get_bloginfo('name'); ?></h1>
<p class="header__tagline"><?= get_bloginfo('description'); ?></p>

<nav class="header__nav nav">
    <h2 class="nav__title">Navigation principale</h2>
    <ul class="nav__container">
        <?php foreach(dw_get_menu_items('primary') as $link): ?>
        <li class="<?= $link->getBemClasses('nav__item'); ?>">
            <a href="<?= $link->url; ?>" <?= $link->title ? ' title="' . $link->title . '"' : ''; ?> class="nav__link"><?= $link->label; ?>
            </a>
        <?php endforeach; ?>
</nav>
</header>