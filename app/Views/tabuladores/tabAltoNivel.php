<?= $this->extend('template/template'); ?>

<?= $this->section('pluginsTop') ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="page-header">
                <div class="page-title">
                    <h3>Tabulador Alto Nivel</h3>
                </div>
            </div>
            
            <div class="row layout-top-spacing" id="cancel-row">
                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-6">
                        <div class="table-responsive mt-4 mb-4">
                            <table id="tabulador" class="table table-hover non-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Cargo administración pública</th>
                                        <th>Cargo F.M.A</th>
                                        <th>Monto Bs.</th>
                                        <th>Personal</th>
                                        <th>Anteriores</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Máximas Aut. de Órganos y Entes</td>
                                        <td>Presidente</td>
                                        <td><input type="text" id="" class="form-control" name="monto" value="28,48"></td>
                                        <td><input type="text" id="" class="form-control" name="personal" value=""></td>
                                        <td><input type="text" id="" class="form-control" name="anteriores" value="7,32"></td>
                                    </tr>
                                    <tr>
                                        <td>Directores Generales</td>
                                        <td>Director General</td>
                                        <td><input type="text" id="" class="form-control" name="monto" value="27,08"></td>
                                        <td><input type="text" id="" class="form-control" name="personal" value=""></td>
                                        <td><input type="text" id="" class="form-control" name="anteriores" value="6,96"></td>
                                    </tr>
                                    <tr>
                                        <td>Directores de Línea</td>
                                        <td>Director</td>
                                        <td><input type="text" id="" class="form-control" name="monto" value="25,90"></td>
                                        <td><input type="text" id="" class="form-control" name="personal" value=""></td>
                                        <td><input type="text" id="" class="form-control" name="anteriores" value="6,66"></td>
                                    </tr>
                                    <tr>
                                        <td>Jefes de División</td>
                                        <td>Asistente Ejecutivo</td>
                                        <td><input type="text" id="" class="form-control" name="monto" value="24,92"></td>
                                        <td><input type="text" id="" class="form-control" name="personal" value=""></td>
                                        <td><input type="text" id="" class="form-control" name="anteriores" value="6,41"></td>
                                    </tr>
                                    <tr>
                                        <td>Coordinadores de Area</td>
                                        <td>Coordinadores</td>
                                        <td><input type="text" id="" class="form-control" name="monto" value="23,80"></td>
                                        <td><input type="text" id="" class="form-control" name="personal" value=""></td>
                                        <td><input type="text" id="" class="form-control" name="anteriores" value="6,12"></td>
                                    </tr>
                                    <tr>
                                        <td>Sueldo Mínimo Nacional</td>
                                        <td>SMN</td>
                                        <td><input type="text" id="" class="form-control" name="monto" value="7"></td>
                                        <td><input type="text" id="" class="form-control" name="personal" value=""></td>
                                        <td><input type="text" id="" class="form-control" name="anteriores" value="1,80"></td>
                                    </tr>
                                </tbody>
                            </table>
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
                    <button id="confirmacion" class="btn btn-success warning confirm">Guardar</button>
                </div>
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
                    'El tabulador ha sido actualizado.',
                    'success'
                    )
                }
                })
            })
    </script>

<?= $this->endSection() ?>