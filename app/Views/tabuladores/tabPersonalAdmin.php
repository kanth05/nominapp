<?= $this->extend('template/template'); ?>

<?= $this->section('pluginsTop') ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="page-header">
                <div class="page-title">
                    <h3>Tabulador Personal Administrador</h3>
                </div>
            </div>
            
            <div class="row layout-top-spacing" id="cancel-row">
                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-6">
                        <div class="table-responsive mt-4 mb-4">
                            <table id="tabulador" class="table table-hover non-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Cargo</th>
                                        <th>Descripción</th>
                                        <th>I (0 a 4 años)</th>
                                        <th>II (5 a 9 años)</th>
                                        <th>III (10 a 14 años)</th>
                                        <th>IV (15 a 19 años)</th>
                                        <th>V (20 a 24 años)</th>
                                        <th>VI (25 a 29 años)</th>
                                        <th>VII (30 o más)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>B-1</td>
                                        <td>Bachiller I</td>
                                        <td><input type="text" id="rango1" class="form-control" name="rango1" value="7,00"></td>
                                        <td><input type="text" id="rango2" class="form-control" name="rango2" value="7,14"></td>
                                        <td><input type="text" id="rango3" class="form-control" name="rango3" value="7,28"></td>
                                        <td><input type="text" id="rango4" class="form-control" name="rango4" value="7,42"></td>
                                        <td><input type="text" id="rango5" class="form-control" name="rango5" value="7,56"></td>
                                        <td><input type="text" id="rango6" class="form-control" name="rango6" value="7,70"></td>
                                        <td><input type="text" id="rango7" class="form-control" name="rango7" value="7,84"></td>
                                    </tr>
                                    <tr>
                                        <td>B-2</td>
                                        <td>Bachiller II</td>
                                        <td><input type="text" id="rango1" class="form-control" name="rango1" value="8,40"></td>
                                        <td><input type="text" id="rango2" class="form-control" name="rango2" value="8,54"></td>
                                        <td><input type="text" id="rango3" class="form-control" name="rango3" value="8,68"></td>
                                        <td><input type="text" id="rango4" class="form-control" name="rango4" value="8,82"></td>
                                        <td><input type="text" id="rango5" class="form-control" name="rango5" value="8,96"></td>
                                        <td><input type="text" id="rango6" class="form-control" name="rango6" value="9,10"></td>
                                        <td><input type="text" id="rango7" class="form-control" name="rango7" value="9,24"></td>
                                    </tr>
                                    <tr>
                                        <td>B-3</td>
                                        <td>Bachiller III</td>
                                        <td><input type="text" id="rango1" class="form-control" name="rango1" value="9,80"></td>
                                        <td><input type="text" id="rango2" class="form-control" name="rango2" value="9,94"></td>
                                        <td><input type="text" id="rango3" class="form-control" name="rango3" value="10,08"></td>
                                        <td><input type="text" id="rango4" class="form-control" name="rango4" value="10,22"></td>
                                        <td><input type="text" id="rango5" class="form-control" name="rango5" value="10,36"></td>
                                        <td><input type="text" id="rango6" class="form-control" name="rango6" value="10,50"></td>
                                        <td><input type="text" id="rango7" class="form-control" name="rango7" value="10,64"></td>
                                    </tr>
                                    <tr>
                                        <td>T-1</td>
                                        <td>Tecnico I</td>
                                        <td><input type="text" id="rango1" class="form-control" name="rango1" value="11,76"></td>
                                        <td><input type="text" id="rango2" class="form-control" name="rango2" value="11,90"></td>
                                        <td><input type="text" id="rango3" class="form-control" name="rango3" value="12,04"></td>
                                        <td><input type="text" id="rango4" class="form-control" name="rango4" value="12,18"></td>
                                        <td><input type="text" id="rango5" class="form-control" name="rango5" value="12,32"></td>
                                        <td><input type="text" id="rango6" class="form-control" name="rango6" value="12,46"></td>
                                        <td><input type="text" id="rango7" class="form-control" name="rango7" value="12,60"></td>
                                    </tr>
                                    <tr>
                                        <td>T-2</td>
                                        <td>Tecnico II</td>
                                        <td><input type="text" id="rango1" class="form-control" name="rango1" value="13,72"></td>
                                        <td><input type="text" id="rango2" class="form-control" name="rango2" value="13,86"></td>
                                        <td><input type="text" id="rango3" class="form-control" name="rango3" value="14,00"></td>
                                        <td><input type="text" id="rango4" class="form-control" name="rango4" value="14,14"></td>
                                        <td><input type="text" id="rango5" class="form-control" name="rango5" value="14,28"></td>
                                        <td><input type="text" id="rango6" class="form-control" name="rango6" value="14,42"></td>
                                        <td><input type="text" id="rango7" class="form-control" name="rango7" value="14,56"></td>
                                    </tr>
                                    <tr>
                                        <td>P-1</td>
                                        <td>Profesional I</td>
                                        <td><input type="text" id="rango1" class="form-control" name="rango1" value="15,96"></td>
                                        <td><input type="text" id="rango2" class="form-control" name="rango2" value="16,10"></td>
                                        <td><input type="text" id="rango3" class="form-control" name="rango3" value="16,24"></td>
                                        <td><input type="text" id="rango4" class="form-control" name="rango4" value="16,38"></td>
                                        <td><input type="text" id="rango5" class="form-control" name="rango5" value="16,52"></td>
                                        <td><input type="text" id="rango6" class="form-control" name="rango6" value="16,66"></td>
                                        <td><input type="text" id="rango7" class="form-control" name="rango7" value="16,80"></td>
                                    </tr>
                                    <tr>
                                        <td>P-2</td>
                                        <td>Profesional II</td>
                                        <td><input type="text" id="rango1" class="form-control" name="rango1" value="18,20"></td>
                                        <td><input type="text" id="rango2" class="form-control" name="rango2" value="18,34"></td>
                                        <td><input type="text" id="rango3" class="form-control" name="rango3" value="18,48"></td>
                                        <td><input type="text" id="rango4" class="form-control" name="rango4" value="18,62"></td>
                                        <td><input type="text" id="rango5" class="form-control" name="rango5" value="18,76"></td>
                                        <td><input type="text" id="rango6" class="form-control" name="rango6" value="18,90"></td>
                                        <td><input type="text" id="rango7" class="form-control" name="rango7" value="19,04"></td>
                                    </tr>
                                    <tr>
                                        <td>P-3</td>
                                        <td>Profesional III</td>
                                        <td><input type="text" id="rango1" class="form-control" name="rango1" value="20,44"></td>
                                        <td><input type="text" id="rango2" class="form-control" name="rango2" value="20,58"></td>
                                        <td><input type="text" id="rango3" class="form-control" name="rango3" value="20,72"></td>
                                        <td><input type="text" id="rango4" class="form-control" name="rango4" value="20,86"></td>
                                        <td><input type="text" id="rango5" class="form-control" name="rango5" value="21,00"></td>
                                        <td><input type="text" id="rango6" class="form-control" name="rango6" value="21,14"></td>
                                        <td><input type="text" id="rango7" class="form-control" name="rango7" value="21,28"></td>
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