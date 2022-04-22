<?= $this->extend('template/template'); ?>

<?= $this->section('pluginsTop') ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="page-header">
                <div class="page-title">
                    <h3>Prima por antiguedad</h3>
                </div>
            </div>
            
            <form id="prima-profesion">
                <div class="row layout-top-spacing" id="cancel-row">
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                            <div class="table-responsive mt-4 mb-4">
                                <table id="tabulador" class="table table-hover non-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>N°</th>
                                            <th>Grado</th>
                                            <th>% Prima</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1°</td>
                                            <td>Educación básica</td>
                                            <td><input type="text" id="educacionBasica" class="form-control" name="educacionBasica" value="<?= isset($primaProf) ? $primaProf['educacionBasica'] : '0,00'?>"></td>
                                        </tr>
                                        <tr>
                                            <td>2°</td>
                                            <td>Bachiller</td>
                                            <td><input type="text" id="bachillerato" class="form-control" name="bachillerato" value="<?= isset($primaProf) ? $primaProf['bachillerato'] : '0,00'?>"></td>
                                        </tr>
                                        <tr>
                                            <td>3°</td>
                                            <td>Técnico</td>
                                            <td><input type="text" id="tecnico" class="form-control" name="tecnico" value="<?= isset($primaProf) ? $primaProf['tecnico'] : '0,00'?>"></td>
                                        </tr>
                                        <tr>
                                            <td>4°</td>
                                            <td>Pregrado</td>
                                            <td><input type="text" id="pregrado" class="form-control" name="pregrado" value="<?= isset($primaProf) ? $primaProf['pregrado'] : '0,00'?>"></td>
                                        </tr>
                                        <tr>
                                            <td>5°</td>
                                            <td>Especialista</td>
                                            <td><input type="text" id="especialidad" class="form-control" name="especialidad" value="<?= isset($primaProf) ? $primaProf['especialidad'] : '0,00'?>"></td>
                                        </tr>
                                        <tr>
                                            <td>6°</td>
                                            <td>Postgrado</td>
                                            <td><input type="text" id="postgrado" class="form-control" name="postgrado" value="<?= isset($primaProf) ? $primaProf['postgrado'] : '0,00'?>"></td>
                                        </tr>
                                        <tr>
                                            <td>7°</td>
                                            <td>Doctorado</td>
                                            <td><input type="text" id="doctorado" class="form-control" name="doctorado" value="<?= isset($primaProf) ? $primaProf['doctorado'] : '0,00'?>"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </form>


            <div class="account-settings-footer bg-light">   
                <div class="as-footer-container">
                    <button id="confirmacion" class="btn btn-success warning confirm" type="submit" form="prima-profesion">Guardar</button>
                </div>
            </div>

        </div>
    </div>

<?= $this->endSection() ?>

<?= $this->section('pluginsBottom') ?>

    <script src= "<?=base_url();?>/public/assets/js/complementos/primaProf.js" type="text/javascript"></script>

<?= $this->endSection() ?>