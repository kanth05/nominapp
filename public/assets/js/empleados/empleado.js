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

        cedula.addEventListener('blur', (e) => {

            let ipAPI = 'http://localhost/nominApp/empleado/validaCedula';
            $(`#cedula`).removeClass('is-invalid');
            $(`.error-div`).removeClass('d-block').addClass('d-none');
            $('.grupo-errores').remove();
            validaCedula(ipAPI, cedula.value);

        })

        myForm.addEventListener('submit', (e) => {
            
            e.preventDefault();
            const cedulaUrl = $('#cedulaBD').val();
            let endpoint = ( cedulaUrl.length === 0 ) ? 'empleado/guardar' : 'empleado/editar';
            let ipAPI = 'http://localhost/nominApp/'+endpoint;
            let data = new FormData(myForm);
            data.append('cedulaDB', cedulaUrl);
            swal.queue([{
                title: 'Registrar un nuevo empleado',
                confirmButtonText: 'Registrar',
                text: '¿Estás seguro de realizar la operación?',
                type: 'warning',
                showCancelButton: true,
                showLoaderOnConfirm: true,
                padding: '2em',
                preConfirm: function() {
                    
                    $(`.error-div`).removeClass('d-block').addClass('d-none');
                    $('.grupo-errores').remove();
                    return guardarEmpleado(ipAPI, data);

                }
            }])
              
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

    const  validaCedula = async (url, cedula) =>{

        const data = new FormData;
        data.append( 'cedula', cedula );

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
