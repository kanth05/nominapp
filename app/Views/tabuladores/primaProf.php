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
            
            <div class="row layout-top-spacing" id="cancel-row">
                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-6">
                        <div class="table-responsive mt-4 mb-4">
                            <table id="tabulador" class="table table-hover non-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Grado</th>
                                        <th>% Prima</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Bachiller</td>
                                        <td><input type="text" id="primaAnt1" class="form-control" name="primaAnt1" value="0,00"></td>
                                    </tr>
                                    <tr>
                                        <td>Técnico I</td>
                                        <td><input type="text" id="primaAnt2" class="form-control" name="primaAnt2" value="20,00"></td>
                                    </tr>
                                    <tr>
                                        <td>Profesional Universitario</td>
                                        <td><input type="text" id="primaAnt3" class="form-control" name="primaAnt3" value="30,00"></td>
                                    </tr>
                                    <tr>
                                        <td>Especialista</td>
                                        <td><input type="text" id="primaAnt4" class="form-control" name="primaAnt4" value="40,00"></td>
                                    </tr>
                                    <tr>
                                        <td>Maestría</td>
                                        <td><input type="text" id="primaAnt5" class="form-control" name="primaAnt5" value="50,00"></td>
                                    </tr>
                                    <tr>
                                        <td>Doctorado</td>
                                        <td><input type="text" id="primaAnt6" class="form-control" name="primaAnt6" value="60,00"></td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Grado</th>
                                        <th>% Prima</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="account-settings-footer bg-light">   
            <div class="as-footer-container">
                <button id="confirmacion" class="btn btn-success warning confirm">Guardar</button>
            </div>
        </div>
    </div>

<?= $this->endSection() ?>

<?= $this->section('pluginsBottom') ?>

    <script>        
        /* Create an array with the values of all the input boxes in a column */
        $.fn.dataTable.ext.order['dom-text'] = function  ( settings, col )
        {
            return this.api().column( col, {order:'index'} ).nodes().map( function ( td, i ) {
                return $('input', td).val();
            } );
        }         
        /* Create an array with the values of all the input boxes in a column, parsed as numbers */
        $.fn.dataTable.ext.order['dom-text-numeric'] = function  ( settings, col )
        {
            return this.api().column( col, {order:'index'} ).nodes().map( function ( td, i ) {
                return $('input', td).val() * 1;
            } );
        }         
        /* Initialise the table with the required column ordering data types */
        $('#tabulador').DataTable( {
            dom: '<"row"<"col-md-12"<"row" > ><"col-md-12"rt> <"col-md-12"> >',
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Buscar...",
            "sLengthMenu": "_MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [12],
            "pageLength": 12 
        } );

        $('.warning.confirm').on('click', function () {
            swal({
                title: '¿Está seguro de la actualización?',
                text: "!La información cambiará!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Confirmar',
                padding: '2em'
                }).then(function(result) {
                if (result.value) {
                    swal(
                    '¡Proceso exitoso!',
                    'La prima  ha sido actualizada.',
                    'success'
                    )
                }
                })
            })
    </script>

<?= $this->endSection() ?>