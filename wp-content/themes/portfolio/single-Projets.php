<?php get_header(); ?>
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <main class="layout singleProjet">
        <h2 class="singleProjet__title"><?= get_the_title(); ?></h2>
        <figure class="singleProjet__fig">
            <?= get_the_post_thumbnail(null, 'thumbnail', ['class' => 'singleProject__thumb']); ?>
        </figure>
        <div class="singleProjet__content">
            <?=  the_content();  ?>
        </div>
        <button class="singleProjet__button"><a href="template-contact.php" title="Me contacter">Me contacter</a></button>
        <aside class="singleProjet__details">
            <h3 class="singleProjet__subtitle">Détails du projet</h3>
            <dl class="singleProjet__def">
                <dt class="singleProjet__label">Date du projet</dt>
                <dd class="singleProjet__data"><time class="singleProjet__date"><?= get_the_date(); ?></time></dd>
                <?php if(get_field('cours_projet')):  ?>
                <dt class="singleProjet__label">Cours correspondant</dt>
                <dd class="singleProjet__data"><?= get_field('cours_projet', false, false);  ?>
                    <?php endif; ?>
                </dd>
                <dt class="singleProjet__label">Catégorie(s)</dt>
                <dd class="singleProjet__data"><?= get_field('categorie_projet', false, true); ?></dd>
            </dl>
        </aside>
        <section class="singleProjet__sugestion">

            <!--Faire en sorte que les catégories s'affichent avec un id différent et
ajouter une section suggestion où on propose un des derniers projets ayant la/les mêmes catégories-->
        </section>
    </main>
    <?php endwhile; endif; ?>


<?php get_footer(); ?>
