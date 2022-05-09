<?= $this->extend('template/template'); ?>

<?= $this->section('pluginsTop') ?>

    <link rel="stylesheet" type="text/css" href="<?=base_url();?>/public/plugins/dropify/dropify.min.css">
    <link href="<?=base_url();?>/public/assets/css/users/account-setting.css" rel="stylesheet" type="text/css" />

<?= $this->endSection() ?>

<?= $this->section('content') ?>

    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <!-- CONTENT AREA -->
            <div class="account-settings-container layout-top-spacing">

                <div class="account-content">
                    <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">
                        <form id="general-info" class="section general-info">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                    <div class="info">
                                        <div class="row mx-5 my-3 d-none error-div">
                                        </div>
                                        <h6>Información del usuario</h6>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                        <div class="form mx-auto">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <h6>Id Empleado: <span><?= $usuario[0]['idUsuario']; ?></span></h6>
                                                                    <input hidden type="number" id="idUsuario" name="idUsuario" value="<?=  $usuario[0]['idUsuario'];?>">
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <h6>Estado: <span class=" <?= ( $usuario[0]['status'] == 'ACT' ) ? 'text-success' : 'text-danger'?>"><?= $usuario[0]['status']; ?></span></h6>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <div class="form-group">
                                                                        <label for="contrasena">Contraseña actual</label>
                                                                        <input type="text" class="form-control mb-4" id="contrasena" name="contrasena" placeholder="Contraseña" value="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <div class="form-group">
                                                                        <label for="nuevaContrasena">Nueva contraseña</label>
                                                                        <input type="text" class="form-control mb-4" id="nuevaContrasena" name="nuevaContrasena" placeholder="Nueva contraseña" value="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <div class="form-group">
                                                                        <label for="confirmarContrasena">Confirmar contraseña</label>
                                                                        <input type="text" class="form-control mb-4" id="confirmarContrasena" name="confirmarContrasena" placeholder="Nombres" value="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                 </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="row">
                    <div class="col layout-spacing"></div>
                </div>

                <div class="account-settings-footer bg-light">
                    
                    <div class="as-footer-container">

                        <div class="blockui-growl-message">
                            <i class="flaticon-double-check"></i>&nbsp; 
                        </div>
                        <button id="confirmar" class="btn btn-success" type="submit" form="general-info"><?= !empty($cedula) ? 'Actualizar' : 'Guardar cambios'; ?></button>

                    </div>

                </div>
            </div>       
        </div>

<?= $this->endSection() ?>

<?= $this->section('pluginsBottom') ?>

    <script src= "<?=base_url();?>/public/assets/js/usuarios/usuario.js" type="text/javascript"></script>
    
<?= $this->endSection() ?>

