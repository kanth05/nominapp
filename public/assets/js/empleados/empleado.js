$(document).ready( function(){

    const inicio = () => {

        eventos();

    }

    const guardarEmpleado = async ( url, data ) => {

        try {
            const res       = await fetch(url, {method: 'POST', body: data});
            const resultado = await res.json();

            if(resultado['msg']){
                return swal.insertQueueStep({
                    type: 'success',
                    title: resultado.msg
                });
            }else{

                mostrarError(resultado);

                return swal.insertQueueStep({
                    type: 'error',
                    title: 'Error al registrar el empleado'
                });
            }
        } catch (error) {
            return swal.insertQueueStep({
                type: 'error',
                title: error.err
            });
        }
    }

    const eventos = () => {

        const myForm = document.getElementById('general-info');
        const cedula = document.getElementById('cedula');
        const cedulaOld = document.getElementById('cedulaBD').value;
        const email  = document.getElementById('email');
        const status = document.getElementById('status');
        let statusDescrip = {
            1: 'ACT',
            2: 'SUS',
            3: 'EGR'
        };

        if( cedulaOld.length != 0){

            status.addEventListener( 'change', () => {

                let statusOld = $('#statusDB').val();
                let fecha = new Date();
                let observaciones = $('#observaciones').val();
                observaciones = observaciones +( (observaciones.length != 0) ? ' ||' : '' )+ ` Cambio de status: ${statusOld}->${statusDescrip[status.value]} (${fecha.getDate()}/${fecha.getMonth()}/${fecha.getFullYear()})`;
                $('#observaciones').val(observaciones);
            });

        }

        cedula.addEventListener('blur', (e) => {

            let ipAPI = 'http://localhost/nominApp/empleado/validaCedula';
            $(`#cedula`).removeClass('is-invalid');
            $(`#cedula`).removeClass('is-valid');
            $(`.error-div`).removeClass('d-block').addClass('d-none');
            $('.grupo-errores').remove();
            validaCampo(ipAPI, cedula.value, 'cedula');

        })

        email.addEventListener('blur', (e) => {

            let ipAPI = 'http://localhost/nominApp/empleado/validaCorreo';
            $(`#email`).removeClass('is-invalid');
            $(`#email`).removeClass('is-valid');
            $(`.error-div`).removeClass('d-block').addClass('d-none');
            $('.grupo-errores').remove();
            validaCampo(ipAPI, email.value, 'email');

        })

        myForm.addEventListener('submit', (e) => {
            
            e.preventDefault();
            let cedulaUrl = $('#cedulaBD').val();
            let observaciones = $('#observaciones').val();
            let endpoint = ( cedulaUrl.length === 0 ) ? 'empleado/guardar' : 'empleado/editar';
            let titulo = ( cedulaUrl.length === 0 ) ? 'Registrar un nuevo empleado' : 'Actualización de empleado';
            let ipAPI = 'http://localhost/nominApp/'+endpoint;
            let data = new FormData(myForm);
            data.append('cedulaDB', cedulaUrl);
            data.append('observaciones', observaciones);

            swal.queue([{
                title: titulo,
                confirmButtonText: 'Registrar',
                text: '¿Estás seguro de realizar la operación?',
                type: 'warning',
                showCancelButton: true,
                showLoaderOnConfirm: true,
                padding: '2em',
                preConfirm: async function() {
                    
                    $(`.error-div`).removeClass('d-block').addClass('d-none');
                    $('.grupo-errores').remove();
                    // return await guardarEmpleado(ipAPI, data);
                    await guardarEmpleado(ipAPI, data);

                    if( cedulaUrl.length === 0 ){
                        setTimeout( () => { window.location.replace("http://localhost/nominApp/empleados"); }, 1500); 
                    }

                }
            }]);
        });
    }

    const mostrarError = (errores) => {

        $(`.error-div`).removeClass('d-none').addClass('d-block');

        let msgError = '<ul class="grupo-errores list-group">';

        errores.forEach(err => {
            
            msgError += `<li class="list-group-item list-group-item-danger">${err['err']}</li >`;
            // $(`input[name=${err['campo']}]`).addClass('is-invalid');
            $(`#${err['campo']}`).addClass('is-invalid');

            if( err['campo'] != 'cedula' ){
                $(`#${err['campo']}`).on('blur', () => {
                    // $(`input[name=${err['campo']}]`).removeClass('is-invalid');
                    $(`#${err['campo']}`).removeClass('is-invalid');
                });
            }
            

        });

        msgError += '</ul>';

        ($(`.error-div`)).append(msgError);

    }

    const  validaCampo = async (url, valor, campo) =>{

        const data = new FormData;
        let idPersona = ( $('#idPersona').val().length === 0 ) ? 0 : $('#idPersona').val();
        data.append( campo, valor );
        data.append( 'idPersona', idPersona );

        try {

            const res = await fetch( url, { method: 'POST', body: data });
            const resultado = await res.json();

            if( resultado[0]['err'] ){
                console.log('error');
                mostrarError(resultado);
            }else{
                $(`#${resultado[0]['campo']}`).addClass('is-valid');
            }
            
        } catch (error) {
            swal.insertQueueStep({
                type: 'error',
                title: 'Error al validar la cedula'
            });
        }
    }

    /*ARRANCA EL CODIGO*/ 

    inicio();

});
