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
        <aside class="singleProjet__details">
            <h3 class="singleProjet__subtitle">Détails du projet</h3>
            <dl class="singleProjet__def">
                <dt class="singleProjet__label">Date du projet</dt>
                <dd class="singleProjet__data"><time class="singleProjet__date"><?= get_the_date(); ?></time></dd>
                <dt class="singleProjet__label">Cours correspondant</dt>
                <?php if(get_field('cours_projet')):  ?>
                <dd class="singleProjet__data"><?= get_field('cours_projet', false, false);  ?>
                <?php else: ?>
                <span class="singleProjet__empty">Pas de cours associé à se projet</span>
                    <?php endif; ?>
                </dd>
            </dl>
        </aside>
    </main>
    <?php endwhile; endif; ?>



<?php get_footer(); ?>
