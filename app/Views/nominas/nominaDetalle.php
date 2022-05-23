<?= $this->extend('template/template'); ?>

<?= $this->section('pluginsTop') ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="page-header">
                <div class="page-title">
                    <?php if ( !isset($id) ): ?>
                        <!-- <h3>Nueva nómina <?=null //$quincena ?> del mes de <?=null //$mes ?></h3> -->
                        <h3>Nueva nómina <?= $quincena ?> </h3>
                    <?php else: ?>
                        <!-- <h3>Detalle de nómina <?=null //$quincena?>  del mes de <?=null //$mes ?></h3> -->
                        <h3>Detalle de nómina <?= $quincena?> </h3>
                    <?php endif; ?>
                    <input hidden type="text" value="<?= isset($mes) ? $mes : null?>" id="mes">
                    <input hidden type="text" value="<?= isset($dia) ? $dia : null?>" id="dia">
                    <input hidden type="text" value="<?= isset($ano) ? $ano : null?>" id="ano">
                </div>
            </div>
            
            <div class="row layout-top-spacing" id="cancel-row">
            
                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-6">
                        <div class="table-responsive mb-4 mt-4">
                            <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Tipo de Nómina</th>
                                        <th>Cédula</th>
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        <th>Cargo</th>
                                        <th>Unidad Adscripta</th>
                                        <th>Número de cuenta</th>
                                        <th>¿Aplicará cheque?</th>
                                        <th>Banco destino</th>
                                        <th>Salario</th>
                                        <th>Años de servicios F.MLA</th>
                                        <th>Años de servicios APN</th>
                                        <th>Total Antiguedad</th>
                                        <th>Prima de Antiguedad</th>
                                        <th>Prima Profesionalización</th>
                                        <th>Beca escolar</th>
                                        <th>N° de Hijos</th>
                                        <th>Dias laborados</th>
                                        <th>Sueldo base(asignaciones)</th>
                                        <th>Prima profesional(asignaciones)</th>
                                        <th>Prima de antiguedad(asignaciones)</th>
                                        <th>Diferencia por encargaduria(asignaciones)</th>
                                        <th>Prima por hijos(asignaciones)</th>
                                        <th>Beca Escolar(asignaciones)</th>
                                        <th>Ayuda por Discapacidad</th>
                                        <th>Total de remuneración(asignaciones)</th>
                                        <th>Bono vacacional(asignaciones)</th>
                                        <th>Complemento de sueldo(asignaciones)</th>
                                        <th>Complemento especial de protección y estabilización económica</th>
                                        <th>Bono proteico(asignaciones)</th>
                                        <th>Retroactivo(asignaciones)</th>
                                        <th>Seguro social (IVSS)(deducciones)</th>
                                        <th>FAOV(deducciones)</th>
                                        <th>R.P.E(deducciones)</th>
                                        <th>Tesoreria de seguridad social(deducciones)</th>
                                        <th>Seguro social (IVSS)(aporte patron)</th>
                                        <th>FAOV(aporte patron)</th>
                                        <th>R.P.E(aporte patron)</th>
                                        <th>Tesoreria de seguridad social(aporte patron)</th>
                                        <th>Total asignación</th>
                                        <th>Total deducción</th>
                                        <th>Total aporte patron</th>
                                        <th>Neto a cobrar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($empleados as $empleado): ?>
                                        <tr>
                                            <td><?= $empleado->tiponomina?></td>
                                            <td><?= $empleado->cedula?></td>
                                            <td><?= $empleado->nombres?></td>
                                            <td><?= $empleado->apellidos?></td>
                                            <td><?= $empleado->cargo?></td>
                                            <td><?= $empleado->departamento?></td>
                                            <td><?= $empleado->numCuenta?></td>
                                            <td><?= ( $empleado->codInstBanca == 'BAN' || $empleado->codInstBanca == 'BMC' ) ? 'Sí' : 'No' ?></td>
                                            <td><?= $empleado->banco?></td>
                                            <td><?= $empleado->salario?></td>
                                            <td><?= $empleado->aniosFMA?></td>
                                            <td><?= $empleado->aniosAPN?></td>
                                            <td><?= $empleado->antiguedad?></td>
                                            <td><?= $empleado->primaAnt?>%</td>
                                            <td><?= $empleado->primaProf?>%</td>
                                            <td><?= $empleado->beca?></td>
                                            <td><?= $empleado->numHijos?></td>
                                            <td><?= $empleado->diasLaborales?></td>
                                            <td><?= $empleado->sueldoBase?></td>
                                            <td><?= $empleado->primaProfAsig?></td>
                                            <td><?= $empleado->primaAntAsig?></td>
                                            <td><?= $empleado->encargaduria?></td>
                                            <td><?= $empleado->primaHijos?></td>
                                            <td><?= $empleado->primaBeca?></td>
                                            <td><?= $empleado->primaDis?></td>
                                            <td><?= $empleado->totRemuneracion?></td>
                                            <td><?= $empleado->bonoVacc?></td>
                                            <td><?= $empleado->complementoSueldo?></td>
                                            <td><?= $empleado->complementoEspecial?></td>
                                            <td><?= $empleado->bonoProteico?></td>
                                            <td>0</td>
                                            <td><?= $empleado->seguroSocial ?></td>
                                            <td><?= $empleado->faov ?></td>
                                            <td><?= $empleado->rpe ?></td>
                                            <td><?= $empleado->tesoreriaSs ?></td>
                                            <td><?= $empleado->appSeguroSocial ?></td>
                                            <td><?= $empleado->appFaov ?></td>
                                            <td><?= $empleado->appRpe ?></td>
                                            <td><?= $empleado->appTesoreria ?></td>
                                            <td><?= $empleado->totAsignacion ?></td>
                                            <td><?= $empleado->toodeduccion ?></td>
                                            <td><?= $empleado->totApp ?></td>
                                            <td><?= $empleado->netoCobrar ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>

            <?php if ( !isset($id) ): ?>
                <div class="row">
                    <div class="col layout-spacing"></div>
                </div>
                <div class="account-settings-footer bg-light">
                    <div class="as-footer-container">
                        <button id="confirmacion" class="btn btn-success warning confirm">Aplicar nómina</button>
                    </div>
                </div>
            <?php endif; ?>
            
        </div>

        <div class="footer-wrapper">
            <div class="footer-section f-section-1">
                <p class="">Copyright © 2020 <a target="_blank" href="https://designreset.com">DesignReset</a>, All rights reserved.</p>
            </div>
            <div class="footer-section f-section-2">
                <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></p>
            </div>
        </div>
    </div>
    <!--  END CONTENT AREA  -->

<?= $this->endSection() ?>

<?= $this->section('pluginsBottom') ?>
    
    <script src= "<?=base_url();?>/public/assets/js/nomina/nominaDetalle.js" type="text/javascript"></script>

<?= $this->endSection() ?>