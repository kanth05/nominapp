<?= $this->extend('template/template'); ?>

<?= $this->section('pluginsTop') ?>

    <link rel="stylesheet" type="text/css" href="<?=base_url();?>/public/plugins/table/datatable/datatables.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>/public/plugins/table/datatable/dt-global_style.css">

<?= $this->endSection() ?>

<?= $this->section('content') ?>

    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="page-header">
                <div class="page-title">
                    <h3>Empleados</h3>
                </div>
            </div>
            
            <div class="row layout-top-spacing" id="cancel-row">
            
                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-6">
                        <div class="table-responsive mb-4 mt-4">
                            <table id="html5-extension" class="table table-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        <th>Cedula</th>
                                        <th>Cargo</th>
                                        <th>Departamento</th>
                                        <th>Status</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($empleados as $empleado): ?>
                                        <tr>
                                            <td><?= $empleado->nombres ?></td>
                                            <td><?= $empleado->apellidos ?></td>
                                            <td><?= $empleado->cedula ?></td>
                                            <td><?= $empleado->cargo ?></td>
                                            <td><?= $empleado->departamento ?></td>
                                            <?php 
                                                switch ($empleado->status) {
                                                    case 'ACT':
                                                        echo '<td><strong class="text-success text-bold">Activo</strong></td>';
                                                        break;
                                                    case 'SUS':
                                                        echo '<td><strong class="text-warning text-bold">Suspendido</strong></td>';
                                                        break;
                                                    default:
                                                        echo '<td><strong class="text-danger text-bold">Egresado</strong></td>';
                                                        break;
                                                }
                                            ?>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="<?=base_url().route_to('empleadoEditar',$empleado->cedula); ?>" class="btn btn-dark btn-sm">Editar</a>
                                                    <a href="" class="btn btn-dark btn-sm">Ver</a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?> 
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col layout-spacing"></div>
            </div>

            <div class="account-settings-footer bg-light">
                
                <div class="as-footer-container">

                    <a href="<?= base_url().route_to('empleadoNuevo'); ?>" class="btn btn-success">Nuevo</a>

                </div>

            </div>
        </div>
    </div>

<?= $this->endSection() ?>

<?= $this->section('pluginsBottom') ?>

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
            "pageLength": 7 
        } );
    </script>

<?= $this->endSection() ?>