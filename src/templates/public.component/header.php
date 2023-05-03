<section>
    <divc class="container">
        <span><?= $DATA['info']['info_address'] ?> / <?= $DATA['info']['info_city'] ?>, <?= $DATA['info']['info_province'] ?></span>
        <ul>
            <a href="tel:<?= $DATA['info']['info_cellphone'] ?>">
                <i class="fas fa-mobile-alt"></i>
                <span><?= $DATA['info']['info_cellphone'] ?></span>
            </a>
            <div class="separador"></div>
            <a href="mailto:<?= $DATA['info']['info_email'] ?>">
                <i class="far fa-envelope"></i>
                <span><?= $DATA['info']['info_email'] ?></span>
            </a>
        </ul>
    </divc>
</section>
<menu>
    <nav>
        <a href="<?= $DATA['http_domain'] ?>" class="logo">
            <img src="<?= $DATA['http_domain'] ?>public/img/logo.png?last=<?= $DATA['info']['info_last'] ?>" alt="Logo Morona Net">
        </a>
        <ul class="supp">
            <li>
                <a href="<?= $DATA['http_domain'] ?>" class="<?= $DATA['name'] == 'home' ? 'active' : '' ?>">
                    <i class="fas fa-home"></i>
                    <span>Inicio</span>
                </a>
            </li>
            <li>
                <a href="<?= $DATA['http_domain'] ?>servicios" class="<?= $DATA['name'] == 'servicios' ? 'active' : '' ?>">
                    <i class="fas fa-gift"></i>
                    <span>Servicios</span>
                    <i class="fas fa-sort-down"></i>
                </a>
                <ul class="scroll-style">
                    <?php foreach ($DATA['planes'] as $key => $value) { ?>
                        <li>
                            <a href="<?= $DATA['http_domain'] ?>servicios#plan-<?= $value['plan_id'] ?>">
                                <?= $value['plan_icon'] ?>
                                <span><?= $value['plan_name'] ?></span>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </li>
            <li>
                <a class="<?= $DATA['name'] == 'nosotros' ? 'active' : '' ?>">
                    <i class="fas fa-address-card"></i>
                    <span>Nosotros</span>
                    <i class="fas fa-sort-down"></i>
                </a>
                <ul class="scroll-style">
                    <li>
                        <a href="<?= $DATA['http_domain'] ?>nosotros">
                            <i class="fas fa-address-card"></i>
                            <span>Acerca de nosotros</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="<?= $DATA['name'] == 'clientes' ? 'active' : '' ?>">
                    <i class="fas fa-users"></i>
                    <span>Clientes</span>
                    <i class="fas fa-sort-down"></i>
                </a>
                <ul class="scroll-style">
                    <li>
                        <a href="<?= $DATA['http_domain'] ?>clientes">
                            <i class="fas fa-users"></i>
                            <span>Atencion al cliente</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="<?= $DATA['http_domain'] ?>preguntas" class="<?= $DATA['name'] == 'preguntas' ? 'active' : '' ?>">
                    <i class="fas fa-question"></i>
                    <span>Preguntas</span>
                </a>
            </li>
            <a class="button" href="<?= $DATA['http_domain'] ?>contactos">
                <i class="fas fa-unlock-alt"></i>
                <span>Contáctanos</span>
            </a>
        </ul>
        <button class="burguer-menu" id="burguer-menu">
            <i class="fas fa-bars"></i>
        </button>
    </nav>
</menu>