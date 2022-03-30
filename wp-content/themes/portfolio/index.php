<?php get_header(); ?>

<main class="layout">
    <section class="layout__about about">
        <h2 class="about__title">Qui est Aline ?</h2>
        <div class="about__container">
            <p class="about__description">Jeune femme mariée et mère de famille, je souhaite dorénavant me consacrer à ma carrière.
            J'ai pu exercer en tant que commis de cuisine, employée callcenter, caissière et employée administrative. Aujourd'hui, je souhaite
                me spécialiser dans le webdesign tout en proposant mes diverses compétences pour compléter mon savoir-faire.
            </p>
            <figure class="about__fig">
                <img src="./img/Aline.jpg" alt="Photo d'Aline">
            </figure>
        </div>
    </section>
    <section class="layout__projects projects">
        <h2 class="projects__title">Mes derniers projets</h2>
        <div class="projects__container">
            <?php if(($projects = dw_get_projects(3))->have_posts()): while($projects->have_posts()): $projects->the_post(); ?>
                <article class="project">
                    <div class="project__card">
                        <header class="project__head">
                            <h3 class="project__title"><?= get_the_title(); ?></h3>
                            <p class="project__date"><time class="project__time" datetime="<?= date('c', strtotime(get_field('project_date', false, false))); ?>">
                                    <?= ucfirst(date_i18n('F, Y', strtotime(get_field('project_date', false, false)))); ?>
                                </time></p>
                        </header>
                        <figure class="project__fig">
                            <?= get_the_post_thumbnail(null, 'medium_large', ['class' => 'project__thumb']); ?>
                        </figure>
                    </div>
                    <a href="<?= get_the_permalink(); ?>" class="project__link">Voir le projet "<?= get_the_title(); ?>"</a>
                </article>
            <?php endwhile; else: ?>
                <p class="projects__empty">Il n'y a pas de projets à vous montrer...</p>
            <?php endif; ?>
        </div>
    </section>

    <section class="layout__others others">
        <h2 class="projects__title">Webdesign mais aussi</h2>
        <div class="projects__container">
            <?php if(($othersProjects = dw_get_othersProjects(1))->have_posts()): while($othersProjects->have_posts()): $othersProjects->the_post(); ?>
                <article class="project">
                    <div class="project__card">
                        <header class="project__head">
                            <h3 class="project__title"><?= get_the_title(); ?></h3>
                            <p class="project__date"><time class="project__time" datetime="<?= date('c', strtotime(get_field('project_date', false, false))); ?>">
                                    <?= ucfirst(date_i18n('F, Y', strtotime(get_field('project_date', false, false)))); ?>
                                </time></p>
                        </header>
                        <figure class="project__fig">
                            <?= get_the_post_thumbnail(null, 'medium_large', ['class' => 'project__thumb']); ?>
                        </figure>
                    </div>
                    <a href="<?= get_the_permalink(); ?>" class="project__link">Voir le projet "<?= get_the_title(); ?>"</a>
                </article>
            <?php endwhile; else: ?>
                <p class="projects__empty">Il n'y a pas de projets à vous montrer...</p>
            <?php endif; ?>
        </div>
    </section>
    <section class="layout__skills skills">
        <h2 class="skills__title">Qui est Aline ?</h2>
        <div class="skills__container langages">
            <h3 class="skills__subtitle">Langages</h3>
            <ul class="skills__langages">
                <li class="skills__li">Javascript</li>
                <li class="skills__li">PHP</li>
                <li class="skills__li">SQL</li>
                <li class="skills__li">HTML</li>
                <li class="skills__li">CSS</li>
                <li class="skills__li">CSS</li>
            </ul>
        </div>
        <div class="skills__container programs">
            <h3 class="skills__subtitle">Logiciels</h3>
            <ul class="skills__programs">
                <li class="skills__li">Suite Adobe</li>
                <li class="skills__li">PHPStorm</li>
                <li class="skills__li">GitHub</li>
                <li class="skills__li">Suite Office</li>
                <li class="skills__li">Wordpress</li>
                <li class="skills__li">Canva</li>
            </ul>
        </div>
        <div class="skills__container softskills">
            <h3 class="skills__subtitle">Logiciels</h3>
            <ul class="skills__softskills">
                <li class="skills__li">Organisée</li>
                <li class="skills__li">Bonne humeur</li>
                <li class="skills__li">Investie</li>
                <li class="skills__li">Télétravail possible (et souhaité)</li>
                <li class="skills__li">Facilité d'adaptation</li>
                <li class="skills__li">Communication aisée</li>
                <li class="skills__li">N'hésite pas à se former</li>
            </ul>
        </div>
    </section>
</main>






















<?php get_footer(); ?>
