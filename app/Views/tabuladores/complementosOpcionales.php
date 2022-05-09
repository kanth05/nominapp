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
                                <div class="col-xl-12 col-lg-12 col-md-12 mb-5">
                                    <div class="info">
                                        <h6 class="">Complementos opcionales</h6>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 mt-md-0 mt-4">
                                                        <div class="form mx-auto">
                                                            <div class="row">
                                                                <div class="col-sm-12 col-md-12">
                                                                    <select name="bonoEspecial" id="bonoEspecial" class="custom-select">
                                                                        <option value=""> - </option>
                                                                        <option <?= ($tipoBono == 'CE') ? "selected" : "" ?> value="CE">Complemento por encargaduria</option>
                                                                        <option <?= ($tipoBono == 'BP') ? "selected" : "" ?> value="BP">Bono proteico</option>
                                                                        <option <?= ($tipoBono == 'CS') ? "selected" : "" ?> value="CS">Complemento de sueldo</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="row row-table-ce <?= ($tipoBono != 'CE') ? "d-none" : "d-block" ?>">
                                                                <div class="col-sm-12 col-md-12">
                                                                    <div class="widget-content widget-content-area br-6">
                                                                        <h6 class="">Complementos por encargaduria</h6>
                                                                        <div class="table-responsive mb-4 mt-4">
                                                                            <table id="table-ce" class="table table-hover" style="width:100%">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th>Cedula</th>
                                                                                        <th>Nombre</th>
                                                                                        <th>Monto</th>
                                                                                        <th>Accion</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody id="tbody-ce">
                                                                                    <?php foreach( $personasCe as $personaCe): ?>
                                                                                        <tr>
                                                                                            <td><?= $personaCe['cedula']?></td>
                                                                                            <td><?= $personaCe['nombres'].' '.$personaCe['apellidos']?></td>
                                                                                            <td><input type="text" id="<?= $personaCe['idPersona'].'-CE' ?>" class="form-control" name="<?= $personaCe['idPersona'].'-CE' ?>" value="<?= $personaCe['encargaduria']?>"></td>
                                                                                            <td class="text-center">
                                                                                                <a href="<?= base_url().route_to('borrarComplemento', $personaCe['idPersona'].'-CE')?>" class="btn btn-dark btn-sm">Eliminar</a>
                                                                                            </td>
                                                                                        </tr>
                                                                                    <?php endforeach;?>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row row-table-bp <?= ($tipoBono != 'BP') ? "d-none" : "d-block" ?>">
                                                                <div class="col-sm-12 col-md-12">
                                                                    <div class="widget-content widget-content-area br-6">
                                                                        <h6 class="">Bono proteico</h6>
                                                                        <div class="table-responsive mb-4 mt-4">
                                                                            <table id="table-bp" class="table table-hover" style="width:100%">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th>Cedula</th>
                                                                                        <th>Nombre</th>
                                                                                        <th>Monto</th>
                                                                                        <th>Accion</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody id="tbody-bp">
                                                                                <?php foreach( $personasBp as $personaBp): ?>
                                                                                        <tr>
                                                                                            <td><?= $personaBp['cedula']?></td>
                                                                                            <td><?= $personaBp['nombres'].' '.$personaBp['apellidos']?></td>
                                                                                            <td><input type="text" id="<?= $personaBp['idPersona'].'-BP'?>" class="form-control" name="<?= $personaBp['idPersona'].'-BP'?>" value="<?= $personaBp['bonoProteico']?>"></td>
                                                                                            <td class="text-center">
                                                                                                <a href="<?= base_url().route_to('borrarComplemento', $personaBp['idPersona'].'-BP')?>" class="btn btn-dark btn-sm">Eliminar</a>
                                                                                            </td>
                                                                                        </tr>
                                                                                    <?php endforeach;?>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row row-table-cs <?= ($tipoBono != 'CS') ? "d-none" : "d-block" ?>">
                                                                <div class="col-sm-12 col-md-12">
                                                                    <div class="widget-content widget-content-area br-6">
                                                                        <h6 class="">Complemento de sueldo</h6>
                                                                        <div class="table-responsive mb-4 mt-4">
                                                                            <table id="table-cs" class="table table-hover" style="width:100%">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th>Cedula</th>
                                                                                        <th>Nombre</th>
                                                                                        <th>Monto</th>
                                                                                        <th>Accion</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody id="tbody-cs">
                                                                                <?php foreach( $personasCs as $personaCs): ?>
                                                                                        <tr>
                                                                                            <td><?= $personaCs['cedula']?></td>
                                                                                            <td><?= $personaCs['nombres'].' '.$personaCs['apellidos']?></td>
                                                                                            <td><input type="text" id="<?= $personaCs['idPersona'].'-CS' ?>" class="form-control" name="<?= $personaCs['idPersona'].'-CS' ?>" value="<?= $personaCs['complementoSueldo']?>"></td>
                                                                                            <td class="text-center">
                                                                                                <a href="<?= base_url().route_to('borrarComplemento', $personaCs['idPersona'].'-CS')?>" class="btn btn-dark btn-sm">Eliminar</a>
                                                                                            </td>
                                                                                        </tr>
                                                                                    <?php endforeach;?>
                                                                                </tbody>
                                                                            </table>
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

            <div class="row">
                <div class="col layout-spacing"></div>
            </div>

            <div class="account-settings-footer bg-light">
                
                <div class="as-footer-container">

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
    </div>
    <!--  END CONTENT AREA  -->
<?= $this->endSection() ?>

<?= $this->section('pluginsBottom') ?>

    <script src= "<?=base_url();?>/public/assets/js/complementos/complementosOpcionales.js" type="text/javascript"></script>
    
<?= $this->endSection() ?>