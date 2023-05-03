<!DOCTYPE html>
<html lang="es">

<head>
    <?php include('./src/templates/panel.component/head.php') ?>
</head>

<body>
    <?php include('./src/templates/panel.component/header.php') ?>
    <?php include('./src/templates/panel.component/sidebar.php') ?>
    <main>
        <!-- CONTENT PAGE | INI -->
        <div class=" pt-4 px-md-5 px-1">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= $DATA['http_domain'] ?>panel">Inicio</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Links</li>
                </ol>
            </nav>
            <div class="card shadow">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <b>Links</b>
                        <button class="btn btn-outline-success" onclick="handleFunction.new()">
                            <i class="fa-solid fa-plus"></i>
                            <span>Crear nuevo</span>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-hover border">
                        <thead class="bg-dark text-light">
                            <tr>
                                <th class="d-none d-md-table-cell" scope="col">#</th>
                                <th class="text-center text-md-left" scope="col">Nombre</th>
                                <th class="d-none d-md-table-cell text-center text-md-left" scope="col">Velocidad</th>
                                <th class="d-none d-md-table-cell text-center text-md-left" scope="col">Precio</th>
                                <th class="text-center" scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody id="element-table"></tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- CONTENT PAGE | END -->

        <!-- MODAL | INI -->
        <!-- gift | ini -->

        <!-- gift | end -->

        <!-- form | ini -->
        <div class="modal fade" id="element-modalform" tabindex="-1" aria-labelledby="element-modalformLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form class="modal-content needs-validation" id="element-form" onsubmit="return false" novalidate>
                    <input type="hidden" name="plan_id" value="0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="element-modalformLabel">Formulario</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- form | ini -->
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="validationServer01" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="validationServer01" placeholder="Nombre.." name="plan_name" required>
                                <div class="invalid-feedback">
                                    Escribe el nombre del plan!
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="validationServer02" class="form-label">Icono</label>
                                <input type="text" class="form-control" id="validationServer02" placeholder="<i class='fas fa-wifi'></i>" name="plan_icon" required>
                                <div class="invalid-feedback">
                                    Ingrese el icono de fontawesome!
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="validationServer03" class="form-label">Comparticion nombre</label>
                                <input type="text" class="form-control" id="validationServer03" placeholder="ILIMITADO" name="plan_sharing_name" required>
                                <div class="invalid-feedback">
                                    Describa la comparticion!
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="validationServer04" class="form-label">Comparticion valor</label>
                                <input type="text" class="form-control" id="validationServer04" placeholder="Sin Comparticion" name="plan_sharing_value" required>
                                <div class="invalid-feedback">
                                    Ingrese el valor de la comparticion!
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="validationServer05" class="form-label">Precio</label>
                                <input type="text" class="form-control" id="validationServer05" placeholder="Sin Comparticion" name="plan_price_value" required>
                                <div class="invalid-feedback">
                                    Ingrese el precio!
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="validationServer06" class="form-label">IVA?</label>
                                <div class="input_switch">
                                    <input type="radio" name="plan_price_iva" id="plan_price_iva1" value="user" checked>
                                    <label for="plan_price_iva1">SI</label>
                                    <input type="radio" name="plan_price_iva" id="plan_price_iva2" value="doctor">
                                    <label for="plan_price_iva2">NO</label>
                                </div>
                                <div class="invalid-feedback">
                                    Selecciona una opcion!
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="validationServer07" class="form-label">Velocidad</label>
                                <input type="text" class="form-control" id="validationServer07" placeholder="20 MEGAS" name="plan_speed_value" required>
                                <div class="invalid-feedback">
                                    Ingrese la velocidad!
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="validationServer08" class="form-label">Dipositivos</label>
                                <input type="text" class="form-control" id="validationServer08" placeholder="10" name="plan_speed_devices" required>
                                <div class="invalid-feedback">
                                    Ingrese el numero de dispositivos!
                                </div>
                            </div>



                        </div>
                        <!-- form | end -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- form | end -->

        <!-- confirm | ini -->
        <div class="modal fade" id="element-modalconfirm" tabindex="-1" aria-labelledby="element-modalconfirmLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="element-modalconfirmLabel">Eliminar registro</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ¿Estas seguro de eliminar este registro?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-primary" onclick="crudFunction.delete()">Eliminar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- confirm | end -->
        <!-- MODAL | END -->
    </main>
</body>
<foot>
    <?php include('./src/templates/panel.component/foot.php') ?>
    <script src="<?= $DATA['http_domain'] ?>public/js.panel/planes.js"></script>
</foot>

</html>