<?= $this->extend('template/template'); ?>

<?= $this->section('pluginsTop') ?>

    <link rel="stylesheet" type="text/css" href="<?=base_url();?>/public/plugins/table/datatable/datatables.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>/public/plugins/table/datatable/dt-global_style.css">

<?= $this->endSection() ?>

<?= $this->section('content') ?>

    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="page-header">
                <div class="page-title">
                    <h3>Usuarios</h3>
                    <input hidden id="alert" type="text" value="<?= $alert?>">
                </div>
            </div>
            
            <form id="general-info" class="section general-info">
                <div class="row layout-top-spacing" id="cancel-row">
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                            <div class="table-responsive mb-4 mt-4">
                                <table id="html5-extension" class="table table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Id Usuario</th>
                                            <th>Cedula</th>
                                            <th>Rol</th>
                                            <th>Estado</th>
                                            <th>Acción</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        <?php foreach($usuarios as $usuario): ?>
                                            <tr>
                                                <td><?= $usuario['idUsuario'] ?></td>
                                                <td><?= $usuario['cedula'] ?></td>
                                                <?php 
                                                    switch ($usuario['codRol']) {
                                                        case 'ANF':
                                                            $rol = 'Analista de ficha';
                                                            break;
                                                        case 'ANN':
                                                            $rol = 'Analista de nómina';
                                                            break;
                                                        case 'ANI':
                                                            $rol = 'Analista integral';
                                                            break;                                                        
                                                        default:
                                                            $rol = 'Jefe de departamento';
                                                            break;
                                                    }
                                                ?>
                                                <td><?= $rol ?></td>
                                                <td>
                                                    <select class="custom-select" name="sel-<?=$usuario['idUsuario']?>" id="sel-<?=$usuario['idUsuario']?>">
                                                        <option <?= ( $usuario['status'] == 'ACT' ) ? 'selected' : null ?> value="1"><strong class="text-success text-bold">Activo</strong></option>
                                                        <option <?= ( $usuario['status'] == 'SUS' ) ? 'selected' : null ?> value="2"><strong class="text-danger text-bold">Suspendido</strong></option>
                                                    </select>
                                                </td>
                                                <td class="text-center">
                                                    <a href="<?= base_url().route_to('restablecerContrasena', $usuario['idUsuario'] )?>" class="btn btn-dark btn-sm">Restablecer contraseña</a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?> 
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="row">
                <div class="col layout-spacing"></div>
            </div>
            <div class="row">
                <div class="col layout-spacing"></div>
            </div>
            <div class="row">
                <div class="col layout-spacing"></div>
            </div>

            <div class="account-settings-footer bg-light">
                
                <div class="as-footer-container">
                    <div class="row">
                        <div class="col-6">
                            <button id="confirmacion" class="btn btn-success warning confirm" type="submit" form="general-info">Guardar</button>
                        </div>
                        <div class="col-6">
                            <button id="nuevo" class="btn btn-success warning confirm" >Nuevo</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

<?= $this->endSection() ?>

<?= $this->section('pluginsBottom') ?>

    <script src= "<?=base_url();?>/public/assets/js/usuarios/usuarios.js" type="text/javascript"></script>

<?= $this->endSection() ?>