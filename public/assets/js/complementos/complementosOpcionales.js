$(document).ready( function(){

    const inicio = () => {

        iniciarComponentes();
        eventos();

    }

    const editarComplementos = async ( url, data ) => {

        
        try {
            const res       = await fetch(url, {method: 'POST', body: data});
            const resultado = await res.json();

            if( resultado['msg'] ){
                return swal({
                    type: 'success',
                    title: resultado.msg,
                    onClose: false,
                    allowOutsideClick: false,
                    preConfirm: function(){
                        if( resultado.res != 'Ok'){
                            return window.location.href = "http://localhost/nominApp/complementosOpcionales?tipoBono="+resultado.res;
                        }else{
                            return null;
                        }
                    }
                });
            }else{

                $(`label[for=${resultado['campo']}]`).append(`<div class="alert alert-warning" role="alert">${resultado.err}</div>`);

                $('#'+resultado['campo']).on('blur', () => {
                    $('.alert').remove();
                });

                return swal.insertQueueStep({
                    type: 'error',
                    title: resultado.err
                });
            }
        } catch (error) {
            return swal.insertQueueStep({
                type: 'error',
                title: error.err
            });
        }
    }

    const cargarEmpleados = async ( tipoBono ) => {

        let url = 'http://localhost/nominApp/Tabulador/consultaEmplados';
        let data = new FormData();
        data.append('tipoBono', tipoBono )
        let optionTags = '';

        try {
            const res       = await fetch( url, {method: 'POST', body: data});
            const resultado = await res.json();

            resultado.res.forEach( empleado => {

                optionTags += `<option value="${empleado.idPersona}"> ${empleado.cedula} - ${empleado.nombres} ${empleado.apellidos}</option>`

            });

        } catch (error) {

            optionTags += `<option value=""> Hubo un error en base de datos...</option>`
        }

        empleados = `<select id="empleados" class="custom-select">${optionTags}</select>`

    }

    const eventos = () => {

        let myForm = document.getElementById('general-info');
        let select = document.getElementById('bonoEspecial');
        let nuevo  = document.getElementById('nuevo');

        myForm.addEventListener('submit', (e) => {
            
            e.preventDefault();
            let ipAPI = 'http://localhost/nominApp/tabulador/editarComplementosAdicionales';
            let data = new FormData(myForm);
            swal.queue([{
                title: 'Registrar un nuevo empleado',
                confirmButtonText: 'Registrar',
                text: '¿Estás seguro de realizar la operación?',
                type: 'warning',
                showCancelButton: true,
                showLoaderOnConfirm: true,
                padding: '2em',
                preConfirm: function() {
                    
                    return editarComplementos(ipAPI, data);

                }
            }])
              
        });

        nuevo.addEventListener('click', (e) => {

            let ipAPI = 'http://localhost/nominApp/Tabulador/guardarComplemento';
            swal.queue([{
                title: 'Añadir complemento adicional',
                confirmButtonText: 'Crear',
                showCancelButton: true,
                showLoaderOnConfirm: true,
                padding: '2em',
                html: '<p>Seleccione al empleado a aplicar el complemento</p>'+
                      '<div class="row">'+
                        '<div class="col-8 my-auto">'+empleados+'</div>'+
                        '<div class="col-4">'+
                            '<input class="form-control my-4" type="text" id="nuevoMonto" name="nuevoMonto" value="" pattern="^[a-zA-Z]+">'+
                        '</div>'+
                      '</div>',
                preConfirm: async function() {
                    
                    let empleado = new FormData();
                    empleado.append('idPersona', $('#empleados').val());
                    empleado.append('monto', $('#nuevoMonto').val());
                    empleado.append('tipoBono',$('#bonoEspecial').val());
                    return await editarComplementos(ipAPI, empleado);
                      
                }
            }])
        });

        select.addEventListener( 'change', (e) => {

            let selectBono = $('#bonoEspecial').val();
            cargarEmpleados( selectBono );

            if ( selectBono == 'CE'){

                if( $('.row-table-ce.d-none').length == 1){

                    if( $('.row-table-bp.d-block').length == 1 ){
                        
                        $('.row-table-bp').addClass('d-none');
                        $('.row-table-bp').removeClass('d-block');

                    }else if( $('.row-table-cs.d-block').length == 1 ){

                        $('.row-table-cs').addClass('d-none');
                        $('.row-table-cs').removeClass('d-block');
                    }
    
                    $('.row-table-ce').removeClass('d-none');
                    $('.row-table-ce').addClass('d-block');
    
                }

            }else if( selectBono == 'BP' ){

                if( $('.row-table-bp.d-none').length == 1){

                    if( $('.row-table-ce.d-block').length == 1 ){

                        $('.row-table-ce').addClass('d-none');
                        $('.row-table-ce').removeClass('d-block');

                    }else if( $('.row-table-cs.d-block').length == 1 ){

                        $('.row-table-cs').addClass('d-none');
                        $('.row-table-cs').removeClass('d-block');

                    }
    
                    $('.row-table-bp').removeClass('d-none');
                    $('.row-table-bp').addClass('d-block');
    
                }

            }else if( selectBono == 'CS' ){

                if( $('.row-table-cs.d-none').length == 1){

                    if( $('.row-table-ce.d-block').length == 1 ){

                        $('.row-table-ce').addClass('d-none');
                        $('.row-table-ce').removeClass('d-block');

                    }else if( $('.row-table-bp.d-block').length == 1 ){
                        
                        $('.row-table-bp').addClass('d-none');
                        $('.row-table-bp').removeClass('d-block');

                    }
    
                    $('.row-table-cs').removeClass('d-none');
                    $('.row-table-cs').addClass('d-block');
    
                }

            };
        });

    }

    const iniciarComponentes = () => {

        let tablas = [ 'table-ce', 'table-bp', 'table-cs'];
        let selectBono = $('#bonoEspecial').val();
        
        if ( selectBono.length != 0){
            cargarEmpleados( selectBono );
        }

        tablas.forEach(tabla => {
            
            $(`#${tabla}`).DataTable( {
                dom: '<"row"<"col-md-12"rt> <"col-md-12"<"row"<"col-md-5"i><"col-md-7"p>>> >',
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
        });

    }

    /*ARRANCA EL CODIGO*/ 
    let empleados = ''; //select que contiene todos los empleados de la organización y que se muestra en el modal
    inicio();

});
