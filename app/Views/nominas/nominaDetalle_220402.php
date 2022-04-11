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
                        <h3>Nueva nómina</h3>
                    <?php else: ?>
                        <h3>Detalle de nómina</h3>
                    <?php endif; ?>
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
                                        <th>Cuenta bancaria Venezuela</th>
                                        <th>Cuenta por cheques</th>
                                        <th>Banco destino</th>
                                        <th>Salario</th>
                                        <th>Años de servicios F.MLA</th>
                                        <th>Años de servicios APN</th>
                                        <th>Dias laborados</th>
                                        <th>Sueldo base(asignaciones)</th>
                                        <th>Prima profesional(asignaciones)</th>
                                        <th>Prima de antiguedad(asignaciones)</th>
                                        <th>Diferencia por encargaduria(asignaciones)</th>
                                        <th>Prima por hijos(asignaciones)</th>
                                        <th>Beca Escolar(asignaciones)</th>
                                        <th>Total de remuneración(asignaciones)</th>
                                        <th>Bono vacacional(asignaciones)</th>
                                        <th>Complemento de sueldo(asignaciones)</th>
                                        <th>Complemento especial de protección y estabilización económica</th>
                                        <th>Bono proteico(asignaciones)</th>
                                        <th>Retroactivo(asignaciones)</th>
                                        <th>ISLR(deducciones)</th>
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
                                        <th>Total Prestamos</th>
                                        <th>Total aporte patron</th>
                                        <th>Neto a cobrar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Alto Nivel</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                    </tr>
                                    <tr>
                                        <td>Empleados</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                    </tr>
                                    <tr>
                                        <td>Empleados</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                    </tr>
                                    <tr>
                                        <td>Obrero</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                    </tr>
                                    <tr>
                                        <td>Obrero</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                    </tr>
                                    <tr>
                                        <td>Obrero</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                    </tr>
                                    <tr>
                                        <td>Contratados</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                    </tr>
                                    <tr>
                                        <td>Comision</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                    </tr>
                                    <tr>
                                        <td>Jub y Pen</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                    </tr>
                                    <tr>
                                        <td>HP</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                    </tr>
                                    <tr>
                                        <td>HP</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                    </tr>
                                    <tr>
                                        <td>HP</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                    </tr>
                                    <tr>
                                        <td>HP</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                    </tr>
                                    <tr>
                                        <td>Total</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                        <td>00,000.00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
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
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script type="text/javascript">
        //
        $('#html5-extension').DataTable( {
            dom: '<"row"<"col-md-12"<"row"<"col-md-6"B><"col-md-6"f> > ><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5"i><"col-md-7"p>>> >',
            buttons: {
                buttons: [
                    { extend: 'excel', className: 'btn btn-success' },
                    { extend: 'print', className: 'btn btn-success' }
                ]
            },
            "oLanguage": {
                "oPaginate": { 
                    "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                    "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Pagina _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Buscar...",
               "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 500
        } );

        <?php if ( !isset($id) ): ?>

            $('.warning.confirm').on('click', function () {
                swal({
                    title: 'Revisa si hay campos vacíos ¿Estás seguro?',
                    text: "!Este proceso tardará un poco!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Confirmar',
                    padding: '2em'
                    }).then(function(result) {
                    if (result.value) {
                        swal(
                        '¡Proceso exitoso!',
                        'La nómina en cuestión ha sido creada.',
                        'success'
                        )
                    }
                    })
                })
        <?php endif; ?>
    </script>
<?= $this->endSection() ?>