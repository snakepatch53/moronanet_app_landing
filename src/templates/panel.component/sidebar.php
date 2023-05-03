<link rel="stylesheet" href="<?= $DATA['http_domain'] ?>public/css.panel/sidebar.css">
<div class="sidebar bg-dark">
    <button class="burguer-button" onclick="handleBurgerSidebar()">
        <i class="fa-solid fa-bars text-light"></i>
    </button>
    <div class="sidebar-header">
        <h4 class="text-truncate p-2"><?= $DATA['info']['info_name'] ?></h4>
    </div>
    <div class="logo"><img src="<?= $DATA['http_domain'] ?>public/img/logo.png?last=<?= $DATA['info']['info_last'] ?>" alt="Logo"></div>
    <!-- List | ini -->
    <ul class="list-group rounded-0 p-2 border-0">

        <a href="<?= $DATA['http_domain'] ?>panel/" class="nav-option btn btn-outline-primary border-0 text-start p-3 mb-2 <?= ($DATA['name'] == "home") ? "shadow  active" : "" ?>">
            <i class="fa-solid fa-house"></i>
            <span class="ms-2">Inicio</span>
        </a>

        <a href="<?= $DATA['http_domain'] ?>panel/info" class="nav-option btn btn-outline-primary border-0 text-start p-3 mb-2 <?= ($DATA['name'] == "info") ? "shadow  active" : "" ?>">
            <i class="fa-solid fa-info"></i>
            <span class="ms-2">Informacion</span>
        </a>

        <a href="<?= $DATA['http_domain'] ?>panel/links" class="nav-option btn btn-outline-primary border-0 text-start p-3 mb-2 <?= ($DATA['name'] == "links") ? "shadow  active" : "" ?>">
            <i class="fa-solid fa-link"></i>
            <span class="ms-2">Links</span>
        </a>

        <a href="<?= $DATA['http_domain'] ?>panel/mensajes" class="nav-option btn btn-outline-primary border-0 text-start p-3 mb-2 <?= ($DATA['name'] == "mensajes") ? "shadow  active" : "" ?>">
            <i class="fa-solid fa-envelope"></i>
            <span class="ms-2">Mensajes</span>
        </a>

        <a href="<?= $DATA['http_domain'] ?>panel/planes" class="nav-option btn btn-outline-primary border-0 text-start p-3 mb-2 <?= ($DATA['name'] == "planes") ? "shadow  active" : "" ?>">
            <i class="fa-solid fa-credit-card"></i>
            <span class="ms-2">Planes</span>
        </a>

        <a href="<?= $DATA['http_domain'] ?>panel/preguntas" class="nav-option btn btn-outline-primary border-0 text-start p-3 mb-2 <?= ($DATA['name'] == "preguntas") ? "shadow  active" : "" ?>">
            <i class="fa-solid fa-question"></i>
            <span class="ms-2">Preguntas</span>
        </a>

        <a href="<?= $DATA['http_domain'] ?>panel/restricciones" class="nav-option btn btn-outline-primary border-0 text-start p-3 mb-2 <?= ($DATA['name'] == "restricciones") ? "shadow  active" : "" ?>">
            <i class="fa-solid fa-lock"></i>
            <span class="ms-2">Restricciones</span>
        </a>

        <a href="<?= $DATA['http_domain'] ?>panel/slider" class="nav-option btn btn-outline-primary border-0 text-start p-3 mb-2 <?= ($DATA['name'] == "slider") ? "shadow  active" : "" ?>">
            <i class="fa-solid fa-images"></i>
            <span class="ms-2">Slider</span>
        </a>

        <a href="<?= $DATA['http_domain'] ?>panel/social" class="nav-option btn btn-outline-primary border-0 text-start p-3 mb-2 <?= ($DATA['name'] == "social") ? "shadow  active" : "" ?>">
            <i class="fa-solid fa-share"></i>
            <span class="ms-2">Redes</span>
        </a>

        <a href="<?= $DATA['http_domain'] ?>panel/users" class="nav-option btn btn-outline-primary border-0 text-start p-3 mb-2 <?= ($DATA['name'] == "users") ? "shadow  active" : "" ?>">
            <i class="fa-solid fa-users"></i>
            <span class="ms-2">Usuarios</span>
        </a>

    </ul>
    <!-- List | end -->
</div>