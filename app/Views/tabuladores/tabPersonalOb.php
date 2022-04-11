<?= $this->extend('template/template'); ?>

<?= $this->section('pluginsTop') ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="page-header">
                <div class="page-title">
                    <h3>Tabulador Personal Obrero</h3>
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
                                        <th>Cargo</th>
                                        <th>Mínimo</th>
                                        <th>Máximo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Obrero 1</td>
                                        <td><input type="text" id="min1" class="form-control" name="min1" value="7,00"></td>
                                        <td><input type="text" id="max1" class="form-control" name="max1" value="7,18"></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Obrero 2</td>
                                        <td><input type="text" id="min2" class="form-control" name="min2" value="7,74"></td>
                                        <td><input type="text" id="max2" class="form-control" name="max2" value="7,92"></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Obrero 3</td>
                                        <td><input type="text" id="min3" class="form-control" name="min3" value="8,48"></td>
                                        <td><input type="text" id="max3" class="form-control" name="rango2" value="8,67"></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Obrero 4</td>
                                        <td><input type="text" id="min4" class="form-control" name="min4" value="9,23"></td>
                                        <td><input type="text" id="max4" class="form-control" name="max4" value="9,41"></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Obrero 5</td>
                                        <td><input type="text" id="min5" class="form-control" name="min5" value="9,97"></td>
                                        <td><input type="text" id="max5" class="form-control" name="max5" value="10,15"></td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Obrero 6</td>
                                        <td><input type="text" id="min6" class="form-control" name="min6" value="10,71"></td>
                                        <td><input type="text" id="max6" class="form-control" name="max6" value="10,89"></td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Obrero 7</td>
                                        <td><input type="text" id="min7" class="form-control" name="min7" value="11,45"></td>
                                        <td><input type="text" id="max7" class="form-control" name="max7" value="11,63"></td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Obrero 8</td>
                                        <td><input type="text" id="min8" class="form-control" name="min8" value="12,19"></td>
                                        <td><input type="text" id="max8" class="form-control" name="max8" value="12,38"></td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Obrero 9</td>
                                        <td><input type="text" id="min9" class="form-control" name="min9" value="12,94"></td>
                                        <td><input type="text" id="max9" class="form-control" name="max9" value="13,12"></td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Obrero 10</td>
                                        <td><input type="text" id="min10" class="form-control" name="min10" value="13,68"></td>
                                        <td><input type="text" id="max10" class="form-control" name="max10" value="13,86"></td>
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
            dom: '<"row"<"col-md-12"<"row" > ><"col-md-12"rt> >',
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