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
                            return window.location.href = "http://localhost/nominApp/usuarios";
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

        let url = 'http://localhost/nominApp/UsuarioC/consultaEmplados';
        let optionTags = '';

        try {
            const res       = await fetch( url );
            const resultado = await res.json();

            resultado.res.forEach( empleado => {

                optionTags += `<option value="${empleado.cedula}"> ${empleado.cedula} - ${empleado.nombres} ${empleado.apellidos}</option>`

            });

        } catch (error) {

            optionTags += `<option value=""> Hubo un error en base de datos...</option>`
        }

        empleados = `<select id="empleados" class="custom-select">${optionTags}</select>`

    }

    const eventos = () => {

        let myForm = document.getElementById('general-info');
        let nuevo  = document.getElementById('nuevo');

        myForm.addEventListener('submit', (e) => {
            
            e.preventDefault();
            let ipAPI = 'http://localhost/nominApp/UsuarioC/actualizaEstado';
            let data = new FormData(myForm);
            swal.queue([{
                title: 'Actualizar el estado de los usuarios',
                confirmButtonText: 'Actualizar',
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

            let ipAPI = 'http://localhost/nominApp/UsuarioC/crearUsuario';
            swal.queue([{
                title: 'Crear usuario',
                confirmButtonText: 'Crear',
                showCancelButton: true,
                width: 800,
                showLoaderOnConfirm: true,
                padding: '2em',
                html: '<p>Seleccione el empleado a crearle el usuario</p>'+
                      '<div class="row">'+
                        '<div class="col-7 my-auto">'+empleados+'</div>'+
                        '<div class="col-5">'+
                            '<select class="custom-select my-4" id="nuevoRol" name="nuevoRol">'+
                                '<option value ="1">Analista de ficha técnica</option>'+
                                '<option value ="2">Analista de nómina</option>'+
                                '<option value ="3">Analista integral</option>'+
                                '<option value ="4">Jefe de departamento</option>'+
                            '</select>'+
                        '</div>'+
                      '</div>',
                preConfirm: async function() {
                    
                    let empleado = new FormData();
                    empleado.append('cedula', $('#empleados').val());
                    empleado.append('codRol', $('#nuevoRol').val());
                    return await editarComplementos(ipAPI, empleado);
                      
                }
            }])
        });
    }

    const iniciarComponentes = () => {
        
        $(`#html5-extension`).DataTable( {
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
        });

        const toast = swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            padding: '2em'
          });

          if($('#alert').val() == '1'){
            toast({
                type: 'success',
                title: 'Contraseña restablecida',
                padding: '2em',
            });
          }

          cargarEmpleados();
    }

    /*ARRANCA EL CODIGO*/ 
    let empleados = ''; //select que contiene todos los empleados de la organización y que se muestra en el modal
    inicio();

});
