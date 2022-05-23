<?= $this->extend('template/template'); ?>

<?= $this->section('pluginsTop'); ?>
<?= $this->endSection() ?>

<?= $this->section('content'); ?>
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="page-header">
                <div class="page-title">
                    <h3>Histórico de nómina</h3>
                </div>
            </div>
            
            <div class="row layout-top-spacing" id="cancel-row">

                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing ">
                    <div class="row bg-light mx-1 p-4 rounded">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="dob-input text-dark" for="fecha">Fecha de prueba</label>
                                <input type="date" name="fecha" id="fecha" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-6">
                        <div class="table-responsive mb-4 mt-4">
                            <table id="html5-extension" class="table table-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Id Nómina</th>
                                        <th>Año</th>
                                        <th>Mes</th>
                                        <th>Quincena</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach( $nominas as $nomina):?>
                                        <tr>
                                            <td><?= $nomina['idNomina'] ?></td>
                                            <td><?= $nomina['anio'] ?></td>
                                            <td><?= $nomina['mes'] ?></td>
                                            <td><?= $nomina['numQuincena'] ?></td>
                                            <td>
                                                <div class="btn-group d-flex">
                                                    <a href="<?=base_url().route_to('nominaDetal', $nomina['idNomina']); ?>" class="btn btn-dark btn-sm">Detalle</a>
                                                    <!-- <a href="<?= null//base_url().route_to('nominaTotal', $nomina['idNomina']); ?>" class="btn btn-dark btn-sm">Total</a> -->
                                                    <?php  $session = \Config\Services::session(); ?>
                                                    <?php if($session->codRol == 'JEF'): ?>
                                                        <a href="<?=base_url().route_to('borrarNomina', $nomina['idNomina']); ?>" class="btn btn-dark btn-sm">Eliminar</a>
                                                    <?php endif; ?>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
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

                            <button id="nuevaBtn" class="btn btn-success">Nuevo</button>

                        </div>

                    </div>
                </div>
            </div>

        </div>
        <!-- <div class="footer-wrapper">
            <div class="footer-section f-section-1">
                <p class="">Copyright © 2020 <a target="_blank" href="https://designreset.com">DesignReset</a>, All rights reserved.</p>
            </div>
            <div class="footer-section f-section-2">
                <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></p>
            </div>
        </div> -->
    </div>
<?= $this->endSection() ?>

<?= $this->section('pluginsBottom') ?>

    <script src= "<?=base_url();?>/public/assets/js/nomina/nominas.js" type="text/javascript"></script>
    
<?= $this->endSection() ?>