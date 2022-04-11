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
                                        <th>Años de servicio APN</th>
                                        <th>% Prima</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><input type="text" id="primaAnt1" class="form-control" name="primaAnt1" value="0,00"></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><input type="text" id="primaAnt2" class="form-control" name="primaAnt2" value="2,00"></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><input type="text" id="primaAnt3" class="form-control" name="primaAnt3" value="4,00"></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td><input type="text" id="primaAnt4" class="form-control" name="primaAnt4" value="6,00"></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td><input type="text" id="primaAnt5" class="form-control" name="primaAnt5" value="8,00"></td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td><input type="text" id="primaAnt6" class="form-control" name="primaAnt6" value="10,00"></td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td><input type="text" id="primaAnt7" class="form-control" name="primaAnt7" value="12,00"></td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td><input type="text" id="primaAnt8" class="form-control" name="primaAnt8" value="15,00"></td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td><input type="text" id="primaAnt9" class="form-control" name="primaAnt9" value="17,00"></td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td><input type="text" id="primaAnt10" class="form-control" name="primaAnt10" value="20,00"></td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td><input type="text" id="primaAnt11" class="form-control" name="primaAnt11" value="22,00"></td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td><input type="text" id="primaAnt12" class="form-control" name="primaAnt12" value="25,00"></td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td><input type="text" id="primaAnt13" class="form-control" name="primaAnt13" value="28,00"></td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td><input type="text" id="primaAnt14" class="form-control" name="primaAnt14" value="30,00"></td>
                                    </tr>
                                    <tr>
                                        <td>15</td>
                                        <td><input type="text" id="primaAnt15" class="form-control" name="primaAnt15" value="33,00"></td>
                                    </tr>
                                    <tr>
                                        <td>16</td>
                                        <td><input type="text" id="primaAnt16" class="form-control" name="primaAnt16" value="36,00"></td>
                                    </tr>
                                    <tr>
                                        <td>17</td>
                                        <td><input type="text" id="primaAnt17" class="form-control" name="primaAnt17" value="39,00"></td>
                                    </tr>
                                    <tr>
                                        <td>18</td>
                                        <td><input type="text" id="primaAnt18" class="form-control" name="primaAnt18" value="42,00"></td>
                                    </tr>
                                    <tr>
                                        <td>19</td>
                                        <td><input type="text" id="primaAnt19" class="form-control" name="primaAnt19" value="46,00"></td>
                                    </tr>
                                    <tr>
                                        <td>20</td>
                                        <td><input type="text" id="primaAnt20" class="form-control" name="primaAnt20" value="49,00"></td>
                                    </tr>
                                    <tr>
                                        <td>21</td>
                                        <td><input type="text" id="primaAnt21" class="form-control" name="primaAnt21" value="52,00"></td>
                                    </tr>
                                    <tr>
                                        <td>22</td>
                                        <td><input type="text" id="primaAnt22" class="form-control" name="primaAnt22" value="59,00"></td>
                                    </tr>
                                    <tr>
                                        <td>23</td>
                                        <td><input type="text" id="primaAnt23" class="form-control" name="primaAnt23" value="60,00"></td>
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
                    'La prima  ha sido actualizada.',
                    'success'
                    )
                }
                })
            })
    </script>

<?= $this->endSection() ?>