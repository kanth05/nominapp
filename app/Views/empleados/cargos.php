<?= $this->extend('template/template'); ?>

<?= $this->section('pluginsTop') ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="page-header">
                <div class="page-title">
                    <h3>Cargos</h3>
                </div>
            </div>
            
            <div class="row layout-top-spacing" id="cancel-row">
                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-6">
                        <div class="table-responsive mt-4 mb-4">
                            <form id="cargo">
                                <table id="html5-extension" class="table table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Código del cargo</th>
                                            <th>Descripción</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($cargos as $cargo): ?>
                                            <tr>
                                                <td><?= $cargo['codCargo'] ?></td>
                                                <td><input type="text" id="cod-<?= $cargo['codCargo'] ?>" class="form-control" name="cod-<?= $cargo['codCargo'] ?>" value="<?= $cargo['descripcion'] ?>"></td>
                                                <td class="text-center">
                                                    <a href="<?= base_url().route_to('borrarCargo', $cargo['codCargo'])?>" class="btn btn-dark btn-sm">Eliminar</a>
                                                </td>
                                            </tr>
                                        <?php endforeach;?>
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
                    <div class="row">
                        <div class="col-6">
                            <button id="confirmacion" class="btn btn-success warning confirm" type="submit" form="cargo">Guardar</button>
                        </div>
                        <div class="col-6">
                        <button id="nuevo" class="btn btn-success warning confirm" >Nuevo</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        
        
    </div>

<?= $this->endSection() ?>

<?= $this->section('pluginsBottom') ?>

    <script src= "<?=base_url();?>/public/assets/js/empleados/cargo.js" type="text/javascript"></script>

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
            "columns": [
                    null,
                    { "orderDataType": "dom-text", type: 'string' },
                    null
                ],
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
            "pageLength": 12 
        } );
    </script>

<?= $this->endSection() ?>