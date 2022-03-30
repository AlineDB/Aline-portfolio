<?php


?>
<footer class="footer">
        <section class="footer__body">
            <h2 class="footer__title">Pied de page</h2>
            <?php foreach(dw_get_menu_items('footer') as $link): ?>
            <li class="<?= $link->getBemClasses('nav__item'); ?>">
                <a href="<?= $link->url; ?>" <?= $link->title ? ' title="' . $link->title . '"' : ''; ?> class="nav__link"><?= $link->label; ?>
                </a>
                <?php endforeach; ?>
                <img class="logo" src="./img/logo_webdesign.png" alt="logo web et design">
        </section>
    </footer>
</body>
</html>