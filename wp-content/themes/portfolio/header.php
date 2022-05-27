<?php wp_head(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= __('Aline votre webdesign', 'Aline-db-portfolio'); ?></title>
    <link rel="stylesheet" type="text/css" href="<?= dw_mix('css/style.css'); ?>" />
    <script type="text/javascript" src="<?= dw_mix('js/script.js'); ?>"></script>
    <meta name="description" content="Projet Portfolio par Aline DE BARROS">
    <meta name="DE BARROS Aline">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta accesskey="CV, Aline, études, expériences, projets, languages, employée, politique, livres, travail, job, HEPL">
</head>
<body>
    <header class="header">
        <h1 class="header__title"><?= get_bloginfo('name'); ?></h1>
<p class="header__tagline"><?= get_bloginfo('description'); ?></p>
 <!--       <input class="nav__burger" type="checkbox" name="" id="burger" />
        <label for="burger" name="" >
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="lightgrey" class="bi bi-justify" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2 12.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
            </svg>
        </label>-->
        <input id="toggle" type="checkbox">

        <label for="toggle" class="hamburger">
            <div class="top-bun"></div>
            <div class="meat"></div>
            <div class="bottom-bun"></div>
        </label>
<nav class="header__nav nav">
    <h2 class="nav__title"><?= __('Navigation principale', 'Aline-db-portfolio'); ?></h2>
    <ul class="nav__container">
        <?php foreach(dw_get_menu_items('primary') as $link): ?>
        <li class="<?= $link->getBemClasses('nav__item'); ?>">
            <a href="<?= $link->url; ?>" <?= $link->title ? ' title="' . $link->title . '"' : ''; ?> class="nav__link"><?= $link->label; ?>
            </a>
        </li>
        <?php endforeach; ?>
            <div >
                <?php foreach(pll_the_languages(['raw' => true]) as $code => $locale) :?>
                <li class="nav__languages">
                    <a href="<?= $locale['url']; ?>" lang="<?= $locale['locale']; ?>" hreflang="<?= $locale['locale']; ?>" class="nav__locale" title="<?= $locale['name']; ?>"><?= $code; ?></a>
                    <?php endforeach; ?>
                </li>
            </div>
</nav>
        <img class="header__logo" src="<?php echo get_template_directory_uri().'/img/logo_wd.png'; ?>" alt="logo web et design" width="150" height="150">
</header>