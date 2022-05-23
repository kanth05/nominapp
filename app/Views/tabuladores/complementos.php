<?= $this->extend('template/template'); ?>

<?= $this->section('pluginsTop') ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <!--  BEGIN CONTENT AREA  -->
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
                                        <h6 class="">Complementos salariales</h6>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 mt-md-0 mt-4">
                                                        <div class="form mx-auto">
                                                            <div class="row">
                                                                <div class="col-sm-3">
                                                                    <div class="form-group">
                                                                        <label for="sueldominimo">Sueldo mínimo</label>
                                                                        <input type="number" step="any" min="0" class="form-control mb-4" id="sueldominimo" name="sueldominimo" placeholder="Sueldo mínimo" value="<?= ( isset($complemento) ) ? $complemento['sueldominimo'] : 0 ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="form-group">
                                                                        <label for="cestatickets">Cesta tickets</label>
                                                                        <input type="number" step="any" min="0" class="form-control mb-4" id="cestatickets" name="cestatickets" placeholder="Cesta tickets" value="<?= ( isset($complemento) ) ? $complemento['cestatickets'] : 0 ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="form-group">
                                                                        <label for="diaslaborales">Días laborales</label>
                                                                        <input type="number" step="any" min="0" class="form-control mb-4" id="diaslaborales" name="diaslaborales" placeholder="Días laborales" value="<?= ( isset($complemento) ) ? $complemento['diaslaborales'] : 0 ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="form-group">
                                                                        <label for="primashijos">Prima por hijo</label>
                                                                        <input type="number" step="any" min="0" class="form-control mb-4" id="primashijos" name="primashijos" placeholder="Prima por hijo" value="<?= ( isset($complemento) ) ? $complemento['primashijos'] : 0 ?>">
                                                                    </div>
                                                                </div>
                                                                
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-3">
                                                                    <div class="form-group">
                                                                        <label for="primadiscapacidad">Prima por discapacidad</label>
                                                                        <input type="number" step="any" min="0" class="form-control mb-4" id="primadiscapacidad" name="primadiscapacidad" placeholder="Prima por discapacidad" value="<?= ( isset($complemento) ) ? $complemento['primadiscapacidad'] : 0 ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="form-group">
                                                                        <label for="primabeca">Prima por beca escolar</label>
                                                                        <input type="number" step="any" min="0" class="form-control mb-4" id="primabeca" name="primabeca" placeholder="Prima por beca escolar" value="<?= ( isset($complemento) ) ? $complemento['primabeca'] : 0 ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="complementoespecial">Complemento especial de protección y estabilización económica (%)</label>
                                                                        <input type="number" step="any" min="0" class="form-control mb-4" id="complementoespecial" name="complementoespecial" placeholder="Complemento especial de protección y estabilización económica" value="<?= ( isset($complemento) ) ? $complemento['complementoespecial'] : 0 ?>">
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
            </div>

            <div class="row">
                <div class="col layout-spacing"></div>
            </div>

            <div class="account-settings-footer bg-light">
                
                <div class="as-footer-container">

                    <div class="as-footer-container">
                        <button id="confirmacion" class="btn btn-success warning confirm" type="submit" form="general-info">Guardar</button>
                    </div>

                </div>

            </div>
        </div>   
    </div>
    <!--  END CONTENT AREA  -->
<?= $this->endSection() ?>

<?= $this->section('pluginsBottom') ?>

    <script src= "<?=base_url();?>/public/assets/js/complementos/complementos.js" type="text/javascript"></script>
    
<?= $this->endSection() ?>