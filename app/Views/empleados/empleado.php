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
                                        <h6 class="">Información básica</h6>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-xl-2 col-lg-12 col-md-4 text-center">
                                                        <div class="row">
                                                            <div class="upload mt-4 pl-md-4 ml-3">
                                                                <input type="file" id="input-file-max-fs" class="dropify" data-default-file="<?= base_url()?>/public/assets/img/200x200.jpg" data-max-file-size="2M" />
                                                                <p class="mt-2"><i class="flaticon-cloud-upload mr-1"></i> Subir foto</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xl-12 col-lg-12 col-md-4 ml-3">
                                                                <div class="form-group">
                                                                    <label class="dob-input" for="status">Status</label>
                                                                    <select class="custom-select" id="status" name="status">
                                                                        <option value="1" <?= ($status == 'ACT' || !isset($status) ) ? 'selected' : null ?>>Activo</option>
                                                                        <option value="2" <?= ($status == 'SUS' ) ? 'selected' : null ?>>Suspendido</option>
                                                                        <option value="3" <?= ($status == 'EGR' ) ? 'selected' : null ?>>Egresado</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                        <div class="form mx-auto">
                                                            <div class="row">
                                                                <div class="col-sm-3">
                                                                    <div class="form-group">
                                                                        <label for="cedula">Cédula</label>
                                                                        <input type="number" class="form-control mb-4" id="cedula" name="cedula" placeholder="Cédula" value="<?= isset($cedula) ? $cedula : null;?>" min="0" pattern="^[0-9]+">
                                                                        <input hidden type="number" id="cedulaBD" name="cedulaBD" value="<?= isset($cedula) ? $cedula : null;?>">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <div class="form-group">
                                                                        <label for="apellidos">Apellidos</label>
                                                                        <input type="text" class="form-control mb-4" id="apellidos" name="apellidos" placeholder="Apellidos" value="<?= isset($apellidos) ? $apellidos : null;?>">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-5">
                                                                    <div class="form-group">
                                                                        <label for="nombres">Nombres</label>
                                                                        <input type="text" class="form-control mb-4" id="nombres" name="nombres" placeholder="Nombres" value="<?= isset($nombres) ? $nombres : null;?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <div class="form-group">
                                                                        <label class="dob-input" for="fecNac">Fecha de nacimiento</label>
                                                                        <input type="date" name="fecNac" id="fecNac" class="form-control" value="<?= isset($fecNac) ? $fecNac : null;?>">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-8">
                                                                    <div class="form-group">
                                                                        <label for="lugarNac">Lugar de nacimiento</label>
                                                                        <input type="text" class="form-control mb-4" name="lugarNac" id="lugarNac" placeholder="Dirección de domicilio" value="<?= isset($lugarNac) ? $lugarNac : null;?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-3">
                                                                    <div class="form-group">
                                                                        <label class="dob-input" for="sexo">Sexo</label>
                                                                        <select class="custom-select" name="sexo" id="sexo">
                                                                            <option value= '1' <?= ($sexo == 'M' || !isset($sexo) ) ? 'selected' : null ?> >Masculino</option>
                                                                            <option value= '2' <?= ($tipoCuenta == 'F') ? 'selected' : null ?>>Femenino</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="form-group">
                                                                        <label class="dob-input">Tipo de sangre</label>
                                                                        <select class="custom-select" name="tipoSangre" id="tipoSangre">
                                                                            <option value = '' <?= ($tipoSangre == '' || !isset($tipoSangre) ) ? 'selected' : null ?> >No se conoce</option>
                                                                            <option value ="A+" <?= ($tipoSangre == 'A+' ) ? 'selected' : null ?> >A+</option>
                                                                            <option value ="A-" <?= ($tipoSangre == 'A-' ) ? 'selected' : null ?> >A-</option>
                                                                            <option value ="B+" <?= ($tipoSangre == 'B+' ) ? 'selected' : null ?> >B+</option>
                                                                            <option value ="B-" <?= ($tipoSangre == 'B-' ) ? 'selected' : null ?> >B-</option>
                                                                            <option value ="AB+" <?= ($tipoSangre == 'AB+' ) ? 'selected' : null ?> >AB+</option>
                                                                            <option value ="AB-" <?= ($tipoSangre == 'AB-' ) ? 'selected' : null ?> >AB-</option>
                                                                            <option value ="O+" <?= ($tipoSangre == 'O+' ) ? 'selected' : null ?> >O+</option>
                                                                            <option value ="O-" <?= ($tipoSangre == 'O-' ) ? 'selected' : null ?> >O-</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label class="dob-input" for="edoCivil">Estado civil</label>
                                                                        <select class="custom-select" name="edoCivil" id="edoCivil">
                                                                        <option value = '' selected >No se conoce</option>
                                                                            <?php foreach ($edoCivilSel as $valor):?>
                                                                                <?php if( $valor['codEdoCivil'] == $edoCivil):?>
                                                                                    <option selected value= '<?= $valor['codEdoCivil'];?>'> <?= $valor['descripcion'];?> </option>
                                                                                <?php else: ?>
                                                                                    <option value= '<?= $valor['codEdoCivil'];?>'> <?= $valor['descripcion'];?> </option>
                                                                                <?php endif; ?>
                                                                            <?php endforeach;?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                    <div class="info">
                                        <h6 class="">Datos de contacto</h6>
                                        <div class="row">
                                            <div class="col-lg-12 mx-auto">
                                                <div class="row">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 mt-md-0 mt-4">
                                                        <div class="form mx-auto">
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <div class="form-group">
                                                                        <label for="telefLocal">Teléfono local</label>
                                                                        <input type="text" class="form-control mb-4" id="telefLocal" name="telefLocal" placeholder="Teléfono Local" value="<?= isset($telefLocal) ? $telefLocal : null;?>">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <div class="form-group">
                                                                        <label for="telefCel">Teléfono celular</label>
                                                                        <input type="text" class="form-control mb-4" id="telefCel" name="telefCel" placeholder="Teléfono Celular" value="<?= isset($telefCel) ? $telefCel : null;?>">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <div class="form-group">
                                                                        <label for="email">Correo electrónico</label>
                                                                        <input type="email" class="form-control mb-4" id="email" name="email" placeholder="correo@correo.com" value="<?= isset($email) ? $email : null;?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row align-items-center">
                                                                <div class="col-sm-5">
                                                                    <div class="form-group">
                                                                        <label for="direccion">Dirección de domicilio</label>
                                                                        <textarea class="form-control" id="direccion" name="direccion" placeholder="Dirección de domicilio" rows="4"><?= isset($direccion) ? $direccion : null;?></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <div class="form-group">
                                                                        <label for="sufragio">Lugar en el que realiza sufragio</label>
                                                                        <textarea class="form-control" id="sufragio" name="sufragio" placeholder="Dirección de sufragio" rows="4"><?= isset($sufragio) ? $sufragio : null;?></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="form-group">
                                                                        <label for="residencia">Estado en el que reside</label>
                                                                        <select class="custom-select" name="residencia" id="residencia">
                                                                            <option value = '' selected >No se conoce</option>
                                                                            <?php foreach ($estadosSel as $valor):?>
                                                                                <?php if( $valor['codEstado'] == $codEstado):?>
                                                                                    <option selected value= '<?= $valor['codEstado'];?>'> <?= $valor['descripcion'];?> </option>
                                                                                <?php else: ?>
                                                                                    <option value= '<?= $valor['codEstado'];?>'> <?= $valor['descripcion'];?> </option>
                                                                                <?php endif; ?>
                                                                            <?php endforeach;?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="emerNombre">Nombre de alguna persona en caso de emergencia</label>
                                                                        <input type="text" class="form-control mb-4" id="emerNombre" name="emerNombre" placeholder="Ejemplo" value="<?= isset($emerNombre) ? $emerNombre : null;?>">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="telefEmer">Teléfono de contacto</label>
                                                                        <input type="text" class="form-control mb-4" id="telefEmer" name="telefEmer" placeholder="Teléfono Celular" value="<?= isset($telefEmer) ? $telefEmer : null;?>">
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
                                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                    <div class="info">
                                        <h6 class="">Datos profesionales</h6>
                                        <div class="row">
                                            <div class="col-lg-12 mx-auto">
                                                <div class="row">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 mt-md-0 mt-4">
                                                        <div class="form mx-auto">
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <div class="form-group">
                                                                        <label class="dob-input" for="nlvAcademico">Nivel académico</label>
                                                                        <select class="custom-select" name="nlvAcademico" id="nlvAcademico">
                                                                            <option value = '' selected >No se conoce</option>
                                                                            <?php foreach ($nvlAcademicoSel as $valor):?>
                                                                                <?php if( $valor['codNivelAcademico'] == $nlvAcademico):?>
                                                                                    <option selected value= '<?= $valor['codNivelAcademico'];?>'> <?= $valor['descripcion'];?> </option>
                                                                                <?php else: ?>
                                                                                    <option value= '<?= $valor['codNivelAcademico'];?>'> <?= $valor['descripcion'];?> </option>
                                                                                <?php endif; ?>
                                                                            <?php endforeach;?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-8">
                                                                    <div class="form-group">
                                                                        <label for="titulo">Título obtenido</label>
                                                                        <input type="text" class="form-control mb-4" id="titulo" name="titulo" placeholder="Título obtenido" value="<?= isset($titulo) ? $titulo : null;?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row align-items-center">
                                                            <div class="col-sm-3">
                                                                    <div class="form-group">
                                                                        <label for="aniosapn">Años de antiguedad APN</label>
                                                                        <input type="number" class="form-control mb-4" id="aniosapn" name="aniosapn" placeholder="0" value="<?= isset($aniosapn) ? $aniosapn : null;?>" min="0" pattern="^[0-9]+">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-9">
                                                                    <div class="form-group">
                                                                        <label for="ultTrabajo">Nombre de la última institución pública en la que trabajó</label>
                                                                        <input type="text" class="form-control mb-4" id="ultTrabajo" name="ultTrabajo" placeholder="Nombre de la última institución pública en la que trabajó" value="<?= isset($ultTrabajo) ? $ultTrabajo : null;?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-3">
                                                                    <div class="form-group">
                                                                        <label class="dob-input" for="fecIni">Fecha de ingreso</label>
                                                                        <input type="date" name="fecIni" id="fecIni" class="form-control" value="<?= isset($fecIni) ? $fecIni : null;?>">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <label class="dob-input" for="departamento">Departamento asignado</label>
                                                                    <select class="custom-select" name="departamento" id="departamento">
                                                                        <option value = '' selected >No se conoce</option>
                                                                        <?php foreach ($departamentoSel as $valor):?>
                                                                            <?php if( $valor['codDepartamento'] == $departamento):?>
                                                                                <option selected value= '<?= $valor['codDepartamento'];?>'> <?= $valor['descripcion'];?> </option>
                                                                            <?php else: ?>
                                                                                <option value= '<?= $valor['codDepartamento'];?>'> <?= $valor['descripcion'];?> </option>
                                                                            <?php endif; ?>
                                                                        <?php endforeach;?>
                                                                    </select>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="form-group">
                                                                        <label class="dob-input" for="cargo">Cargo</label>
                                                                        <select class="custom-select" name="cargo" id="cargo">
                                                                            <option value = '' selected >No se conoce</option>
                                                                            <?php foreach ($cargoSel as $valor):?>
                                                                                <?php if( $valor['codCargo'] == $cargo):?>
                                                                                    <option selected value= '<?= $valor['codCargo'];?>'> <?= $valor['descripcion'];?> </option>
                                                                                <?php else: ?>
                                                                                    <option value= '<?= $valor['codCargo'];?>'> <?= $valor['descripcion'];?> </option>
                                                                                <?php endif; ?>
                                                                            <?php endforeach;?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <label class="dob-input" for="cargoDen">Denominación de cargo</label>
                                                                    <select class="form-control" name="cargoDen" id="cargoDen">
                                                                        <option value = '' selected >No se conoce</option>
                                                                        <?php foreach ($cargoDenSel as $valor):?>
                                                                            <?php if( $valor['codCargoDen'] == $cargoDen):?>
                                                                                <option selected value= '<?= $valor['codCargoDen'];?>'> <?= $valor['descripcion'];?> </option>
                                                                            <?php else: ?>
                                                                                <option value= '<?= $valor['codCargoDen'];?>'> <?= $valor['descripcion'];?> </option>
                                                                            <?php endif; ?>
                                                                        <?php endforeach;?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                    <div class="info">
                                        <h6 class="">Datos bancarios</h6>
                                        <div class="row">
                                            <div class="col-lg-12 mx-auto">
                                                <div class="row">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 mt-md-0 mt-4">
                                                        <div class="form mx-auto">
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <div class="form-group">
                                                                        <label class="dob-input" for="banco">Institución Bancaria</label>
                                                                        <select class="custom-select" name="banco" id="banco">
                                                                            <option value = '' selected >No se conoce</option>
                                                                            <?php foreach ($bancoSel as $valor):?>
                                                                                <?php if( $valor['codInstBanca'] == $banco):?>
                                                                                    <option selected value= '<?= $valor['codInstBanca'];?>'> <?= $valor['descripcion'];?> </option>
                                                                                <?php else: ?>
                                                                                    <option value= '<?= $valor['codInstBanca'];?>'> <?= $valor['descripcion'];?> </option>
                                                                                <?php endif; ?>
                                                                            <?php endforeach;?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <div class="form-group">
                                                                        <label class="dob-input" for="tipoCuenta">Tipo de cuenta</label>
                                                                        <select class="custom-select" name="tipoCuenta" id="tipoCuenta">
                                                                            <option value= '1' <?= ($tipoCuenta == 'CC' || !isset($tipoCuenta) ) ? 'selected' : null ?> >Cuenta Corriente</option>
                                                                            <option value= '2' <?= ($tipoCuenta == 'CA') ? 'selected' : null ?>>Cuenta de Ahorro</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <div class="form-group">
                                                                        <label for="numCuenta">Número de cuenta</label>
                                                                        <input type="text" class="form-control mb-4" id="numCuenta" name="numCuenta" placeholder="Número de cuenta" value="<?= isset($numCuenta) ? $numCuenta : null;?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="dob-input" for="tipoNomina">Tipo Nómina</label>
                                                                    <select class="custom-select" name="tipoNomina" id="tipoNomina">
                                                                        <option value = '' selected >No se conoce</option>
                                                                        <?php foreach ($tipoNominaSel as $valor):?>
                                                                            <?php if( $valor['codTipoNomina'] == $tipoNomina):?>
                                                                                <option selected value= '<?= $valor['codTipoNomina'];?>'> <?= $valor['descripcion'];?> </option>
                                                                            <?php else: ?>
                                                                                <option value= '<?= $valor['codTipoNomina'];?>'> <?= $valor['descripcion'];?> </option>
                                                                            <?php endif; ?>
                                                                        <?php endforeach;?>
                                                                    </select>
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
                                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                    <div class="info">
                                        <h6 class="">Datos adicionales</h6>
                                        <div class="row">
                                            <div class="col-lg-12 mx-auto">
                                                <div class="row">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 mt-md-0 mt-4">
                                                        <div class="form">
                                                            <div class="row">
                                                                <div class="col-sm-3">
                                                                    <div class="form-group">
                                                                        <label class="dob-input" for="numHijos">Número de hijos</label>
                                                                        <input type="number" class="form-control mb-4" id="numHijos" name="numHijos" placeholder="0" value="<?= isset($numHijos) ? $numHijos : null;?>" min="0" pattern="^[0-9]+">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <div class="form-group">
                                                                        <label class="dob-input" for="becaEscolar">¿Cuenta con una beca escolar?</label>
                                                                        <select class="custom-select" name="becaEscolar" id="becaEscolar">
                                                                            <option value='2' <?= ($becaEscolar == 'N' || !isset($becaEscolar)) ? 'selected' : null ?> >No</option>
                                                                            <option value='1' <?= ($becaEscolar == 'S') ? 'selected' : null ?>>Sí</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-5">
                                                                    <div class="form-group">
                                                                        <label class="dob-input" for="incapacidad">¿El empleado posee alguna discapacidad?</label>
                                                                        <select class="custom-select" name="incapacidad" id="incapacidad">
                                                                            <option value='2' <?= ($incapacidad == 'N' || !isset($becaEscolar)) ? 'selected' : null ?> >No</option>
                                                                            <option value='1' <?= ($incapacidad == 'S') ? 'selected' : null ?> >Sí</option>
                                                                        </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="encargaduria">Diferencia por Encargaduria </label>
                                                                        <input type="number" step="any" class="form-control mb-4" id="encargaduria" name="encargaduria" placeholder="0" value="<?= isset($encargaduria) ? $encargaduria : null;?>" min="0"">
                                                                    </div>
                                                                    
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label class="dob-input" for="vacaciones">¿El empleado se encuentra de vacaciones?</label>
                                                                        <select class="custom-select" name="vacaciones" id="vacaciones">
                                                                            <option value='2' <?= ($indVacaciones == 'N' || !isset($indVacaciones)) ? 'selected' : null ?> >No</option>
                                                                            <option value='1' <?= ($indVacaciones == 'S') ? 'selected' : null ?>>Sí</option>
                                                                        </select>
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <label for="observaciones">Observaciones</label>
                                                                        <textarea class="form-control" id="observaciones" placeholder="Comentarios adicionales" rows="4"><?= isset($observaciones) ? $observaciones : null;?></textarea>
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

                <div class="row">
                    <div class="col layout-spacing"></div>
                </div>

                <div class="account-settings-footer bg-light">
                    
                    <div class="as-footer-container">

                        <div class="blockui-growl-message">
                            <i class="flaticon-double-check"></i>&nbsp; 
                        </div>
                        <button id="confirmar" class="btn btn-success" type="submit" form="general-info"><?= !isset($cedulaDB) ? 'Guardar cambios' : 'Actualizar datos'?></button>

                    </div>

                </div>
            </div>       
        </div>

<?= $this->endSection() ?>

<?= $this->section('pluginsBottom') ?>

    <script src= "<?=base_url();?>/public/assets/js/empleados/empleado.js" type="text/javascript"></script>
    
<?= $this->endSection() ?>

