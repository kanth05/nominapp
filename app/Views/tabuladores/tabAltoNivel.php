<?= $this->extend('template/template'); ?>

<?= $this->section('pluginsTop') ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="page-header">
                <div class="page-title">
                    <h3>Tabulador Alto Nivel</h3>
                </div>
            </div>
            
            <div class="row layout-top-spacing" id="cancel-row">
                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-6">
                        <div class="table-responsive mt-4 mb-4">
                            <form id="prima-alto">
                                <table id="tabulador" class="table table-hover non-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Cargo administración pública</th>
                                            <th>Cargo F.M.A</th>
                                            <th>Monto Bs.</th>
                                            <th>Anteriores</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach( $primaAdmin as $key => $prima): ?>
                                            <tr>
                                                <td><?= $prima['cargoPublic'] ?></td>
                                                <td><?= $prima['descripcion'] ?></td>
                                                <td><input type="text" id="mtomin-<?= $prima['idTabulador']?>" class="form-control" name="mtomin-<?= $prima['idTabulador']?>" value="<?= $prima['mtomin'] ?>"></td>
                                                <td><input type="text" id="mtomax-<?= $prima['idTabulador']?>" class="form-control" name="mtomax-<?= $prima['idTabulador']?>" value="<?= $prima['mtomax'] ?>"></td>
                                            </tr>
                                        <?php endforeach;?>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col layout-spacing"></div>
            </div>

            <div class="row">
                <div class="col layout-spacing"></div>
            </div>

            <div class="account-settings-footer bg-light">   
                <div class="as-footer-container">
                    <button id="confirmacion" type="submit" class="btn btn-success warning confirm" form="prima-alto">Guardar</button>
                </div>
            </div>

        </div>
        
    </div>
<?= $this->endSection() ?>

<?= $this->section('pluginsBottom') ?>

    <script src= "<?=base_url();?>/public/assets/js/complementos/primaAlto.js" type="text/javascript"></script>

<?= $this->endSection() ?>