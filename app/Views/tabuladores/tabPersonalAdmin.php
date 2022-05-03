<?= $this->extend('template/template'); ?>

<?= $this->section('pluginsTop') ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="page-header">
                <div class="page-title">
                    <h3>Tabulador Personal Administrador</h3>
                </div>
            </div>
            
            <div class="row layout-top-spacing" id="cancel-row">
                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-6">
                        <form id="prima-admin">
                            <div class="table-responsive mt-4 mb-4">
                                <table id="tabulador" class="table table-hover non-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Cargo</th>
                                            <th>Descripción</th>
                                            <th>I (0 a 4 años)</th>
                                            <th>II (5 a 9 años)</th>
                                            <th>III (10 a 14 años)</th>
                                            <th>IV (15 a 19 años)</th>
                                            <th>V (20 a 24 años)</th>
                                            <th>VI (25 a 29 años)</th>
                                            <th>VII (30 o más)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($cargoDen as $i => $cargo): ?>
                                            <tr>
                                                <td><?= $cargo['codCargoDen'] ?></td>
                                                <td><?= $cargo['descripcion'] ?></td>
                                                <?php $x = $cargo['codCargoDen']; $arrCargoPrima = array_filter( $primaAdmin, function( $arr ) use ($x){ return ( $arr['codCargoDen'] == $x ); }); ?>
                                                <?php foreach ($arrCargoPrima as $j => $prima): ?>
                                                    <td><input type="text" id="id-<?= $prima['idTabulador'] ?>" class="form-control" name="id-<?= $prima['idTabulador'] ?>" value="<?= $prima['mtomin'] ?>"></td>
                                                <?php endforeach;?>
                                            </tr>
                                        <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </form>
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
                    <button type="submit" id="confirmacion" class="btn btn-success warning confirm" form="prima-admin">Guardar</button>
                </div>
            </div>

        </div>

    </div>
<?= $this->endSection() ?>

<?= $this->section('pluginsBottom') ?>

    <script src= "<?=base_url();?>/public/assets/js/complementos/primaAdmin.js" type="text/javascript"></script>

<?= $this->endSection() ?>