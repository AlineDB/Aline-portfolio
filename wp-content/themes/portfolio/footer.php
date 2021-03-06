<?php wp_footer(); ?>
<footer class="footer">
            <h2 class="footer__title"><?= __('Pied de page', 'Aline-db-portfolio'); ?></h2>
    <section class="footer__body">
            <ul class="footer__menu">
                <?php foreach(dw_get_menu_items('footer') as $link): ?>
                    <li class="<?= $link->getBemClasses('nav__item'); ?>">
                        <a href="<?= $link->url; ?>" <?= $link->title ? ' title="' . $link->title . '"' : ''; ?> class="nav__link"><?= $link->label; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        <img class="footer__logo" src="<?php echo get_template_directory_uri().'/img/logo_wd.png'; ?>" alt="logo web et design" width="150" height="100">
                <div class="footer__links">
                    <ul>
                        <li>
                            <a title="Profil Facebook d'Aline" href="https://www.facebook.com/aline.lovec" target="_blank" rel="noopener noreferrer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="black" class="facebook" viewBox="0 0 7 15" width="25" height="25">
                                    <path d="M4.563 4.964h2.295l-0.268 2.536h-2.027v7.357h-3.045v-7.357h-1.518v-2.536h1.518v-1.527q0-1.625 0.768-2.46t2.527-0.835h2.027v2.536h-1.268q-0.348 0-0.558 0.058t-0.304 0.21-0.121 0.308-0.027 0.442v1.268z"></path>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a title="Profil Behance d'Aline" href="https://www.behance.net/alinedebarros1" target="_blank" rel="noopener noreferrer">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="behance" viewBox="0 0 16 16">
                                    <path d="M4.654 3c.461 0 .887.035 1.278.14.39.07.711.216.996.391.286.176.497.426.641.747.14.32.216.711.216 1.137 0 .496-.106.922-.356 1.242-.215.32-.566.606-.997.817.606.176 1.067.496 1.348.922.281.426.461.957.461 1.563 0 .496-.105.922-.285 1.278a2.317 2.317 0 0 1-.782.887c-.32.215-.711.39-1.137.496a5.329 5.329 0 0 1-1.278.176L0 12.803V3h4.654zm-.285 3.978c.39 0 .71-.105.957-.285.246-.18.355-.497.355-.887 0-.216-.035-.426-.105-.567a.981.981 0 0 0-.32-.355 1.84 1.84 0 0 0-.461-.176c-.176-.035-.356-.035-.567-.035H2.17v2.31c0-.005 2.2-.005 2.2-.005zm.105 4.193c.215 0 .426-.035.606-.07.176-.035.356-.106.496-.216s.25-.215.356-.39c.07-.176.14-.391.14-.641 0-.496-.14-.852-.426-1.102-.285-.215-.676-.32-1.137-.32H2.17v2.734h2.305v.005zm6.858-.035c.286.285.711.426 1.278.426.39 0 .746-.106 1.032-.286.285-.215.46-.426.53-.64h1.74c-.286.851-.712 1.457-1.278 1.848-.566.355-1.243.566-2.06.566a4.135 4.135 0 0 1-1.527-.285 2.827 2.827 0 0 1-1.137-.782 2.851 2.851 0 0 1-.712-1.172c-.175-.461-.25-.957-.25-1.528 0-.531.07-1.032.25-1.493.18-.46.426-.852.747-1.207.32-.32.711-.606 1.137-.782a4.018 4.018 0 0 1 1.493-.285c.606 0 1.137.105 1.598.355.46.25.817.532 1.102.958.285.39.496.851.641 1.348.07.496.105.996.07 1.563h-5.15c0 .58.21 1.11.496 1.396zm2.24-3.732c-.25-.25-.642-.391-1.103-.391-.32 0-.566.07-.781.176-.215.105-.356.25-.496.39a.957.957 0 0 0-.25.497c-.036.175-.07.32-.07.46h3.196c-.07-.526-.25-.882-.497-1.132zm-3.127-3.728h3.978v.957h-3.978v-.957z"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a title="Profil LinkedIn d'Aline"  href="https://www.linkedin.com/in/aline-de-barros-218902166/" target="_blank" rel="noopener noreferrer">
                                <svg class="linkendin" width="25" height="25" viewBox="0 0 12 18" fill="black" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.116 5.58v8.848h-2.946v-8.848h2.946zM3.304 2.848q0.009 0.652-0.451 1.089t-1.21 0.438h-0.018q-0.732 0-1.179-0.438t-0.446-1.089q0-0.661 0.46-1.094t1.201-0.433 1.188 0.433 0.455 1.094zM13.714 9.357v5.071h-2.938v-4.732q0-0.938-0.362-1.469t-1.129-0.531q-0.563 0-0.942 0.308t-0.567 0.763q-0.098 0.268-0.098 0.723v4.938h-2.938q0.018-3.563 0.018-5.777t-0.009-2.643l-0.009-0.429h2.938v1.286h-0.018q0.179-0.286 0.366-0.5t0.504-0.464 0.777-0.388 1.022-0.138q1.527 0 2.455 1.013t0.929 2.969z"></path>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a title="Profil auteure Kindle d'Aline" href="https://www.amazon.fr/Aline-DB/e/B099XB41FT?ref_=dbs_p_ebk_r00_abau_000000" target="_blank" rel="noopener noreferrer">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="black" class="kindle" viewBox="0 0 16 16">
                                    <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM5 4h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm0 2h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1z"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a title="Profil GitHub d'Aline" href="https://github.com/AlineDB" target="_blank" rel="noopener noreferrer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="black" width="25" height="25" class="github" viewBox="0 0 16 16">
                                    <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>

        </section>
    </footer>
</body>
</html>