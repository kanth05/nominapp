<?= $this->extend('template/template'); ?>

<?= $this->section('pluginsTop') ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="page-header">
                <div class="page-title">
                    <h3>Tabulador Personal Obrero</h3>
                </div>
            </div>
            
            <div class="row layout-top-spacing" id="cancel-row">
                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-6">
                        <div class="table-responsive mt-4 mb-4">
                            <form id="prima-obrero">
                                <table id="tabulador" class="table table-hover non-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Grado</th>
                                            <th>Cargo</th>
                                            <th>Mínimo</th>
                                            <th>Máximo</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($primaOb as $key => $value): ?>
                                            <tr>
                                                <td><?= intval($key)+1 ?></td>
                                                <td>Obrero <?= intval($key)+1?></td>
                                                <td><input type="text" id="min<?= intval($key)+1?>" class="form-control" name="min<?= intval($key)+1?>" value="<?= $primaOb[$key]['mtomin']?>"></td>
                                                <td><input type="text" id="max<?= intval($key)+1?>" class="form-control" name="max<?= intval($key)+1?>" value="<?= $primaOb[$key]['mtomax']?>"></td>
                                            </tr>
                                        <?php endforeach ?>
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
                    <button id="confirmacion" class="btn btn-success warning confirm" type="submit" form="prima-obrero">Guardar</button>
                </div>
            </div>
        </div>
        
    </div>
<?= $this->endSection() ?>

<?= $this->section('pluginsBottom') ?>

    <script src= "<?=base_url();?>/public/assets/js/complementos/primaOb.js" type="text/javascript"></script>

<?= $this->endSection() ?>